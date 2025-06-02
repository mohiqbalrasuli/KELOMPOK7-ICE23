<?php

namespace App\Http\Controllers;


use App\Models\pembayaran_kamar;
use App\Models\pembayaran_menu;
use App\Models\pesanan_kamar;
use App\Models\pesanan_menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index()
    {
        $pesanan_kamar = pembayaran_kamar::with('metode_pembayaran','user')->orderBy('created_at','desc')->get();
        $pesanan_menu = pembayaran_menu::with('metode_pembayaran','user')->orderBy('created_at','desc')->get();
        return view('admin.bagian-pembayaran.data-pembayaran.data-pembayaran',compact('pesanan_kamar','pesanan_menu'));
    }

    public function bayar_kamar(Request $request)
    {
        $pesanan = pesanan_kamar::where('user_id', Auth::user()->id)->get();
        $total_harga = $pesanan->sum('total_harga');


        $pembayaran =[
            'user_id' => Auth::id(),
            'metode_pembayaran_id' => $request->metode_pembayaran_id,
            'total_harga' => $total_harga,
            'bukti_pembayaran'=>$request->bukti_pembayaran,
            'tanggal_bayar' => now(),
        ];
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time() . '_'.Auth::user()->name.'_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/bukti_pembayaran_kamar'), $filename);
            $pembayaran['bukti_pembayaran'] = $filename;
        }

        pembayaran_kamar::create($pembayaran);

        // Update status pesanan
        foreach ($pesanan as $item) {
            $item->update(['status' => 'konfirmasi']);
        }


        $data=[
            'kursi' =>$request->kursi
        ];

        pesanan_menu::where('user_id',Auth::user()->id)->where('created_at', now())->update($data);


        // // Update status kamar
        // $kamar = kamar::findOrFail($pesanan->kamar_id);
        // $kamar->update(['status' => 'terisi']);

        if (Auth::user()->role == 'admin') {
            return redirect('admin/mybee-hotel&resto/pembayaran-kamar/berhasil')->with('success', 'Pembayaran berhasil dilakukan');
        } elseif (Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/mybee-hotel&resto/pembayaran-kamar/berhasil')->with('success', 'Pembayaran berhasil dilakukan');
        } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
            return redirect('staff-restoran/mybee-hotel&resto/pembayaran-kamar/berhasil')->with('success', 'Pembayaran berhasil dilakukan');
        } else {
            return redirect('mybee-hotel&resto/pembayaran-kamar/berhasil')->with('success', 'Pembayaran berhasil dilakukan');
        }
    }
    public function bayar_menu(Request $request)
    {
        $pesanan = pesanan_menu::where('user_id', Auth::user()->id)->get();
        $total_harga = $pesanan->sum('total_harga');


        $pembayaran =[
            'user_id' => Auth::id(),
            'metode_pembayaran_id' => $request->metode_pembayaran_id,
            'total_harga' => $total_harga,
            'bukti_pembayaran'=>$request->bukti_pembayaran,
            'tanggal_bayar' => now(),
        ];
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time() . '_'.Auth::user()->name.'_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/bukti-pembayaran-menu'), $filename);
            $pembayaran['bukti_pembayaran'] = $filename;
        }

        pembayaran_menu::create($pembayaran);

        // Update status pesanan
        foreach ($pesanan as $item) {
            $item->update(['status' => 'konfirmasi']);
        }

        $data=[
            'kursi' =>$request->kursi
        ];

        pesanan_menu::where('user_id',Auth::user()->id)->update($data);


        // // Update status kamar
        // $kamar = kamar::findOrFail($pesanan->kamar_id);
        // $kamar->update(['status' => 'terisi']);

        if (Auth::user()->role == 'admin') {
            return redirect('admin/mybee-hotel&resto/pembayaran-menu/berhasil')->with('success', 'Pembayaran berhasil dilakukan');
        } elseif (Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/mybee-hotel&resto/pembayaran-menu/berhasil')->with('success', 'Pembayaran berhasil dilakukan');
        } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
            return redirect('staff-restoran/mybee-hotel&resto/pembayaran-menu/berhasil')->with('success', 'Pembayaran berhasil dilakukan');
        } else {
            return redirect('mybee-hotel&resto/pembayaran-menu/berhasil')->with('success', 'Pembayaran berhasil dilakukan');
        }
    }

    public function pembayaran_kamar_berhasil()
    {
        return view('user.pembayaran_berhasil');
    }
    public function pembayaran_menu_berhasil()
    {
        return view('user.pembayaran-berhasil');
    }
}
