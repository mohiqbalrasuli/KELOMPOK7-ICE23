<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function rooms()
    {
        return view('user.rooms');
    }

    public function room_singgle()
    {
        return view('user.room-singgle');
    }

    public function restaurant()
    {
        return view('user.restaurant');
    }

    public function about()
    {
        return view('user.about');
    }

    public function blog()
    {
        return view('user.blog');
    }

    public function blog_singgle()
    {
        return view('user.blog-singgle');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function sendMessege(Request $request)
    {
        $data=[
            'name'=>Auth::user()->name,
            'email'=>Auth::user()->email,
            'subjek'=>$request->subjek,
            'pesan'=>$request->pesan,
            'waktu'=>now()
        ];
        contact::create($data);
        if (Auth::user()->role == 'admin') {
            return redirect('admin/mybee-hotel&resto/contact')->with('success', 'Pesan berhasil di kirim');
        }elseif(Auth::user()->role == 'staff_pengelola_kamar'){
            return redirect('staff-kamar/mybee-hotel&resto/contact')->with('success', 'Pesan berhasil di kirim');
        } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
            return redirect('staff-restoran/mybee-hotel&resto/contact')->with('success', 'Pesan berhasil di kirim');
        }
    }
}
