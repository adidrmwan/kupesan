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

            if($tag_id == 'all'){
                if($request->has('min_price') && $request->has('max_price') && $request->type == 'All_type'){
                    $min = $request->min_price;
                    $min_array = explode(".", $min);
                    $min_price = '';
                    foreach ($min_array as $key => $value) {
                        $min_price = $min_price . $min_array[$key];
                    }

                    $max  = $request->max_price;
                    $max_array = explode(".", $max);
                    $max_price = '';
                    foreach ($max_array as $key => $value) {
                        $max_price = $max_price . $max_array[$key];
                    }

                    $allThemes = PSPkg::where('status', '1')->whereBetween('pkg_price_them', [$min_price, $max_price])->orderBy('pkg_price_them', 'asc')->get();
                    return view('daftar.fotostudio', ['allThemes' => $allThemes], compact('tag_id'));
                }

                if($request->has('min_price') && $request->has('max_price') && $request->type == 'Thematic_Set'){
                    $min = $request->min_price;
                    $min_array = explode(".", $min);
                    $min_price = '';
                    foreach ($min_array as $key => $value) {
                        $min_price = $min_price . $min_array[$key];
                    }

                    $max  = $request->max_price;
                    $max_array = explode(".", $max);
                    $max_price = '';
                    foreach ($max_array as $key => $value) {
                        $max_price = $max_price . $max_array[$key];
                    }
                    
                    $allThemes = PSPkg::where('status', '1')->where('pkg_category_them', 'Thematic_Set')->whereBetween('pkg_price_them', [$min_price, $max_price])->orderBy('pkg_price_them', 'asc')->get();
                    return view('daftar.fotostudio', ['allThemes' => $allThemes], compact('tag_id'));
                }

                if($request->has('min_price') && $request->has('max_price') && $request->type == 'Ala_Carte'){
                    $min = $request->min_price;
                    $min_array = explode(".", $min);
                    $min_price = '';
                    foreach ($min_array as $key => $value) {
                        $min_price = $min_price . $min_array[$key];
                    }

                    $max  = $request->max_price;
                    $max_array = explode(".", $max);
                    $max_price = '';
                    foreach ($max_array as $key => $value) {
                        $max_price = $max_price . $max_array[$key];
                    }
                    
                    $allThemes = PSPkg::where('status', '1')->where('pkg_category_them', 'Ala_Carte')->whereBetween('pkg_price_them', [$min_price, $max_price])->orderBy('pkg_price_them', 'asc')->get();
                    return view('daftar.fotostudio', ['allThemes' => $allThemes], compact('tag_id'));
                }

                if($request->has('min_price') && $request->has('max_price') && $request->type == 'Special_Studio'){
                    $min = $request->min_price;
                    $min_array = explode(".", $min);
                    $min_price = '';
                    foreach ($min_array as $key => $value) {
                        $min_price = $min_price . $min_array[$key];
                    }

                    $max  = $request->max_price;
                    $max_array = explode(".", $max);
                    $max_price = '';
                    foreach ($max_array as $key => $value) {
                        $max_price = $max_price . $max_array[$key];
                    }
                    
                    $allThemes = PSPkg::where('status', '1')->where('pkg_category_them', 'Special_Studio')->whereBetween('pkg_price_them', [$min_price, $max_price])->orderBy('pkg_price_them', 'asc')->get();
                    return view('daftar.fotostudio', ['allThemes' => $allThemes], compact('tag_id'));
                }

                $allThemes = PSPkg::where('status', '1')->orderBy('pkg_price_them', 'asc')->get();
                return view('daftar.fotostudio', ['allThemes' => $allThemes], compact('tag_id'));
            }

            if($request->has('min_price') && $request->has('max_price') && empty($request->type)){
                $min_price = $request->min_price;
                $max_price = $request->max_price;
                $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')->where('ps_package.status', '1')->whereBetween('ps_package.pkg_price_them', [$min_price, $max_price])->orderBy('ps_package.pkg_price_them', 'asc')->get();
                return view('daftar.fotostudio', ['allThemes' => $allThemes], compact('tag_id'));
            }

            $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')->where('ps_package.status', '1')->orderBy('ps_package.pkg_price_them', 'asc')->get();
        }

        return view('daftar.fotostudio', ['allThemes' => $allThemes], compact('tag_id'));
    }

    public function searchKebaya(Request $request)
    {
        $sdate = explode('/', $request->start_date, 3); $sm = $sdate[0]; $sd = $sdate[1]; $sy = $sdate[2];
        $booking_start_date = $sy.'-'.$sm.'-'.$sd;
        $edate = explode('/', $request->end_date, 3); $em = $edate[0]; $ed = $edate[1]; $ey = $edate[2];
        $booking_end_date = $ey.'-'.$em.'-'.$ed;
        $time = '00:00:00';
        $endtime = '23:59:59';
        $start_date = date('Y-m-d H:i:s', strtotime("$booking_start_date $time"));
        $end_date = date('Y-m-d H:i:s', strtotime("$booking_end_date $endtime"));
        
        dd($request);

        return view('result.kebaya', ['allThemes' => $allThemes], compact('tag_id'));
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
