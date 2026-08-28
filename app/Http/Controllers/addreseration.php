<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class addreseration extends Controller
{
    public function index(){
        $reservations = Reservation::latest()->get();

        return view('reservation', compact('reservations'));
    }
}
