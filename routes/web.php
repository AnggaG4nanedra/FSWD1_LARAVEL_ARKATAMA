<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\loginController;


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

//Route::get('/product', [ItemController::class, 'item']);


Route::get('/product', [ProdukController::class, 'index']);
Route::get('/productlist', [ProdukController::class, 'productlist']);


//route customer
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer-create', [CustomerController::class, 'create']);
Route::post('/customer-store', [CustomerController::class, 'store']);
Route::get('/customer-edit/{id}',[CustomerController::class, 'edit']);
Route::put('/customer-update',[CustomerController::class, 'update']);
Route::get('/customer-delete/{id}',[CustomerController::class, 'delete']);

Route::get('/login',[loginController::class, 'login']);





//route acces link 
Route::get('/', function () {
    return view('landing.landing');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/dashboard/daftarproduk', function () {
    return view('produk.daftarproduk');
})->name('daftarproduk');

Route::get('/dashboard/kategori', function () {
    return view('produk.kategori');
})->name('kategori');

Route::get('/dashboard/daftarpengguna', function () {
    return view('pengguna.daftarpengguna');
})->name('daftarpengguna');

Route::get('/dashboard/gruppengguna', function () {
    return view('pengguna.gruppengguna');
})->name('gruppengguna');

Route::get('/login', function () {
    return view('login.login');
})->name('login');





