<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriKamarController extends Controller
{
    public function index()
    {
        return view('admin.kategori_kamar.kategori_kamar');
    }

    public function create()
    {
        return view('admin.kategori_kamar.tambah_kategori');
    }

    public function edit()
    {
        return view('admin.kategori_kamar.edit_kategori');
    }
}
