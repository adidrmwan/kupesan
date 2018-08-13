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
    public function home()
    {
        $tag = PartnerTag::join('ps_tag', 'ps_tag.tag_id', '=', 'ps_package_tag.tag_id')
                ->distinct()->orderBy('tag_title', 'asc')->get(['ps_tag.tag_id', 'ps_tag.tag_title']);

        return view('home', ['tag' => $tag]);
    }

    public function searchFotostudio(Request $request)
    {
        $tag_id = $request->tag_id;

        if($request->has('tag_id')) {

            if($request->has('min_price') && $request->has('max_price')){
                $min_price = $request->min_price;
                $max_price = $request->max_price;
                $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')->where('ps_package.status', '1')->whereBetween('ps_package.pkg_price_them', [$min_price, $max_price])->orderBy('ps_package.pkg_price_them', 'asc')->get();
                return view('daftar.fotostudio', ['allThemes' => $allThemes], compact('tag_id'));
            }

            $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')->where('ps_package.status', '1')->orderBy('ps_package.pkg_price_them', 'asc')->get();
        }

        return view('daftar.fotostudio', ['allThemes' => $allThemes], compact('tag_id'));
    }

    public function searchData(Request $request)
    {
        // dd($request);
        if ($request->has('word')) {
            $word = $request->word;
            $allThemes = PartnerTag::join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')->join('ps_tag', 'ps_tag.tag_id', '=', 'ps_package_tag.tag_id')->where('ps_tag.tag_title', 'LIKE', "%{$request->input('word')}%")->where('ps_package.status', '1')->orderBy('ps_package.pkg_price_them', 'asc')->get();
            $studio_data = Partner::where('pr_name', 'LIKE', "%{$request->input('word')}%")->get();
            $cek_studio_data = Partner::where('pr_name', 'LIKE', "%{$request->input('word')}%")->first();
            $cek_tag = PartnerTag::join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')->join('ps_tag', 'ps_tag.tag_id', '=', 'ps_package_tag.tag_id')->where('ps_tag.tag_title', 'LIKE', "%{$request->input('word')}%")->where('ps_package.status', '1')->first();
            if (empty($cek_studio_data) && empty($cek_tag)) {
                return view('errors.search-not-found');
            }
            else {
                return view('result-studio', compact('studio_data', 'allThemes', 'word'));
            }
        }
        return view('home');
    }

    public function resultstudio()
    {
        return view('resultstudio');
    }
}
