<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Menu;
use App\Models\Reservation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // =========================
        // DATA KARYAWAN
        // =========================
        $karyawans = Karyawan::latest()->get();

        // =========================
        // DATA MENU
        // =========================
        $menus = Menu::latest()->get();

        $totalMenu = $menus->count();

        $readyMenu = $menus
            ->where('status', 'tersedia')
            ->count();

        $soldOutMenu = $menus
            ->where('status', 'habis')
            ->count();

        // Menu yang tersedia
        // Hanya menu dengan status "tersedia"
        $menusTersedia = Menu::where('status', 'tersedia')
            ->latest()
            ->get();

        // =========================
        // DATA RESERVASI
        // =========================
        $reservations = Reservation::latest()->get();

        // Statistik reservasi
        $totalReservations = $reservations->count();

        $approvedReservations = $reservations
            ->where('status', 'approved')
            ->count();

        $pendingReservations = $reservations
            ->where('status', 'pending')
            ->count();

        $totalGuests = $reservations->sum('jumlah_orang');

        // =========================
        // KIRIM DATA KE DASHBOARD
        // =========================
        return view('dashboard', compact(
            'karyawans',
            'menus',
            'menusTersedia',
            'totalMenu',
            'readyMenu',
            'soldOutMenu',
            'reservations',
            'totalReservations',
            'approvedReservations',
            'pendingReservations',
            'totalGuests'
        ));
    }
}
