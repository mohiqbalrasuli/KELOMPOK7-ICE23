<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KategoriKamarController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PesananKamarController;
use App\Http\Controllers\KategoriMenuController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananMenuController;
use App\Http\Controllers\MetodePembayaranController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('welcome');
});
// login-register
Route::get('/login',[AuthController::class,'ShowLogin']);
Route::get('/register',[AuthController::class,'ShowRegister']);

Route::get('/dashboard', [DashboardController::class, 'index']);
// pengguna
Route::get('/pengguna',[PenggunaController::class,'index']);
Route::get('/tambah-pengguna',[PenggunaController::class,'create']);
Route::get('/edit-pengguna',[PenggunaController::class,'edit']);
// kategori kamar
Route::get('/kategori-kamar',[KategoriKamarController::class,'index']);
Route::get('/tambah-kategori-kamar',[KategoriKamarController::class,'create']);
Route::get('/edit-kategori-kamar',[KategoriKamarController::class,'edit']);
// data kamar
Route::get('/data-kamar',[KamarController::class,'index']);
Route::get('/tambah-kamar',[KamarController::class,'create']);
Route::get('/edit-kamar',[KamarController::class,'edit']);
// pesanan kamar
Route::get('/pesanan-kamar',[KamarController::class,'pesanan']);
// kategori menu
Route::get('/kategori-menu',[KategoriMenuController::class,'index']);
Route::get('/tambah-kategori-menu',[KategoriMenuController::class,'create']);
Route::get('/edit-kategori-menu',[KategoriMenuController::class,'edit']);
// data menu
Route::get('/data-menu',[MenuController::class,'index']);
Route::get('/tambah-menu',[MenuController::class,'create']);
Route::get('/edit-menu',[MenuController::class,'edit']);
// pesanan menu
Route::get('/pesanan-menu',[MenuController::class,'pesanan']);
// metode pembayaran
Route::get('/metode-pembayaran',[MetodePembayaranController::class,'index']);
// data pembayaran
Route::get('/data-pembayaran',[PembayaranController::class,'index']);

Route::get('/mybee-hotel&resto', function () {
    return view('user.index');
});
