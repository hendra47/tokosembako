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
  return redirect('home');
});

Auth::routes();



//absen
Route::post('/laporan-absen-cari', 'laporan1@cari');
Route::get('/laporan1', 'laporan1@laporan');
Route::get('/laporan-absen-cari', 'laporan1@laporan');

//bayar gaji
Route::post('/bayar-gaji', 'laporan2@cari');
Route::get('/bayar-gaji', 'pembayaranController@create');


Route::get('/home', 'HomeController@index');

Route::resource('users', 'userController');

Route::resource('absens', 'absenController');

Route::resource('karyawans', 'karyawanController');

Route::resource('jabatan', 'jabatanController');

Route::resource('pembayaran', 'pembayaranController');

Route::resource('gajis', 'gajiController');