<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\kategori_menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = menu::with('kategori_menu')->get();
        return view('admin.bagian-menu.data-menu.data-menu', compact('menu'));
    }

    public function create()
    {
        $menu = menu::all();
        $kategori_menu = kategori_menu::all();
        return view('admin.bagian-menu.data-menu.tambah-menu', compact('menu', 'kategori_menu'));
    }
    public function store(Request $request)
    {
        $data = [
            'gambar' => $request->gambar,
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
            'kategori_menu_id' => $request->kategori_menu_id,
        ];
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/menu'), $filename);
            $data['gambar'] = $filename;
        }
        menu::create($data);
        return redirect('/data-menu')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $menu = menu::findOrFail($id);
        $kategori_menu = kategori_menu::all();
        return view('admin.bagian-menu.data-menu.edit-menu', compact('menu', 'kategori_menu'));
    }
    public function update(Request $request, $id)
    {
        $menu = menu::findOrFail($id);
        $data = [
            'gambar' => $request->gambar,
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
            'kategori_menu_id' => $request->kategori_menu_id,
        ];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika perlu
            if ($menu->gambar && file_exists(public_path('assets/images/kamar/' . $menu->gambar))) {
                unlink(public_path('assets/images/kamar/' . $menu->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/menu'), $filename);
            $data['gambar'] = $filename;
        } else {
            // Gunakan gambar lama
            $data['gambar'] = $menu->gambar;
        }

        menu::where('id', $id)->update($data);
        return redirect('/data-menu')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $menu = menu::findOrFail($id);
        if ($menu->gambar && file_exists(public_path('assets/images/menu/' . $menu->gambar))) {
            unlink(public_path('assets/images/menu/' . $menu->gambar));
        }
        $menu->delete();
        return redirect('/data-menu')->with('success', 'Data Berhasil Dihapus');
    }

    public function pesanan()
    {
        return view('admin.bagian-menu.pesanan-menu.pesanan-menu');
    }
}
