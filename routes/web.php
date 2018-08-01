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







Route::get('/home', 'HomeController@index');

Route::resource('users', 'userController');

Route::resource('absens', 'absenController');

Route::resource('karyawans', 'karyawanController');

Route::resource('jabatan', 'jabatanController');

Route::resource('pembayaran', 'pembayaranController');

Route::resource('gajis', 'gajiController');