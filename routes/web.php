<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index']);

// data kamar
Route::get('/data-kamar',function () {
    return view('kamar.data-kamar');
});