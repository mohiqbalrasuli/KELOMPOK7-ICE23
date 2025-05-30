<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = [
            'user' => User::where('role', 'user')->get(),
            'admin' => User::where('role', 'admin')->get(),
            'staff_hotel' => User::where('role', 'staff_pengelola_kamar')->get(),
            'staff_restoran' => User::where('role', 'staff_pengelola_restoran')->get(),
        ];
        return view('admin.pengguna.pengguna', $pengguna);
    }

    public function create()
    {
        $pengguna = [
            'pengguna' => User::all(),
        ];
        return view('admin.pengguna.tambah-pengguna', $pengguna);
    }

    public function store(Request $request)
    {

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ];
        User::create($data);
        return redirect('admin/pengguna')->with('success', 'Pengguna berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengguna = [
            'pengguna' => User::findOrFail($id),
        ];
        return view('admin.pengguna.edit-pengguna', $pengguna);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ];
        User::where('id', $id)->update($data);
        return redirect('admin/pengguna')->with('success', 'Pengguna berhasil ditambahkan');
    }
    public function delete($id)
    {
        $kategori_kamar = User::findOrFail($id);
        $kategori_kamar->delete();
        return redirect('admin/pengguna')->with('success', 'Pengguna berhasil dihapus');

    }
}
