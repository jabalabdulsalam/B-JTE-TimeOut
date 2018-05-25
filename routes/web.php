<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/beranda', 'HomeController@index')->name('beranda');

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/jadwal-kerja', function () {
    return view('jadwalKerja');
});

Route::get('/daftar-pegawai', function () {
    return view('daftarPegawai');
});

Route::get('/profile', function () {
    return view('profile');
});

