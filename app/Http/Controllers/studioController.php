<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\PSPkg;
use App\Album;
use App\FasilitasPartner;
class StudioController extends Controller
{
    public function detailFotostudio(Request $request)
    {
    	$user_id = $request->user_id;
    	$detail = Partner::where('user_id', $user_id)->get();
    	$thematic = PSPkg::where('user_id', $user_id)->where('pkg_category_them','=', 'Thematic_Set')->get();
    	$special = PSPkg::where('user_id', $user_id)->where('pkg_category_them','=', 'Special_Studio')->get();
    	$alacarte = PSPkg::where('user_id', $user_id)->where('pkg_category_them','=', 'Ala_Carte')->get();
    	$album = Album::where('user_id', $user_id)->get();
    	$fasilitas = FasilitasPartner::where('user_id', $user_id)->get();
        return view('detail-partner.fotostudio', ['detail' => $detail, 'thematic' => $thematic, 'special' => $special, 'alacarte' => $alacarte, 'album' => $album, 'fasilitas' => $fasilitas]);
    }

}
