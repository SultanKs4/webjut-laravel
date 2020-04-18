@extends('master')

@section('title', 'Tambah Data')

@section('judul_halaman', 'Tambah Data Mahasiswa')

@section('konten')

<a href="/mahasiswa" class="btn btn-danger">Kembali</a>
<br>
<br>
<form action="/mahasiswa/simpan" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="namamhs">Nama</label>
        <input id="namamhs" class="form-control" type="text" name="namamhs" required> <br>
    </div>
    <div class="form-group">
        <label for="nimmhs">NIM</label>
        <input id="nimmhs" class="form-control" type="number" name="nimmhs" required> <br>
    </div>
    <div class="form-group">
        <label for="emailmhs">E-mail</label>
        <input id="emailmhs" class="form-control" type="email" name="emailmhs" required> <br>
    </div>
    <div class="form-group">
        <label for="jurusanmhs">Jurusan</label>
        <input id="jurusanmhs" class="form-control" type="text" name="jurusanmhs" required> <br>
    </div>
    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
</form>
@endsection