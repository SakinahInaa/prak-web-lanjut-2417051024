@extends('layouts.app')

@section('content')
<div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
    <h2 style="color: #2c3e50; margin-bottom: 20px; text-align: center;">📋 Daftar User / Mahasiswa</h2>

    <!-- Alert Notifikasi Sukses -->
    @if(session('success'))
        <div style="background: linear-gradient(135deg, #2ed573, #1e90ff); color: white; padding: 12px 20px; border-radius: 8px; margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 10px rgba(46, 213, 115, 0.3);">
            <span>✨ {{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" style="background:none; border:none; color:white; font-weight:bold; cursor:pointer;">✕</button>
        </div>
    @endif

    @if(session('error'))
        <div style="background: linear-gradient(135deg, #ff4757, #ff6b81); color: white; padding: 12px 20px; border-radius: 8px; margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 10px rgba(255, 71, 87, 0.3);">
            <span>⚠️ {{ session('error') }}</span>
            <button onclick="this.parentElement.remove()" style="background:none; border:none; color:white; font-weight:bold; cursor:pointer;">✕</button>
        </div>
    @endif

    <table style="width: 100%; border-collapse: separate; border-spacing: 0 8px;">
        <thead>
            <tr style="background-color: #f1f2f6; color: #2f3542; text-align: left;">
                <th style="padding: 12px; border-radius: 8px 0 0 8px;">ID (UUID)</th>
                <th style="padding: 12px;">Nama</th>
                <th style="padding: 12px;">NPM</th>
                <th style="padding: 12px;">Kelas</th>
                <th style="padding: 12px; border-radius: 0 8px 8px 0; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr style="background: #ffffff; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                <td style="padding: 12px; font-size: 12px; color: #747d8c;">{{ Str::limit($user->id, 8) }}...</td>
                <td style="padding: 12px; font-weight: 600; color: #2f3542;">{{ $user->nama }}</td>
                <td style="padding: 12px; color: #57606f;">{{ $user->npm }}</td>
                <td style="padding: 12px; color: #57606f;">{{ $user->nama_kelas ?? $user->kelas->nama_kelas ?? '-' }}</td>
                <td style="padding: 12px; text-align: center;">
                    <!-- Tombol Edit Kece -->
                    <a href="{{ route('user.edit', $user->id) }}" style="background: linear-gradient(135deg, #eccc68, #ffa502); color: white; padding: 6px 14px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: bold; margin-right: 5px; box-shadow: 0 2px 6px rgba(255, 165, 0, 0.3);">✏️ Edit</a>

                    <!-- Tombol Hapus Kece -->
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus {{ $user->nama }}?')" style="background: linear-gradient(135deg, #ff6b81, #ff4757); color: white; border: none; padding: 7px 14px; border-radius: 6px; font-size: 13px; font-weight: bold; cursor: pointer; box-shadow: 0 2px 6px rgba(255, 71, 87, 0.3);">🗑️ Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align: center; padding: 20px; color: #a4b0be;">Belum ada data user.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection