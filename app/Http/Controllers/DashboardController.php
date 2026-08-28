<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $karyawans = Karyawan ::latest('nama', 'no_hp','jabatan','status')->get();

        return view('dashboard', compact('karyawans'));
    }
}
