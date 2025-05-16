<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        return view('admin.kamar.data-kamar');
    }

    public function create()
    {
        return view('admin.kamar.tambah-kamar');
    }

    public function edit()
    {
        return view('admin.kamar.edit-kamar');
    }
}
