<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('admin.bagian-menu.data-menu.data-menu');
    }

    public function create()
    {
        return view('admin.bagian-menu.data-menu.tambah-menu');
    }

    public function edit()
    {
        return view('admin.bagian-menu.data-menu.data-menu');
    }

    public function pesanan()
    {
        return view('admin.bagian-menu.pesanan-menu.pesanan-menu');
    }
}
