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

// Route::get('/','Auth\LoginController@showLoginForm')->name('login');

// Route::get('/Admin/dashboard', 'AdminController@index')->name('dashboard');
// Route::get('/Admin', 'AuthAdmin\AdminLoginController@showlogin')->name('login.admin');
// Route::post('/Admin/login', 'AuthAdmin\AdminLoginController@login' )->name('admin.masuk');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/pegawai', 'PegawaiController');
Route::resource('/buku', 'BukuController');
Route::resource('/anggota', 'AnggotaController');
Route::resource('/peminjaman', 'PeminjamanController');
Route::resource('/pengembalian', 'PengembalianController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
