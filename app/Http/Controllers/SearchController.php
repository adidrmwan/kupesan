<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Partner;
use App\Booking;
use App\PSPkg;
class SearchController extends Controller
{
    public function searchFotostudio(Request $request)
    {
    	$booking_date = $request->booking_date;
    	if(!empty($request->booking_date)) {
    		// dd($booking_date);
    		$cek_tgl = Booking::where('booking_date', $booking_date)->select('package_id', 'booking_date', 'booking_start_time', 'booking_end_time')->get();

    	}

    	$result = DB::table('partner')
         ->join('ps_package', 'ps_package.user_id', '=', 'partner.user_id')
         ->select('ps_package.user_id', 'partner.pr_name', 'partner.pr_logo', DB::raw('MIN(ps_package.pkg_price_them) as min_price'))
         ->groupBy('ps_package.user_id', 'partner.pr_name', 'partner.pr_logo')
         ->get();

        return view('daftar.fotostudio', ['result' => $result, 'booking_date' => $booking_date]);
    }
}
