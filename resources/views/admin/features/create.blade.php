@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-2 text-secondary">Tambah Fitur Baru</h2>
    <div class="card p-4 border-0 shadow-sm mt-3">
        <form action="{{ route('admin.features.store') }}" method="POST">
            @csrf
            @include('admin.features._form', ['feature' => new \App\Models\Feature])
        </form>
    </div>
</div>
@endsection