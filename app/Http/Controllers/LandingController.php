<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
