<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriMenuController extends Controller
{
    public function index()
    {
        return view('admin.bagian-menu.kategori-menu.kategori_menu');
    }

    public function create()
    {
        return view('admin.bagian-menu.kategori-menu.tambah-kategori');
    }

    public function edit()
    {
        return view('admin.bagian-menu.kategori-menu.edit-kategori');
    }
}
