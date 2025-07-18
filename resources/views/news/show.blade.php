@extends('layouts.app')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- Judul Artikel --}}
                <h1 class="fw-bold mb-3">Judul Artikel Berita Pertama</h1>
                <p class="text-muted">Dipublikasikan pada 08 Juli 2025</p>

                {{-- Gambar Utama Artikel --}}
                <img src="https://via.placeholder.com/800x400.png?text=Gambar+Utama" class="img-fluid rounded shadow-sm mb-4" alt="Gambar Utama Berita">

                {{-- Konten Artikel --}}
                <div class="article-content">
                    <p>Ini adalah paragraf pertama dari isi artikel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <h4 class="mt-4">Sub-judul dalam Artikel</h4>
                    <p>Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection