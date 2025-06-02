<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kategori_kamar;
use App\Models\menu;
use App\Models\metode_pembayaran;
use App\Models\pesanan_kamar;
use App\Models\pesanan_menu;
use Carbon\Carbon;

class LandingController extends Controller
{
    public function index()
    {
        $kamar = kamar::with('kategori_kamar')->where('status', 'tersedia')->orderby('created_at', 'desc')->get();

        $kategori_kamar = kategori_kamar::all();
        $menu = menu::with('kategori_menu')->orderby('created_at', 'desc')->get();
        return view('user.index', compact('kategori_kamar', 'menu', 'kamar'));
    }

    public function booking(Request $request)
    {
        $request->validate([
            'kamar_id' => 'required|exists:table_kamar,id',
            'no_telepon' => 'required|string',
            'jumlah_orang' => 'required|integer|min:1',
            'tanggal_checkin' => 'required|date',
            'tanggal_checkout' => 'required|date|after_or_equal:tanggal_checkin',
        ]);

        $kamar = kamar::with('kategori_Kamar')->findOrFail($request->kamar_id);
        $hargaPerMalam = $kamar->kategori_Kamar->harga;

        $checkin = Carbon::parse($request->tanggal_checkin);
        $checkout = Carbon::parse($request->tanggal_checkout);
        $jumlahHari = max($checkin->diffInDays($checkout), 1);

        $totalHarga = $hargaPerMalam * $jumlahHari;

        $data = [
            'user_id' => Auth::id(),
            'kamar_id' => $request->kamar_id,
            'no_telepon' => $request->no_telepon,
            'jumlah_orang' => $request->jumlah_orang,
            'tanggal_checkin' => $checkin,
            'tanggal_checkout' => $checkout,
            'durasi' => $jumlahHari, // Durasi menginap dalam hari
            'harga_awal' => $hargaPerMalam, // Harga awal per malam
            'total_harga' => $totalHarga,
            'status' => 'menunggu',
        ];
        pesanan_kamar::create($data);
        // return back()->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        // Redirect ke halaman pembayaran
        if (Auth::user()->role == 'admin') {
            return redirect('admin/mybee-hotel&resto/pembayaran-kamar')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        } elseif (Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/mybee-hotel&resto/pembayaran-kamar')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
            return redirect('staff-restoran/mybee-hotel&resto/pembayaran-kamar')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        }else{
            return redirect('mybee-hotel&resto/pembayaran-kamar')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        }
    }

    public function pembayaran_kamar()
    {
        $total_pesanan = pesanan_kamar::where('user_id', Auth::user()->id)->where('status','menunggu')->sum('total_harga');
        $jumlah_pesanan = pesanan_kamar::where('user_id', Auth::id())->where('status','menunggu')->count();
        $pesanan = pesanan_kamar::where('user_id', Auth::id())->where('status','menunggu')->with('kamar')->get();
        $total_pesanan_bayar = pesanan_kamar::where('user_id', Auth::user()->id)->where('status','konfirmasi')->sum('total_harga');
        $jumlah_pesanan_bayar = pesanan_kamar::where('user_id', Auth::id())->where('status','konfirmasi')->count();
        $pesanan_bayar = pesanan_kamar::where('user_id', Auth::id())->where('status','konfirmasi')->with('kamar')->get();
        $metode_pembayaran = metode_pembayaran::all();
        return view('user.pembayaran-kamar', compact('pesanan', 'metode_pembayaran','jumlah_pesanan','total_pesanan','jumlah_pesanan_bayar','total_pesanan_bayar','pesanan_bayar'));
    }
    public function delete_pesanan_kamar($id)
    {
        $pesanan = pesanan_kamar::findOrFail($id);
        $pesanan->delete();
        if (Auth::user()->role == 'admin') {
            return redirect('admin/mybee-hotel&resto/pembayaran-kamar')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        } elseif (Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/mybee-hotel&resto/pembayaran-kamar')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
            return redirect('staff-restoran/mybee-hotel&resto/pembayaran-kamar')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        }else{
            return redirect('mybee-hotel&resto/pembayaran-kamar')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        }
    }

    public function rooms()
    {
        $kategori_kamar = kategori_kamar::all();
        return view('user.rooms', compact('kategori_kamar'));
    }

