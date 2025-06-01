<?php

namespace App\Http\Controllers;

use App\Models\pesanan_kamar;
use Illuminate\Http\Request;

class pesananController extends Controller
{
    public function pesanan()
    {
        $pesanan = pesanan_kamar::with('user','kamar')->get();
        return view('admin.bagian-kamar.pesanan_kamar.pesanan_kamar',compact('pesanan'));
    }
}
