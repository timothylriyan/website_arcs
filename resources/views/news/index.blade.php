{{-- File: resources/views/news/index.blade.php (Versi yang Benar) --}}

@extends('layouts.app') {{-- WAJIB ADA: Memberitahu Blade untuk pakai layout utama --}}

@section('content') {{-- WAJIB ADA: Memulai section yang akan diisi konten --}}

<div class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">News & Information</h2>
            <p class="text-muted">Stay updated with our latest news and information.</p>
        </div>

        <div class="row">
            {{-- Contoh Artikel 1 --}}
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/2.jpg') }}" class="card-img-top" alt="Judul News Pertama">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Judul News Pertama</h5>
                        <p class="card-text text-muted">Ini adalah kutipan singkat dari isi news...</p>
                        <a href="#" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Publised at 08 July 2025
                    </div>
                </div>
            </div>

            {{-- Contoh Artikel 2 --}}
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/3.jpg') }}" class="card-img-top" alt="Judul News Kedua">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Judul News Kedua</h5>
                        <p class="card-text text-muted">Ini adalah kutipan singkat dari isi news...</p>
                        <a href="#" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                     <div class="card-footer text-muted">
                        Published at 07 Juli 2025
                    </div>
                </div>
            </div>

            {{-- Contoh Artikel 3 --}}
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                   <img src="{{ asset('images/4.jpg') }}" class="card-img-top" alt="Judul News Ketiga">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Judul News Ketiga</h5>
                        <p class="card-text text-muted">Ini adalah kutipan singkat dari isi news...</p>
                        <a href="#" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                     <div class="card-footer text-muted">
                        Publish at 06 July 2025
                    </div>
                </div>
            </div>
        </div>

        {{-- Pagination --}}
        <nav class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

    </div>
</div>

@endsection {{-- WAJIB ADA: Menutup section konten --}}