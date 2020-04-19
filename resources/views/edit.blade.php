@extends('master')

@section('title', 'Home')

@section('judul_halaman', 'Data Mahasiswa')

@section('konten')
<a href="/mahasiswa" class="btn btn-danger">Kembali</a>
<br>
<br>
<form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $mahasiswa->id }}"> <br>
    <div class="form-group">
        <label for="namamhs">Nama</label>
        <input id="namamhs" class="form-control" type="text" name="namamhs" required value="{{ $mahasiswa->nama }}">
        <br>
    </div>
    <div class="form-group">
        <label for="nimmhs">NIM</label>
        <input id="nimmhs" class="form-control" type="number" name="nimmhs" required value="{{ $mahasiswa->nim }}"> <br>
    </div>
    <div class="form-group">
        <label for="emailmhs">E-mail</label>
        <input id="emailmhs" class="form-control" type="email" name="emailmhs" required value="{{ $mahasiswa->email }}">
        <br>
    </div>
    <div class="form-group">
        <label for="jurusanmhs">Jurusan</label>
        <input id="jurusanmhs" class="form-control" type="text" name="jurusanmhs" required
            value="{{ $mahasiswa->jurusan }}">
        <br>
    </div>
    <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
</form>
@endsection