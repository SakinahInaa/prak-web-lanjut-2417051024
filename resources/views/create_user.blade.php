@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7 col-lg-5">
        <div class="card card-custom p-4 bg-white">
            <div class="text-center mb-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-star-blue-light text-star-blue rounded-circle p-3 mb-2" style="width: 60px; height: 60px;">
                    <i class="fa-solid fa-user-plus fa-xl"></i>
                </div>
                <h4 class="fw-bold m-0">Tambah Pengguna</h4>
                <p class="text-muted small">Lengkapi formulir untuk membuat pengguna baru</p>
            </div>

            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold text-secondary small">NAMA LENGKAP</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control bg-light border-start-0" id="nama" name="nama" placeholder="Contoh: Sakinah" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label fw-semibold text-secondary small">NPM</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-solid fa-id-card"></i></span>
                        <input type="text" class="form-control bg-light border-start-0" id="npm" name="npm" placeholder="Contoh: 2417051024" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold text-secondary small">KELAS</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-solid fa-graduation-cap"></i></span>
                        <select name="kelas_id" id="kelas_id" class="form-select bg-light border-start-0" required>
                            <option value="" disabled selected>-- Pilih Kelas --</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id ?? $kelasItem->nama_kelas }}">
                                    {{ $kelasItem->nama_kelas ?? 'Kelas ' . $kelasItem->id }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-star-blue py-2.5 rounded-3 fw-bold">
                        <i class="fa-solid fa-paper-plane me-2"></i>Simpan Data
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