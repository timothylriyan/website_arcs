@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-2 text-secondary">Edit Fitur</h2>
    <div class="card p-4 border-0 shadow-sm mt-3">
        <form action="{{ route('admin.features.update', $feature->id) }}" method="POST">
            @csrf
            @method('PATCH')
            @include('admin.features._form')
        </form>
    </div>
</div>
@endsection