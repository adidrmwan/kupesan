<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
class AdminController extends Controller
{
    public function dashboard()
    {
        $booking = Booking::all();
        return view('superadmin.dashboard', ['booking' => $booking]);
    }
}
