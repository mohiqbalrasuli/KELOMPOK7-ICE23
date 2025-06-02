<?php

namespace App\Http\Controllers;

use App\Models\pesanan_kamar;
use App\Models\pesanan_menu;
use Illuminate\Http\Request;

class pesananController extends Controller
{
    public function pesanan()
    {
        $pesanan = pesanan_kamar::with('user','kamar')->orderBy('created_at','desc')->get();
        return view('admin.bagian-kamar.pesanan_kamar.pesanan_kamar',compact('pesanan'));
    }

    public function pesanan_menu()
    {
        $pesanan = pesanan_menu::with('user','menu')->orderBy('created_at','desc')->get();
        return view('admin.bagian-menu.pesanan-menu.pesanan-menu',compact('pesanan'));
    }
}
