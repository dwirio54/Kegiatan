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

Route::group(['prefix' => 'DataSiswa'], function() {
    Route::get('/index', 'DataSiswaController@index')->name('datasiswa.index');
});



