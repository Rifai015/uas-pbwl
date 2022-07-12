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

Auth::routes();

//konsumen
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/konsumen', [App\Http\Controllers\KonsumenController::class, 'index']);

Route::get('/konsumen/create', [App\Http\Controllers\KonsumenController::class, 'create']);

Route::post('/konsumen', [App\Http\Controllers\KonsumenController::class, 'store']);

Route::get('/konsumen/{id}/edit', [App\Http\Controllers\KonsumenController::class, 'edit']);

Route::patch('/konsumen/{id}',  [App\Http\Controllers\KonsumenController::class, 'update']);

Route::delete('/konsumen/{id}', [App\Http\Controllers\KonsumenController::class, 'destroy']);

//barang
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index']);

Route::get('/barang/create', [App\Http\Controllers\BarangController::class, 'create']);

Route::post('/barang', [App\Http\Controllers\BarangController::class, 'store']);

Route::get('/barang/{id}/edit', [App\Http\Controllers\BarangController::class, 'edit']);

Route::patch('/barang/{id}',  [App\Http\Controllers\BarangController::class, 'update']);

Route::delete('/barang/{id}', [App\Http\Controllers\BarangController::class, 'destroy']);

//transaksi
Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);

Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create']);

Route::post('/transaksi', [App\Http\Controllers\TransaksiController::class, 'store']);

Route::get('/transaksi/{id}/edit', [App\Http\Controllers\TransaksiController::class, 'edit']);

Route::patch('/transaksi/{id}',  [App\Http\Controllers\TransaksiController::class, 'update']);

Route::delete('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy']);
