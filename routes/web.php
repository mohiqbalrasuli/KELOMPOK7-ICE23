<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KategoriKamarController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KategoriMenuController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MetodePembayaranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\pesananController;

Route::get('/', function () {
    return redirect('/mybee-hotel&resto');
});
// login-register
Route::get('/login', [AuthController::class, 'ShowLogin'])->name('login');
Route::post('/login', [AuthController::class, 'Login']);
Route::get('/register', [AuthController::class, 'ShowRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'Logout']);

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        // pengguna
        Route::get('/pengguna', [PenggunaController::class, 'index']);
        Route::get('/pengguna/create', [PenggunaController::class, 'create']);
        Route::post('/pengguna/store', [PenggunaController::class, 'store']);
        Route::get('/pengguna/edit/{id}', [PenggunaController::class, 'edit']);
        Route::post('/pengguna/update/{id}', [PenggunaController::class, 'update']);
        Route::get('/pengguna/delete/{id}', [PenggunaController::class, 'delete']);
        // kategori kamar
        Route::get('/kategori-kamar', [KategoriKamarController::class, 'index']);
        Route::get('/kategori-kamar/create', [KategoriKamarController::class, 'create']);
        Route::post('/kategori-kamar/store', [KategoriKamarController::class, 'store']);
        Route::get('/kategori-kamar/edit/{id}', [KategoriKamarController::class, 'edit']);
        Route::post('/kategori-kamar/update/{id}', [KategoriKamarController::class, 'update']);
        Route::get('/kategori-kamar/delete/{id}', [KategoriKamarController::class, 'delete']);
        // data kamar
        Route::get('/data-kamar', [KamarController::class, 'index']);
        Route::get('/kamar/create', [KamarController::class, 'create']);
        Route::post('/kamar/store', action: [KamarController::class, 'store']);
        Route::get('/kamar/edit/{id}', [KamarController::class, 'edit']);
        Route::post('/kamar/update/{id}', [KamarController::class, 'update']);
        Route::get('/kamar/delete/{id}', [KamarController::class, 'delete']);
        // pesanan kamar
        Route::get('/pesanan-kamar', [pesananController::class, 'pesanan']);
        // kategori menu
        Route::get('/kategori-menu', [KategoriMenuController::class, 'index']);
        Route::get('/kategori-menu/create', [KategoriMenuController::class, 'create']);
        Route::post('/kategori-menu/store', [KategoriMenuController::class, 'store']);
        Route::get('/kategori-menu/edit/{id}', [KategoriMenuController::class, 'edit']);
        Route::post('/kategori-menu/update/{id}', [KategoriMenuController::class, 'update']);
        Route::get('/kategori-menu/delete/{id}', [KategoriMenuController::class, 'delete']);
        // data menu
        Route::get('/data-menu', [MenuController::class, 'index']);
        Route::get('/data-menu/create', [MenuController::class, 'create']);
        Route::post('/data-menu/store', [MenuController::class, 'store']);
        Route::get('/data-menu/edit/{id}', [MenuController::class, 'edit']);
        Route::post('/data-menu/update/{id}', [MenuController::class, 'update']);
        Route::get('/data-menu/delete/{id}', [MenuController::class, 'delete']);
        // pesanan menu
        Route::get('/pesanan-menu', [MenuController::class, 'pesanan']);
        // metode pembayaran
        Route::get('/metode-pembayaran', [MetodePembayaranController::class, 'index']);
        Route::get('/metode-pembayaran/create', [MetodePembayaranController::class, 'create']);
        Route::post('/metode-pembayaran/store', [MetodePembayaranController::class, 'store']);
        Route::get('/metode-pembayaran/edit/{id}', [MetodePembayaranController::class, 'edit']);
        Route::post('/metode-pembayaran/update/{id}', [MetodePembayaranController::class, 'update']);
        Route::get('/metode-pembayaran/delete/{id}', [MetodePembayaranController::class, 'delete']);
        // data pembayaran
        Route::get('/data-pembayaran', [PembayaranController::class, 'index']);
        // landing
        Route::get('/mybee-hotel&resto', [LandingController::class, 'index']);
        Route::get('/mybee-hotel&resto/rooms', [LandingController::class, 'rooms']);
        Route::get('/mybee-hotel&resto/room/room-singgle/{id}', [LandingController::class, 'room_singgle']);
        Route::get('/mybee-hotel&resto/restaurant', [LandingController::class, 'restaurant']);
        Route::get('/mybee-hotel&resto/about', [LandingController::class, 'about']);
        Route::get('/mybee-hotel&resto/blog', [LandingController::class, 'blog']);
        Route::get('/mybee-hotel&resto/contact', [LandingController::class, 'contact']);
        Route::post('/mybee-hotel&resto/contact/store', [LandingController::class, 'sendMessege']);
        // pemesanan kamr
        Route::post('/mybee-hotel&resto/pesanan-kamar/store', [LandingController::class, 'booking']);
        Route::get('/mybee-hotel&resto/pembayaran-kamar', [LandingController::class, 'pembayaran_kamar']);
        Route::get('/mybee-hotel&resto/pembayaran-kamar/delete{id}',[LandingController::class,'delete_pesanan_kamar']);
        // pesanan menu
        Route::post('/mybee-hotel&resto/pesanan-menu/store',[LandingController::class,'order']);
        Route::get('/mybee-hotel&resto/pembayaran-menu', [LandingController::class, 'pembayaran_menu']);
        Route::get('/mybee-hotel&resto/pembayaran-menu/delete/{id}',[LandingController::class,'delete_pesanan_menu']);
    });
