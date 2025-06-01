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
        return view('admin.bagian-pembayaran.metode-pembayaran.tambah-metode');
    }

    public function store(Request $request)
    {
        $data=[
            'nama_bank'=>$request->nama_bank,
            'atas_nama'=>$request->atas_nama,
            'nomor_rekening'=>$request->nomor_rekening,

        ];

        metode_pembayaran::create($data);
        return redirect('admin/metode-pembayaran')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $metode_pembayaran=metode_pembayaran::findOrFail($id);
        return view('admin.bagian-pembayaran.metode-pembayaran.edit-metode',compact('metode_pembayaran'));
    }

    public function update(Request $request, $id)
    {

        $data=[
            'nama_bank'=>$request->nama_bank,
            'atas_nama'=>$request->atas_nama,
            'nomor_rekening'=>$request->nomor_rekening,

        ];

        metode_pembayaran::where('id', $id)->update($data);
        return redirect('admin/metode-pembayaran')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        metode_pembayaran::where('id', $id)->delete();
        return redirect('admin/metode-pembayaran')->with('success', 'Data Kamar Berhasil Dihapus');
    }
}
