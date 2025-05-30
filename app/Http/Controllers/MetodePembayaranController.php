<?php

namespace App\Http\Controllers;

use App\Models\metode_pembayaran;
use Illuminate\Http\Request;

class MetodePembayaranController extends Controller
{
    public function index()
    {
        $metode_pembayaran = metode_pembayaran::all();
        return view('admin.bagian-pembayaran.metode-pembayaran.data-metode-pembayaran',compact('metode_pembayaran'));
    }

    public function create()
    {
        $metode_pembayaran = metode_pembayaran::all();
        return view('admin.bagian-pembayaran.metode-pembayaran.tambah-metode',$metode_pembayaran);
    }

    public function store(Request $request)
    {
        $data=[
            'nama_bank'=>$request->nama_bank,
            'no_rekening'=>$request->no_rekening,
        ];

        metode_pembayaran::create($data);
        return redirect('admin/metode-pembayaran')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $metode_pembayaran=metode_pembayaran::findOrFail($id);
        return view('admin.bagian-pembayaran.metode-pembayaran.edit-metode',$metode_pembayaran);
    }

    public function update(Request $request, $id)
    {
        $data=[
            'nama_bank'=>$request->nama_bank,
            'no_rekening'=>$request->no_rekening,
        ];

        metode_pembayaran::update($data);
        return redirect('admin/metode-pembayaran')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        metode_pembayaran::where('id', $id)->delete();
        return redirect('admin/metode-pembayaran')->with('success', 'Data Kamar Berhasil Dihapus');
    }
}
