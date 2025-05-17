<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
        {
            return view('admin.pengguna.pengguna');
        }

    public function create()
    {
        return view('admin.pengguna.tambah-pengguna');
    }

    public function edit()
    {
        return view('admin.pengguna.edit-pengguna');
    }

}
