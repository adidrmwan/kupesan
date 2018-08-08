<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\PSPkg;
class AdminController extends Controller
{
    public function dashboard()
    {
        $booking = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('booking_status', 'paid')->get();
        $booking_confirmed = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('booking_status', 'confirmed')->get();
        // dd($booking);
        return view('superadmin.dashboard', ['booking' => $booking, 'booking_confirmed' => $booking_confirmed]);
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
