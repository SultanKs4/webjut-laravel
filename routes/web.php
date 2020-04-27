<?php

use Illuminate\Support\Facades\Route;
use  Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');

Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');

Route::post('mahasiswa/simpan', 'MahasiswaController@simpan');

Route::get('mahasiswa/detail/{id}', 'MahasiswaController@detail');

Route::get('mahasiswa/edit/{id}', 'MahasiswaController@edit');

Route::post('mahasiswa/update/{id}', 'MahasiswaController@update');

Route::get('mahasiswa/hapus/{id}', 'MahasiswaController@hapus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/users', 'Admin\UsersController', ['except' => ['show', 'create', 'store']]);