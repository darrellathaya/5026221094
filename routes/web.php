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
