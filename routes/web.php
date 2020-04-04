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
    return view('welcome');
});
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/cari', 'SiswaController@cari');
Route::get('/siswa/tambah', 'SiswaController@tambah');
Route::post('/siswa/tambah', 'SiswaController@create');
Route::get('/siswa/edit/{id}', 'SiswaController@edit');
Route::post('/siswa/update/{id}', 'SiswaController@update');
Route::get('/siswa/hapus/{id}', 'SiswaController@hapus');










Route::get('/admin', 'AdminController@index');
Route::get('/admin/cari', 'AdminController@cari');
Route::get('/admin/tambah', 'AdminController@tambah');
Route::post('/admin/tambah', 'AdminController@create');
Route::get('/pegawai/edit/{id}', 'AdminController@edit');
Route::post('/pegawai/update/{id}', 'AdminController@update');
Route::get('/pegawai/hapus/{id}', 'AdminController@hapus');
Route::get('/admin/transaksi', 'AdminController@transaksi');
Route::get('/admin/inputlembur', 'AdminController@inputlembur');