Route::prefix('staff-kamar')
    ->middleware(['auth', 'staff_pengelola_kamar'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        // pengguna
        Route::get('/pengguna', [PenggunaController::class, 'index']);
        Route::get('/pengguna/create', [PenggunaController::class, 'create']);
        Route::post('/pengguna/store', [PenggunaController::class, 'store']);
        Route::get('/pengguna/edit/{id}', [PenggunaController::class, 'edit']);
        Route::post('/pengguna/update/{id}', [PenggunaController::class, 'update']);
        Route::get('/pengguna/delete/{id}', [PenggunaController::class, 'delete']);
        // kategori kamar
        Route::get('/kategori-kamar', [KategoriKamarController::class, 'index']);
        Route::get('/kategori-kamar/create', [KategoriKamarController::class, 'create']);
        Route::post('/kategori-kamar/store', [KategoriKamarController::class, 'store']);
        Route::get('/kategori-kamar/edit/{id}', [KategoriKamarController::class, 'edit']);
        Route::post('/kategori-kamar/update/{id}', [KategoriKamarController::class, 'update']);
        Route::get('/kategori-kamar/delete/{id}', [KategoriKamarController::class, 'delete']);
        // data kamar
        Route::get('/data-kamar', [KamarController::class, 'index']);
        Route::get('/kamar/create', [KamarController::class, 'create']);
        Route::post('/kamar/store', [KamarController::class, 'store']);
        Route::get('/kamar/edit/{id}', [KamarController::class, 'edit']);
        Route::post('/kamar/update/{id}', [KamarController::class, 'update']);
        Route::get('/kamar/delete/{id}', [KamarController::class, 'delete']);
        // pesanan kamar
        Route::get('/pesanan-kamar', [KamarController::class, 'pesanan']);
        // landing
        Route::get('/mybee-hotel&resto', [LandingController::class, 'index']);
        Route::get('/mybee-hotel&resto/rooms', [LandingController::class, 'rooms']);
        Route::get('/mybee-hotel&resto/room/room-singgle/{id}', [LandingController::class, 'room_singgle']);
        Route::get('/mybee-hotel&resto/restaurant', [LandingController::class, 'restaurant']);
        Route::get('/mybee-hotel&resto/about', [LandingController::class, 'about']);
        Route::get('/mybee-hotel&resto/blog', [LandingController::class, 'blog']);
        Route::get('/mybee-hotel&resto/contact', [LandingController::class, 'contact']);
        Route::post('/mybee-hotel&resto/contact/store', [LandingController::class, 'sendMessege']);
        // pemesanan kamr
        Route::post('/mybee-hotel&resto/pesanan-kamar/store', [LandingController::class, 'booking']);
        Route::get('/mybee-hotel&resto/pembayaran-kamar', [LandingController::class, 'pembayaran_kamar']);
        Route::get('/mybee-hotel&resto/pembayaran-kamar/delete/{id}',[LandingController::class,'delete_pesanan_kamar']);
         // pesanan menu
         Route::post('/mybee-hotel&resto/pesanan-menu/store',[LandingController::class,'order']);
         Route::get('/mybee-hotel&resto/pembayaran-menu', [LandingController::class, 'pembayaran_menu']);
         Route::get('/mybee-hotel&resto/pembayaran-menu/delete{id}',[LandingController::class,'delete_pesanan_menu']);
    });
