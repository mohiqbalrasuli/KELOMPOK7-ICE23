<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\kategori_kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriKamarController extends Controller
{
    public function index()
    {
        $katgori_kamar = [
            'kategori_kamar' => kategori_kamar::all(),
        ];

        return view('admin.bagian-kamar.kategori-kamar.kategori_kamar', $katgori_kamar);
    }

    public function create()
    {
        $katgori_kamar = [
            'kategori_kamar' => kategori_kamar::all(),
        ];
        return view('admin.bagian-kamar.kategori-kamar.tambah_kategori', $katgori_kamar);
    }
    public function store(Request $request)
    {
        $data = [
            'gambar' => $request->gambar,
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
            'kapasitas' => $request->kapasitas,
            'harga' => $request->harga,
        ];
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/kamar'), $filename);
            $data['gambar'] = $filename;
        }
        kategori_kamar::create($data);
        if (Auth::user()->role == 'admin') {
            return redirect('admin/kategori-kamar')->with('status', 'Data Kategori Kamar Berhasil Ditambahkan');
        } elseif (Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/kategori-kamar')->with('status', 'Data Kategori Kamar Berhasil Ditambahkan');
        }
    }

    public function edit($id)
    {
        $kategori_kamar = [
            'kategori_kamar' => kategori_kamar::findOrFail($id),
        ];
        return view('admin.bagian-kamar.kategori-kamar.edit_kategori', $kategori_kamar);
    }

    public function update(Request $request, $id)
    {
        $kategori_kamar = kategori_kamar::findOrFail($id);
        $data = [
            'gambar' => $request->gambar,
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
            'kapasitas' => $request->kapasitas,
            'harga' => $request->harga,
        ];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika perlu
            if ($kategori_kamar->gambar && file_exists(public_path('assets/images/kamar/' . $kategori_kamar->gambar))) {
                unlink(public_path('assets/images/kamar/' . $kategori_kamar->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/kamar'), $filename);
            $data['gambar'] = $filename;
        } else {
            // Gunakan gambar lama
            $data['gambar'] = $kategori_kamar->gambar;
        }

        $kategori_kamar->update($data);
        if(Auth::user()->role == 'admin') {
            return redirect('admin/kategori-kamar')->with('success', 'Data Kamar Berhasil Diubah');
        }elseif(Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/kategori-kamar')->with('success', 'Data Kamar Berhasil Diubah');
        }
    }

    public function delete($id)
    {
        $kamar = kamar::where('kategori_kamar_id', $id)->first();
        $kategori_kamar = kategori_kamar::findOrFail($id);
        if ($kamar) {
            if(Auth::user()->role == 'admin') {
                return redirect('admin/kategori-kamar')->with('error', 'Data Kategori Kamar Tidak Bisa Dihapus Karena Masih Digunakan');
            } elseif(Auth::user()->role == 'staff_pengelola_kamar') {
                return redirect('staff-kamar/kategori-kamar')->with('error', 'Data Kategori Kamar Tidak Bisa Dihapus Karena Masih Digunakan');
            }
        }
        if ($kategori_kamar->gambar && file_exists(public_path('assets/images/kamar/' .$kategori_kamar->gambar))) {
            unlink(public_path('assets/images/kamar/' . $kategori_kamar->gambar));
        }

        $kategori_kamar->delete();
        if(Auth::user()->role == 'admin') {
            return redirect('admin/kategori-kamar')->with('status', 'Data Kategori Kamar Berhasil Dihapus');
        } elseif(Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/kategori-kamar')->with('status', 'Data Kategori Kamar Berhasil Dihapus');
        }
    }
}
