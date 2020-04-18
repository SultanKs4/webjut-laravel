@extends('master')

@section('title', 'Home')

@section('judul_halaman', 'Data Mahasiswa')

@section('konten')
<a href="/mahasiswa" class="btn btn-danger">Kembali</a>
<br>
<br>
@foreach ($mahasiswa as $mhs)
<h5 class="card-title">{{ $mhs->nama }}</h5>
<p class="card-text">
    <label for=""><b>NIM : </b></label>
    {{ $mhs->nim }}</p>
<p class="card-text">
    <label for=""><b>E-mail : </b></label>
    {{ $mhs->email }}</p>
<p class="card-text">
    <label for=""><b>Jurusan : </b></label>
    {{ $mhs->jurusan }}</p>
@endforeach
@endsection