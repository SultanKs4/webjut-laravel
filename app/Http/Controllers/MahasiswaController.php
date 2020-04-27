<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('index', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required',
            'nim' => 'required|numeric',
            'email' => 'required|email',
            'jurusan' => 'required'
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ]);

        return view('simpan', ['data' => $request]);
    }

    public function detail($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('detail', ['mahasiswa' => $mahasiswa]);
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update($id, Request $request)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request->namamhs;
        $mahasiswa->nim = $request->nimmhs;
        $mahasiswa->email = $request->emailmhs;
        $mahasiswa->jurusan = $request->jurusanmhs;
        $mahasiswa->save();
        return redirect()->route('mahasiswa');
    }

    public function hapus($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa');
    }
}