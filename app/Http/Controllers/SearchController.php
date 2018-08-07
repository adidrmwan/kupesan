<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Partner;
use App\Booking;
use App\PSPkg;
use App\PartnerTag;

class SearchController extends Controller
{
    public function searchFotostudio(Request $request)
    {
    	$tema_id = $request->tema;
        
    	if(!empty($tema_id)) {
    		// $cek_tgl = Booking::where('booking_date', $booking_date)->select('package_id', 'booking_date', 'booking_start_time', 'booking_end_time')->get();
            $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tema_id)->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')->where('ps_package.status', '1')->get();
            // dd($cek_tema);
    	}

    	$result = DB::table('partner')
         ->join('ps_package', 'ps_package.user_id', '=', 'partner.user_id')
         ->select('ps_package.user_id', 'partner.pr_name', 'partner.pr_logo', DB::raw('MIN(ps_package.pkg_price_them) as min_price'))
         ->groupBy('ps_package.user_id', 'partner.pr_name', 'partner.pr_logo')
         ->get();

        return view('daftar.fotostudio', ['result' => $result, 'allThemes' => $allThemes]);
    }

    public function home()
    {
        $tag = PartnerTag::join('ps_tag', 'ps_tag.tag_id', '=', 'ps_package_tag.tag_id')
                ->distinct()->orderBy('tag_title', 'asc')->get(['ps_tag.tag_id', 'ps_tag.tag_title']);

        return view('home', ['tag' => $tag]);
    }
}
