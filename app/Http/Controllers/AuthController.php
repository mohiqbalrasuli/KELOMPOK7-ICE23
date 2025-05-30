<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Tampilkan halaman login
    public function showLogin()
    {
        return view('login-register.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'email tidak ditemukan',
            ]);
        }

        // Periksa apakah password belum di-hash
        if (strlen($user->password) < 60) {
            // Hash password biasanya 60 karakter
            $user->password = Hash::make($user->password);
            $user->save();
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin') {
                return redirect('/admin/dashboard')->with('message', 'Berhasil login');
            } elseif (Auth::user()->role == 'staff_pengelola_kamar') {
                return redirect('/staff-kamar/dashboard')->with('message', 'Berhasil login');
            } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
                return redirect('/staff-restoran/dashboard')->with('message', 'Berhasil login');
            } else {
                return redirect('/mybee-hotel&resto')->with('message', 'Berhasil login');
            }

            return back()
                ->withErrors([
                    'email' => 'Email atau Password Salah',
                ])
                ->onlyInput('email');
        }
    }

    // Tampilkan halaman register
    public function showRegister()
    {
        return view('login-register.register');
    }

    // Proses register
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan data ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'remember_token' => Str::random(10),
        ]);

        // Berikan feedback kepada pengguna
        Session::flash('success', 'Registrasi berhasil! Silakan login.');
        return redirect('/login');
    }

    // Logout
    public function logout(Request $request)
    {
        try {
            // Cek role user sebelum logout
            $role = Auth::user()->role;

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login')->with('message', 'Berhasil logout');
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
}
