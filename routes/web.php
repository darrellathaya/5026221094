<?php

use Illuminate\Support\Facades\Route;

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

Route::get('blog2', function() {
    return view('blog');
});

Route::get('week1', function () {
    return view('hello');
});

Route::get('week2', function () {
    return view('berita');
});

Route::get('week3', function () {
    return view('boot');
});

Route::get('week4', function () {
    return view("progressbar");
});

Route::get('week5', function () {
    return view("js1");
});

Route::get('week6', function () {
    return view("js2");
});

Route::get('week7', function () {
    return view("nyknicks");
});

Route::get('week8', function () {
    return view("pizza");
});

Route::get('week9', function () {
    return view("validasi");
});

Route::get('week10', function () {
    return view("ets");
});

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('tampiljam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\DosenController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\DosenController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\DosenController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
