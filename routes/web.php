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

Route::get('/hello', function() {
    echo '<h1 style="text-align: center">Hello World</h1>';
    echo '<p style="text-align: center">Routing Ke-1</p>';
});

Route::get('/stock_item/{jenis?}/{merek?}', 
    function ($a = 'Mobil', $b = 'Di Tokopedia') {
    return "Cek sisa stok untuk $a $b";
});