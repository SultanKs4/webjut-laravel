@extends('master')

@section('title', 'Tambah Data')

@section('judul_halaman', 'Tambah Data Mahasiswa')

@section('konten')

<a href="/mahasiswa" class="btn btn-danger">Kembali</a>
<br>
<br>
@if (count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/mahasiswa/simpan" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama">Nama</label>
        <input id="nama" class="form-control" type="text" name="nama" value="{{ old('nama') }}"> <br>
    </div>
    <div class="form-group">
        <label for="nim">NIM</label>
        <input id="nim" class="form-control" type="number" name="nim" value="{{ old('nim') }}"> <br>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}"> <br>
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input id="jurusan" class="form-control" type="text" name="jurusan" value="{{ old('jurusan') }}"> <br>
    </div>
    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
</form>
@endsection