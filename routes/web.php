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
    return 'Nama saya Angga';
});

Route::redirect('/nama', '/hello');

Route::fallback(function(){
    return "Maaf, halaman tidak ditemukan";
});

Route::get('/conflict/Samsung', function(){
    return 'Nama Barang saya adalah samsung';
});

Route::get('/items/{merk}',function($id){
    return 'Nama Barang' . $id;
});

Route::get('/conflict/{nama}', function($namaitem){
    return 'Nama Barang : ' .  $namaitem;
});

Route::get('/product', [ItemController::class, 'item']);
