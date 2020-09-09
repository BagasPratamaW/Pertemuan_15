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

Route::get('/siswa', function() {
    return  view('siswa');
});

Route::get('/cari/{nama}/{umur}/{kota}', 
function ($nama, $umur, $kota) {
    return  view('cari')
    -> with('nama', $nama)
    -> with('umur', $umur)
    -> with('kota', $kota);
});

Route::get('/how', function() {
    return  view('how');
});

Route::get('/mapel', function() {
    return  view('mapel');
});