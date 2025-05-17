<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        return view('admin.bagian-kamar.kamar.data-kamar');
    }

    public function create()
    {
        return view('admin.bagian-kamar.kamar.tambah-kamar');
    }

    public function edit()
    {
        return view('admin.bagian-kamar.kamar.edit-kamar');
    }

    public function pesanan()
    {
        return view('admin.bagian-kamar.pesanan_kamar.pesanan_kamar');
    }
}
