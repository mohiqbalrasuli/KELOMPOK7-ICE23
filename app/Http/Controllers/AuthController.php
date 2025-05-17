<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Showlogin()
    {
        return view('login-register.login');
    }

    public function ShowRegister()
    {
        return view('login-register.register');
    }
}
