<?php

namespace App\Http\Controllers;

use App\Models\kategori_menu;
use App\Models\menu;
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
        return redirect('/kategori-menu')->with('success', 'Data Berhasil Ditambahkan');
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
        return redirect('/kategori-menu')->with('success', 'Data Berhasil Diubah');
    }
    public function delete($id)
    {
        $menu=menu::where('kategori_menu_id',$id)->first();
        $kategori_menu = kategori_menu::findOrFail($id);
        if ($menu) {
            return redirect('/kategori-menu')->with('error','Data Kategori Kamar Tidak Bisa Dihapus Karena Masih Digunakan');
        }

        $kategori_menu->delete();
        return redirect('/kategori-kamar')->with('status','Data Kategori Kamar Berhasil Dihapus');
    }
}
