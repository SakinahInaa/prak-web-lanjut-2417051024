@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7 col-lg-5">
        <div class="card card-custom p-4 bg-white">
            <div class="text-center mb-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-star-blue-light text-star-blue rounded-circle p-3 mb-2" style="width: 60px; height: 60px;">
                    <i class="fa-solid fa-user-pen fa-xl"></i>
                </div>
                <h4 class="fw-bold m-0">Edit Pengguna</h4>
                <p class="text-muted small">Perbarui data pengguna di bawah ini</p>
            </div>

            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold text-secondary small">NAMA LENGKAP</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control bg-light border-start-0 @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" placeholder="Contoh: Sakinah" required>
                    </div>
                    @error('nama')
                        <span class="text-danger small ms-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label fw-semibold text-secondary small">NPM</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-solid fa-id-card"></i></span>
                        <input type="text" class="form-control bg-light border-start-0 @error('npm') is-invalid @enderror" id="npm" name="npm" value="{{ old('npm', $user->npm) }}" placeholder="Contoh: 2417051024" required>
                    </div>
                    @error('npm')
                        <span class="text-danger small ms-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold text-secondary small">KELAS</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-solid fa-graduation-cap"></i></span>
                        <select name="kelas_id" id="kelas_id" class="form-select bg-light border-start-0 @error('kelas_id') is-invalid @enderror" required>
                            <option value="" disabled>-- Pilih Kelas --</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}" {{ (old('kelas_id', $user->kelas_id) == $kelasItem->id) ? 'selected' : '' }}>
                                    {{ $kelasItem->nama_kelas ?? 'Kelas ' . $kelasItem->id }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('kelas_id')
                        <span class="text-danger small ms-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-star-blue py-2.5 rounded-3 fw-bold">
                        <i class="fa-solid fa-rotate me-2"></i>Update Data
                    </button>
                    <a href="{{ url('/user') }}" class="btn btn-light py-2.5 rounded-3 fw-semibold text-secondary">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection