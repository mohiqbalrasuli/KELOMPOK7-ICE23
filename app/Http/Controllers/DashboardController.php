<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\kategori_menu;
use App\Models\menu;
use App\Models\pesanan_kamar;
use App\Models\pesanan_menu;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $kamar_terisi = Kamar::where('status', 'terisi')->count();
        $kamar_tersedia = Kamar::where('status', 'tersedia')->count();
        $kamar_maintenance = Kamar::where('status', 'maintenance')->count();
        $user = User::where('role', 'user')->count();
        $pendapatan_kamar_hari_ini = pesanan_kamar::whereDate('created_at', now())->sum('total_harga');
        $total_pendapatan_kamar = pesanan_kamar::sum('total_harga');
        $pendapatan_menu_hari_ini = pesanan_menu::whereDate('created_at', now())->sum('total_harga');
        $total_pendapatan_menu = pesanan_menu::sum('total_harga');
        $menu = menu::all()->count();
        $kategori = kategori_menu::all();
        $jumlahMenuPerKategori = DB::table('table_menu')
        ->select('kategori_menu_id', DB::raw('count(*) as total'))
        ->groupBy('kategori_menu_id')
        ->pluck('total', 'kategori_menu_id');

        $pesanan_kamar_terbaru = pesanan_kamar::with('kamar','user')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $pesanan_menu_terbaru = pesanan_menu::with('menu', 'user')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();



        return view('admin.dashboard', compact('kamar_terisi', 'kamar_tersedia', 'kamar_maintenance', 'user', 'menu', 'kategori', 'jumlahMenuPerKategori','pesanan_kamar_terbaru','pesanan_menu_terbaru','pendapatan_kamar_hari_ini', 'total_pendapatan_kamar', 'pendapatan_menu_hari_ini', 'total_pendapatan_menu'));
    }
}
