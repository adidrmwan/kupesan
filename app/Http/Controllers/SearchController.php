<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
class SearchController extends Controller
{
    public function searchFotostudio(Request $request)
    {
    	$tgl_pesan = $request->tanggal_pesan;
    	$result = Partner::all();
        return view('daftar.fotostudio', ['result' => $result]);
    }
}
