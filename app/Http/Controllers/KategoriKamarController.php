<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriKamarController extends Controller
{
    public function index()
    {
        return view('admin.bagian-kamar.kategori-kamar.kategori_kamar');
    }

    public function create()
    {
        return view('admin.bagian-kamar.kategori-kamar.tambah_kategori');
    }

    public function edit()
    {
        return view('admin.bagian-kamar.kategori-kamar.edit_kategori');
    }
}
