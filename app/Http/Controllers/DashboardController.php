<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\kategori_menu;
use App\Models\menu;
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
        $menu = menu::all()->count();
        $kategori = kategori_menu::all();
        $jumlahMenuPerKategori = DB::table('table_menu')
        ->select('kategori_menu_id', DB::raw('count(*) as total'))
        ->groupBy('kategori_menu_id')
        ->pluck('total', 'kategori_menu_id');



        return view('admin.dashboard', compact('kamar_terisi', 'kamar_tersedia', 'kamar_maintenance', 'user', 'menu', 'kategori', 'jumlahMenuPerKategori'));
    }
}
