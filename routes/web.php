<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KategoriKamarController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PesananKamarController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index']);
// pengguna
Route::get('/pengguna',[PenggunaController::class,'index']);
// kategori kamar
Route::get('/kategori-kamar',[KategoriKamarController::class,'index']);
Route::get('/tambah-kategori-kamar',[KategoriKamarController::class,'create']);
Route::get('/edit-kategori-kamar',[KategoriKamarController::class,'edit']);
// data kamar
Route::get('/data-kamar',[KamarController::class,'index']);
Route::get('/tambah-kamar',[KamarController::class,'create']);
Route::get('/edit-kamar',[KamarController::class,'edit']);
// pesanan kamar
Route::get('/pesanan-kamar',[PesananKamarController::class,'index']);