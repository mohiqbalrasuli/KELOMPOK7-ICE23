<?php

namespace App\Http\Controllers;

use App\Models\kategori_kamar;
use Illuminate\Http\Request;

class KategoriKamarController extends Controller
{
    public function index()
    {   $katgori_kamar=[
        'kategori_kamar'=>kategori_kamar::all()
    ];

        return view('admin.bagian-kamar.kategori-kamar.kategori_kamar',$katgori_kamar);
    }

    public function create()
    {
        $katgori_kamar=[
            'kategori_kamar'=>kategori_kamar::all()
        ];
        return view('admin.bagian-kamar.kategori-kamar.tambah_kategori',$katgori_kamar);
    }
    public function store(Request $request)
    {
        $data=[
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
            'kapasitas' => $request->kapasitas,
            'harga' => $request->harga,
        ];
        kategori_kamar::create($data);
        return redirect('/kategori-kamar')->with('status','Data Kategori Kamar Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $kategori_kamar=[
            'kategori_kamar'=>kategori_kamar::findOrFail($id)
        ];
        return view('admin.bagian-kamar.kategori-kamar.edit_kategori',$kategori_kamar);
    }

    public function update(Request $request, $id)
    {
        $kategori_kamar = kategori_kamar::findOrFail($id);
        $data = [
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
            'kapasitas' => $request->kapasitas,
            'harga' => $request->harga,
        ];
        $kategori_kamar->update($data);
        return redirect('/kategori-kamar')->with('status','Data Kategori Kamar Berhasil Diubah');
    }

    public function delete($id)
    {
        $kategori_kamar = kategori_kamar::findOrFail($id);
        $kategori_kamar->delete();
        return redirect('/kategori-kamar')->with('status','Data Kategori Kamar Berhasil Dihapus');
    }
}
