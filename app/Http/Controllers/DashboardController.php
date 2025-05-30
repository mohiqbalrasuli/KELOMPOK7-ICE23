<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class DashboardController extends Controller
{
    public function index()
    {
        $kamar_terisi = Kamar::where('status', 'terisi')->count();
        $kamar_kosong = Kamar::where('status', 'kosong')->count();
        $kamar_maintenance = Kamar::where('status', 'maintenance')->count();
        $kamar_booking = Kamar::where('status', 'booking')->count();
        $kamar_checkin = Kamar::where('status', 'checkin')->count();
        $kamar_checkout = Kamar::where('status', 'checkout')->count();


        return view('admin.dashboard');
    }
}
