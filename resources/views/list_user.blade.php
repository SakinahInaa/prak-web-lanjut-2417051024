@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
    <div>
        <h3 class="fw-bold text-dark m-0">Daftar Pengguna</h3>
        <p class="text-muted small m-0">Seluruh data pengguna dan kelas yang terdaftar dalam sistem.</p>
    </div>
    <a href="{{ route('user.create') }}" class="btn btn-star-blue px-4 py-2 rounded-3 fw-semibold shadow-sm">
        <i class="fa-solid fa-plus me-2"></i>Tambah Pengguna
    </a>
</div>

@include('components.user-table', ['users' => $users])
@endsection