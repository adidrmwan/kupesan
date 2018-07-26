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

    public function confirmBukti(Request $request)
    {
    	// dd($request);
    	$booking_id = $request->id;
    	$kode_booking = str_random(7);
        $booking = Booking::where('booking_id', $booking_id)->first();
        $booking->kode_booking = $kode_booking;
        $booking->booking_status = 'confirmed';
        $booking->save();

        return redirect()->back();
    }
}
