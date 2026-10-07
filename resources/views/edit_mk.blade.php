@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Mata Kuliah</h1>
    
    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nama_mk">Nama Mata Kuliah:</label><br>
        <input type="text" id="nama_mk" name="nama_mk" value="{{ old('nama_mk', $mk->nama_mk) }}" required>
        @error('nama_mk')
            <br><span style="color: red;">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="sks">SKS:</label><br>
        <input type="number" id="sks" name="sks" value="{{ old('sks', $mk->sks) }}" required>
        @error('sks')
            <br><span style="color: red;">{{ $message }}</span>
        @enderror
        <br><br>

        <button type="submit">Update</button>
        <a href="{{ route('matakuliah.index') }}">Batal</a>
    </form>
</div>
@endsection