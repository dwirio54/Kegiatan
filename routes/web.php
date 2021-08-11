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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'kegiatan'], function(){
    Route::get('/tampilkan', 'KegiatanController@show')->name('kegiatan.tampilkan');
    Route::get('/index', 'KegiatanController@index')->name('kegiatan.index');
});
Route::get('/pendaftaran', 'DaftarController@index')->name('daftar.index');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('/verifikasi-pendaftaran','VerifikasiController@index')->name('verifikasi-pendaftaran.index');
Route::get('/laporan', 'LaporanController@index')->name('laporan.index');

Route::group(['prefix' => 'data'], function() {
    Route::get('/siswa', 'DataSiswaController@index')->name('data.siswa');
});

Route::group(['prefix' => 'tambah-data'], function() {
    Route::get('/siswa', 'DataSiswaController@create')->name('tambah-data.siswa');
});

Route::group(['prefix' => 'edit-data'], function() {
    route::get('siswa', 'DataSiswaController@edit')->name('edit-data.siswa');
});

Route::group(['prefix'  => 'manage-kegiatan'], function(){
    route::get('/','ManagekegiatanController@index')->name('manage-kegiatan');
    route::get('/add-form','ManagekegiatanController@create')->name('manage-kegiatan.add-form');
    route::get('/add-form/edit-kegiatan','ManagekegiatanController@edit')->name('manage-kegiatan.add-form.edit-kegiatan');
});

    




