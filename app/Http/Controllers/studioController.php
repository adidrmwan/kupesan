<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\PSPkg;
use App\Album;
use App\FasilitasPartner;
use App\Provinces;
use App\Regencies;
use App\Districts;
use App\Villages;

class StudioController extends Controller
{
    public function detailFotostudio(Request $request)
    {
    	$user_id = $request->id;
        $booking_date = $request->booking_date;
    	$detail = Partner::where('user_id', $user_id)->get();
        $partner = Partner::where('user_id', $user_id)->first();
    	$carte = PSPkg::where('user_id', $user_id)->where('pkg_category_them','=', 'A La Carte')->get();
    	$spack = PSPkg::where('user_id', $user_id)->where('pkg_category_them','=', 'Special Package')->get();
    	$studio = PSPkg::where('user_id', $user_id)->where('pkg_category_them','=', 'Special Studio')->get();
    	$album = Album::where('user_id', $user_id)->get();
        $provinsi = Provinces::where('id', $partner->pr_prov)->first();
        $kota = Regencies::where('id', $partner->pr_kota)->first();
        $kecamatan = Districts::where('id', $partner->pr_kec)->first();
    	$fasilitas = FasilitasPartner::where('user_id', $user_id)->get();
        return view('detail-partner.fotostudio', ['detail' => $detail, 'album' => $album, 'fasilitas' => $fasilitas, 'booking_date' => $booking_date], compact('provinsi', 'kota', 'kecamatan', 'carte', 'spack', 'studio'));
    }

}
