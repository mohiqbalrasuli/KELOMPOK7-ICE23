<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kategori_kamar;
use App\Models\menu;

class LandingController extends Controller
{
    public function index()
    {
        $kategori_kamar = kategori_kamar::all();
        $menu = menu::with('kategori_menu')
        ->orderby('created_at','desc')
        ->take(6)
        ->get();
        return view('user.index', compact('kategori_kamar','menu'));
    }

    public function rooms()
    {
        return view('user.rooms');
    }

    public function room_singgle($id)
    {
        $kategori_kamar = kategori_kamar::findOrFail($id);
       $jumlah_kamar = kamar::where('kategori_kamar_id', $id)
                     ->where('status', 'tersedia')
                     ->count();
        if ($jumlah_kamar == 0) {
            return redirect()->back()->with('error', 'Maaf, Kamar tidak tersedia');
        }
        $kamar = kamar::where('kategori_kamar_id', $id)
            ->with('kategori_kamar')
            ->get();
        return view('user.room-singgle', compact('kategori_kamar', 'kamar','jumlah_kamar'));
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
