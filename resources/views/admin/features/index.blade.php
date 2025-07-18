@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-2 text-secondary">Manajemen Fitur</h2>
    <p>Kelola konten untuk section fitur (kotak dengan ikon) di halaman utama.</p>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="{{ route('admin.features.create') }}" class="btn btn-primary mb-3">Tambah Fitur Baru</a>

    <div class="card p-4 border-0 shadow-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Ikon</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col" style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($features as $feature)
                <tr>
                    <td><i class="{{ $feature->icon }} fs-3"></i></td>
                    <td>{{ $feature->title }}</td>
                    <td>{{ Str::limit($feature->description, 50) }}</td>
                    <td>
                        <a href="{{ route('admin.features.edit', $feature->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.features.destroy', $feature->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus fitur ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada data fitur.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection