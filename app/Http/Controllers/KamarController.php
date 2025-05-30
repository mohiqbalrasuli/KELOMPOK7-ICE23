<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\kategori_kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KamarController extends Controller
{
    public function index()
    {
        $kamar = [
            'kamar' => kamar::with('kategori_kamar')->get(),
        ];
        return view('admin.bagian-kamar.kamar.data-kamar', $kamar);
    }

    public function create()
    {
        $kamar = [
            'kategori_kamar' => kategori_kamar::all(),
        ];
        return view('admin.bagian-kamar.kamar.tambah-kamar', $kamar);
    }

    public function store(Request $request)
    {
        $data=[
            'nomer_kamar'=> $request->nomer_kamar,
            'kategori_kamar_id'=> $request->kategori_kamar_id,
            'lantai'=> $request->lantai,
            'status'=> $request->status,
        ];
        kamar::create($data);
        if(Auth::user()->role == 'admin') {
            return redirect('admin/data-kamar')->with('success', 'Data Kamar Berhasil Ditambahkan');
        }elseif(Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/data-kamar')->with('success', 'Data Kamar Berhasil Ditambahkan');
        }
    }

    public function edit($id)
    {
        $kamar = [
            'kategori_kamar' => kategori_kamar::all(),
            'kamar' => kamar::with('kategori_kamar')->findOrFail($id),
        ];
        return view('admin.bagian-kamar.kamar.edit-kamar', $kamar);
    }

    public function update(Request $request, $id)
    {
        $data=[
            'nomer_kamar'=> $request->nomer_kamar,
            'kategori_kamar_id'=> $request->kategori_kamar_id,
            'lantai'=> $request->lantai,
            'status'=> $request->status,
        ];
        kamar::where('id', $id)->update($data);
        if(Auth::user()->role == 'admin') {
            return redirect('admin/data-kamar')->with('success', 'Data Kamar Berhasil Diubah');
        }elseif(Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/data-kamar')->with('success', 'Data Kamar Berhasil Diubah');
        }
    }
    public function delete($id)
    {
        kamar::where('id', $id)->delete();
        if(Auth::user()->role == 'admin') {
            return redirect('admin/data-kamar')->with('success', 'Data Kamar Berhasil Dihapus');
        }elseif(Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/data-kamar')->with('success', 'Data Kamar Berhasil Dihapus');
        }
    }

    public function pesanan()
    {
        return view('admin.bagian-kamar.pesanan_kamar.pesanan_kamar');
    }
}