    public function room_singgle($id)
    {
        $kategori_kamar = kategori_kamar::findOrFail($id);
        $jumlah_kamar = kamar::where('kategori_kamar_id', $id)->where('status', 'tersedia')->count();
        if ($jumlah_kamar == 0) {
            return redirect()->back()->with('error', 'Maaf, Kamar tidak tersedia');
        }
        $kamar = kamar::where('kategori_kamar_id', $id)->with('kategori_kamar')->get();
        return view('user.room-singgle', compact('kategori_kamar', 'kamar', 'jumlah_kamar'));
    }

    public function restaurant()
    {
        $menu = menu::with('kategori_menu')->orderby('created_at', 'desc')->get();
        return view('user.restaurant', compact('menu'));
    }

    public function order(Request $request)
    {
        $menu = menu::findOrFail($request->menu_id);
        $total_harga = $menu->harga * $request->jumlah;

        $data=[
            'user_id'=>$request->user_id,
            'menu_id'=>$request->menu_id,
            'jumlah'=>$request->jumlah,
            'total_harga'=>$total_harga,
            'kursi'=>'1',
            'status'=>'menunggu'
        ];
        $data=pesanan_menu::create($data);
        if (Auth::user()->role == 'admin') {
            return redirect('admin/mybee-hotel&resto/restaurant')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        } elseif (Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/mybee-hotel&resto/restaurant')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
            return redirect('staff-restoran/mybee-hotel&resto/restaurant')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        }else{
            return redirect('mybee-hotel&resto/restaurant')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        }
    }

    public function pembayaran_menu()
    {
        $total_pesanan_bayar = pesanan_menu::where('user_id', Auth::user()->id)->where('status', 'konfirmasi')->sum('total_harga');
        $jumlah_menu_bayar = pesanan_menu::where('user_id', Auth::user()->id)->where('status', 'konfirmasi')->count();
        $pesanan_bayar = pesanan_menu::where('user_id', Auth::user()->id)->where('status', 'konfirmasi')->with('menu')->get();
        $total_pesanan = pesanan_menu::where('user_id', Auth::user()->id)->where('status', 'menunggu')->sum('total_harga');
        $jumlah_menu = pesanan_menu::where('user_id', Auth::user()->id)->where('status', 'menunggu')->count();
        $pesanan = pesanan_menu::where('user_id', Auth::user()->id)->where('status', 'menunggu')->with('menu')->get();
        // $pesanan = pesanan_menu::where('user_id', Auth::user()->id)->where('status', 'menunggu')->with('menu')->get();
        $metode_pembayaran = metode_pembayaran::all();
        return view('user.pembayaran-menu',compact('jumlah_menu','pesanan','metode_pembayaran','total_pesanan','total_pesanan_bayar','jumlah_menu_bayar','pesanan_bayar'));
    }

    public function delete_pesanan_menu($id)
    {
        $pesanan = pesanan_menu::findOrFail($id);
        $pesanan->delete();
        if (Auth::user()->role == 'admin') {
            return redirect('admin/mybee-hotel&resto/pembayaran-menu')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        } elseif (Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/mybee-hotel&resto/pembayaran-menu')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
            return redirect('staff-restoran/mybee-hotel&resto/pembayaran-menu')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        }else{
            return redirect('mybee-hotel&resto/pembayaran-menu')->with('success', 'Pesanan berhasil dibuat. Silakan lanjut ke pembayaran.');
        }
    }

    public function about()
    {
        return view('user.about');
    }

    public function blog()
    {
        return view('user.blog');
    }

    public function blog_singgle()
    {
        return view('user.blog-singgle');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function sendMessege(Request $request)
    {
        $data = [
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
            'waktu' => now(),
        ];
        contact::create($data);
        if (Auth::user()->role == 'admin') {
            return redirect('admin/mybee-hotel&resto/contact')->with('success', 'Pesan berhasil di kirim');
        } elseif (Auth::user()->role == 'staff_pengelola_kamar') {
            return redirect('staff-kamar/mybee-hotel&resto/contact')->with('success', 'Pesan berhasil di kirim');
        } elseif (Auth::user()->role == 'staff_pengelola_restoran') {
            return redirect('staff-restoran/mybee-hotel&resto/contact')->with('success', 'Pesan berhasil di kirim');
        }
    }
}