Route::prefix('staff-restoran')
    ->middleware(['auth', 'staff_pengelola_restoran'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        // kategori menu
        Route::get('/kategori-menu', [KategoriMenuController::class, 'index']);
        Route::get('/kategori-menu/create', [KategoriMenuController::class, 'create']);
        Route::post('/kategori-menu/store', [KategoriMenuController::class, 'store']);
        Route::get('/kategori-menu/edit/{id}', [KategoriMenuController::class, 'edit']);
        Route::post('/kategori-menu/update/{id}', [KategoriMenuController::class, 'update']);
        Route::get('/kategori-menu/delete/{id}', [KategoriMenuController::class, 'delete']);
        // data menu
        Route::get('/data-menu', [MenuController::class, 'index']);
        Route::get('/data-menu/create', [MenuController::class, 'create']);
        Route::post('/data-menu/store', [MenuController::class, 'store']);
        Route::get('/data-menu/edit/{id}', [MenuController::class, 'edit']);
        Route::post('/data-menu/update/{id}', [MenuController::class, 'update']);
        Route::get('/data-menu/delete/{id}', [MenuController::class, 'delete']);
        // pesanan menu
        Route::get('/pesanan-menu', [MenuController::class, 'pesanan']);
        // landing
        Route::get('/mybee-hotel&resto', [LandingController::class, 'index']);
        Route::get('/mybee-hotel&resto/rooms', [LandingController::class, 'rooms']);
        Route::get('/mybee-hotel&resto/room/room-singgle/{id}', [LandingController::class, 'room_singgle']);
        Route::get('/mybee-hotel&resto/restaurant', [LandingController::class, 'restaurant']);
        Route::get('/mybee-hotel&resto/about', [LandingController::class, 'about']);
        Route::get('/mybee-hotel&resto/blog', [LandingController::class, 'blog']);
        Route::get('/mybee-hotel&resto/contact', [LandingController::class, 'contact']);
        Route::post('/mybee-hotel&resto/contact/store', [LandingController::class, 'sendMessege']);
        Route::get('/mybee-hotel&resto/pembayaran-kamar', [LandingController::class, 'pembayaran_kamar']);
        // pemesanan kamr
        Route::post('/mybee-hotel&resto/pesanan-kamar/store', [LandingController::class, 'booking']);
        Route::get('/mybee-hotel&resto/pembayaran-kamar', [LandingController::class, 'pembayaran_kamar']);
        Route::get('/mybee-hotel&resto/pembayaran-kamar/delete{id}',[LandingController::class,'delete_pesanan_kamar']);
         // pesanan menu
         Route::post('/mybee-hotel&resto/pesanan-menu/store',[LandingController::class,'order']);
         Route::get('/mybee-hotel&resto/pembayaran-menu', [LandingController::class, 'pembayaran_menu']);
         Route::get('/mybee-hotel&resto/pembayaran-menu/delete/{id}',[LandingController::class,'delete_pesanan_menu']);
    });
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/mybee-hotel&resto', [LandingController::class, 'index']);
    Route::get('/mybee-hotel&resto/rooms', [LandingController::class, 'rooms']);
    Route::get('/mybee-hotel&resto/room/room-singgle/{id}', [LandingController::class, 'room_singgle']);
    Route::get('/mybee-hotel&resto/restaurant', [LandingController::class, 'restaurant']);
    Route::get('/mybee-hotel&resto/about', [LandingController::class, 'about']);
    Route::get('/mybee-hotel&resto/blog', [LandingController::class, 'blog']);
    Route::get('/mybee-hotel&resto/blog/blog-singgle', [LandingController::class, 'blog_singgle']);
    Route::get('/mybee-hotel&resto/contact', [LandingController::class, 'contact']);
    Route::post('/mybee-hotel&resto/contact/store', [LandingController::class, 'sendMessege']);
    // pemesanan kamr
    Route::post('/mybee-hotel&resto/booking', [LandingController::class, 'booking']);
    Route::get('/mybee-hotel&resto/pembayaran-kamar', [LandingController::class, 'pembayaran_kamar']);
    Route::get('/mybee-hotel&resto/pembayaran-kamar/delete/{id}',[LandingController::class,'delete_pesanan_kamar']);
     // pesanan menu
     Route::post('/mybee-hotel&resto/pesanan-menu/store',[LandingController::class,'order']);
     Route::get('/mybee-hotel&resto/pembayaran-menu', [LandingController::class, 'pembayaran_menu']);
     Route::get('/mybee-hotel&resto/pembayaran-menu/delete/{id}',[LandingController::class,'delete_pesanan_menu']);
});
// landing page
Route::get('/mybee-hotel&resto', [LandingController::class, 'index']);
Route::get('/mybee-hotel&resto/rooms', [LandingController::class, 'rooms']);
Route::get('/mybee-hotel&resto/room/room-singgle/{id}', [LandingController::class, 'room_singgle']);
Route::get('/mybee-hotel&resto/restaurant', [LandingController::class, 'restaurant']);
Route::get('/mybee-hotel&resto/about', [LandingController::class, 'about']);
Route::get('/mybee-hotel&resto/blog', [LandingController::class, 'blog']);
Route::get('/mybee-hotel&resto/contact', [LandingController::class, 'contact']);
