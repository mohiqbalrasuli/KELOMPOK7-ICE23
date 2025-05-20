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
use App\Http\Controllers\LandingController;

Route::get('/', function () {
    return view('welcome');
});
// login-register
Route::get('/login',[AuthController::class,'ShowLogin']);
Route::get('/register',[AuthController::class,'ShowRegister']);

Route::get('/dashboard', [DashboardController::class, 'index']);
// pengguna
Route::get('/pengguna',[PenggunaController::class,'index']);
Route::get('/pengguna/create',[PenggunaController::class,'create']);
Route::post('/pengguna/store',[PenggunaController::class,'store']);
Route::get('/pengguna/edit/{id}',[PenggunaController::class,'edit']);
Route::post('/pengguna/update/{id}',[PenggunaController::class,'update']);
Route::get('/pengguna/delete/{id}',[PenggunaController::class,'delete']);
// kategori kamar
Route::get('/kategori-kamar',[KategoriKamarController::class,'index']);
Route::get('/kategori-kamar/create',[KategoriKamarController::class,'create']);
Route::post('/kategori-kamar/store',[KategoriKamarController::class,'store']);
Route::get('/kategori-kamar/edit/{id}',[KategoriKamarController::class,'edit']);
Route::post('/kategori-kamar/update/{id}',[KategoriKamarController::class,'update']);
Route::get('/kategori-kamar/delete/{id}',[KategoriKamarController::class,'delete']);
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
// landing page
Route::get('/mybee-hotel&resto', [LandingController::class, 'index']);
Route::get('/mybee-hotel&resto/rooms', [LandingController::class, 'rooms']);
Route::get('/mybee-hotel&resto/restaurant', [LandingController::class, 'restaurant']);
Route::get('/mybee-hotel&resto/about', [LandingController::class, 'about']);
Route::get('/mybee-hotel&resto/blog', [LandingController::class, 'blog']);
Route::get('/mybee-hotel&resto/contact', [LandingController::class, 'contact']);
