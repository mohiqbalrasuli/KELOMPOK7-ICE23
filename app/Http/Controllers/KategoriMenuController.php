<?php

namespace App\Http\Controllers;

use App\Models\kategori_menu;
use App\Models\menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KategoriMenuController extends Controller
{
    public function index()
    {
        $kategori_menu = kategori_menu::all();
        return view('admin.bagian-menu.kategori-menu.kategori_menu', compact('kategori_menu'));
    }

    public function create()
    {
        $kategori_menu= kategori_menu::all();
        return view('admin.bagian-menu.kategori-menu.tambah-kategori', compact('kategori_menu'));
    }

    public function store(Request $request)
    {
        $data=[
            'nama_kategori_menu' => $request->nama_kategori_menu,
            'deskripsi' => $request->deskripsi,
        ];
        kategori_menu::create($data);
        if (Auth::user()->role == 'admin') {
            return redirect('admin/kategori-menu')->with('success', 'Data Kategori Menu Berhasil Ditambahkan');
        } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
            return redirect('staff-restoran/kategori-menu')->with('success', 'Data Kategori Menu Berhasil Ditambahkan');
        }
    }

    public function edit($id)
    {
        $kategori_menu = kategori_menu::findOrFail($id);
        return view('admin.bagian-menu.kategori-menu.edit-kategori', compact('kategori_menu'));
    }
    public function update(Request $request, $id)
    {
        $data=[
            'nama_kategori_menu' => $request->nama_kategori_menu,
            'deskripsi' => $request->deskripsi,
        ];
        kategori_menu::where('id', $id)->update($data);
        if (Auth::user()->role == 'admin') {
            return redirect('admin/kategori-menu')->with('success', 'Data Kategori Menu Berhasil Diubah');
        } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
            return redirect('staff-restoran/kategori-menu')->with('success', 'Data Kategori Menu Berhasil Diubah');
        }
    }
    public function delete($id)
    {
        $menu=menu::where('kategori_menu_id',$id)->first();
        $kategori_menu = kategori_menu::findOrFail($id);
        if ($menu) {
            if (Auth::user()->role == 'admin') {
                return redirect('admin/kategori-menu')->with('error','Data Kategori Menu Tidak Bisa Dihapus Karena Masih Digunakan');
            } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
                return redirect('staff-restoran/kategori-menu')->with('error','Data Kategori Menu Tidak Bisa Dihapus Karena Masih Digunakan');
            }
        }

        $kategori_menu->delete();
        if (Auth::user()->role == 'admin') {
            return redirect('admin/kategori-menu')->with('status','Data Kategori Menu Berhasil Dihapus');
        } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
            return redirect('staff-restoran/kategori-menu')->with('status','Data Kategori Menu Berhasil Dihapus');
        }
    }
}
