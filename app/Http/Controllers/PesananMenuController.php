<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananMenuController extends Controller
{
    public function index()
    {
        return view('admin.bagian-menu.pesanan-menu.pesanan-menu');
    }
}
