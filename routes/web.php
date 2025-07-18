<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;      // <-- Dari kode Anda (kanan)
use App\Http\Controllers\ProfileController;  // <-- Dari kode Breeze (kiri)
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\FeatureController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute-rute
| ini dimuat oleh RouteServiceProvider dan semuanya akan
| ditugaskan ke grup middleware "web". Buat sesuatu yang hebat!
|
*/
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // ... route dashboard & profile
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('features', FeatureController::class); // <-- TAMBAHKAN BARIS INI
});

// Route untuk halaman utama (One Page Website) - Ini yang kita inginkan
Route::get('/', [PageController::class, 'home'])->name('home');
// Route untuk halaman Recruitment
Route::get('/recruitment', [PageController::class, 'recruitment'])->name('recruitment');
// Route untuk halaman news
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// Route untuk halaman detail service
// PASTIKAN BARIS INI ADA
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

// Route untuk dashboard setelah login - Ini penting dari Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk halaman profil user - Ini penting dari Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk sistem login, register, forgot password, dll.
require __DIR__.'/auth.php';