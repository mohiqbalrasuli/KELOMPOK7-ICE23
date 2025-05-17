<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananKamarController extends Controller
{
    public function index()
    {
        return view('admin.bagian-kamar.pesanan_kamar.pesanan_kamar');
    }
}
