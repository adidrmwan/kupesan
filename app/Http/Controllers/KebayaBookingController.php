<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\PSPkg;
use Illuminate\Support\Facades\Input;
use App\Jam;
use App\Partner;
use App\PartnerDurasi;
use App\Booking;
use Carbon\Carbon;
use App\BookingCheck;
use File;
use Image;
use App\Provinces;
use App\Regencies;
use App\Districts;
use App\Villages;
use App\KebayaProduct;

class KebayaBookingController extends Controller
{
    public function step1(Request $request) {

        $package_id = $request->package_id;

        $package = KebayaProduct::where('id', $package_id)->get();
        $id = KebayaProduct::where('id', $package_id)->first();

        $partner = Partner::where('user_id', $id->partner_id)->first();
        if (Auth::user()) {
            return redirect()->intended(route('kebaya.step2', ['package_id' => $package_id]));
        }

        return view('online-booking.kebaya.step1', ['package' => $package, 'pid' => $package_id, 'partner_id' => $partner->user_id], compact('package', 'partner'));
 
    }

    public function step2(Request $request) {

        $package_id = $request->package_id;

        $package = KebayaProduct::where('id', $package_id)->get();
        $id = KebayaProduct::where('id', $package_id)->first();

        $partner = Partner::where('user_id', $id->partner_id)->first();

        if(empty($request->booking_date)) {
            return view('online-booking.kebaya.step2', ['package' => $package, 'pid' => $package_id, 'partner_id' => $partner->user_id], compact('partner'));
        }
 
    }
}
