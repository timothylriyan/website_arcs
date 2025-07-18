<?php

namespace App\Http\Controllers;

use App\Models\Service; // <-- Pastikan ini ada
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menampilkan halaman utama.
     */
    public function home()
    {
        // Mengambil semua data dari tabel services
        // Jika Anda belum menjalankan `php artisan migrate`, baris ini bisa di-comment dulu
        $services = Service::all();

        // Mengirim data 'services' ke view 'home' dan menampilkannya
        return view('home', [
            'services' => $services
        ]);
    }

    /**
     * Menampilkan halaman rekrutmen.
     */
    public function recruitment()
    {
        return view('recruitment');
    }
}