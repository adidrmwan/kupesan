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
use App\PartnerDurasi;
use App\KebayaTema;
use App\KebayaProduct;
use App\Tag;
use App\KebayaPartnerTema;
use App\KebayaKategori;
use App\KebayaBiayaSewa;

class SearchController extends Controller
{
    public function home()
    {
        $tag = PartnerTag::join('ps_tag', 'ps_tag.tag_id', '=', 'ps_package_tag.tag_id')
                ->distinct()->orderBy('tag_title', 'asc')->get(['ps_tag.tag_id', 'ps_tag.tag_title']);
        $tema = KebayaKategori::get();
        $thumbnailStudio = Partner::where('pr_type', '1')->where('status', '1')->take(2)->get();
        return view('home', compact('thumbnailStudio', 'tema', 'tag'));
    }

    public function searchKebaya(Request $request)
    {
        $tag_id = $request->tag_id;
        $tema = KebayaProduct::where('category', $tag_id)->first();

        if (!empty($request->min_price)) {
            $min = $request->min_price;
            $min_array = explode(".", $min);
            $min_price = '';
            foreach ($min_array as $key => $value) {
                $min_price = $min_price . $min_array[$key];
            }
        } else {
            $min_price = KebayaBiayaSewa::min('kebaya_biaya_sewa');
        }
        if (!empty($request->max_price)) {
            $max  = $request->max_price;
            $max_array = explode(".", $max);
            $max_price = '';
            foreach ($max_array as $key => $value) {
                $max_price = $max_price . $max_array[$key];
            }
        } else {
            $max_price = KebayaBiayaSewa::max('kebaya_biaya_sewa');
        }

        if($tag_id == 'all'){
            $allThemes = KebayaProduct::where('status', '1')
                        ->whereBetween('price', [$min_price, $max_price])
                        ->orderBy('price', 'asc')->get();
            if($request->type == 'All_type' && $request->size == 'All_size' && $request->gender == 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->whereBetween('price', [$min_price, $max_price])
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type == 'All_type' && $request->size == 'All_size' && $request->gender != 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('priawanita', $request->gender)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type == 'All_type' && $request->size != 'All_size' && $request->gender == 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('size', $request->size)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type != 'All_type' && $request->size == 'All_size' && $request->gender == 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('set', $request->type)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type == 'All_type' && $request->size != 'All_size' && $request->gender != 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('size', $request->size)
                            ->where('priawanita', $request->gender)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type != 'All_type' && $request->size != 'All_size' && $request->gender == 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('set', $request->type)
                            ->where('size', $request->size)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type != 'All_type' && $request->size == 'All_size' && $request->gender != 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('set', $request->type)
                            ->where('priawanita', $request->gender)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type != 'All_type' && $request->size != 'All_size' && $request->gender != 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('set', $request->type)
                            ->where('size', $request->size)
                            ->where('priawanita', $request->gender)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->orderBy('price', 'asc')->get();
            }
        }

        elseif($tag_id != 'all'){
            $allThemes = KebayaProduct::where('category', $tag_id)
                        ->where('status', '1')
                        ->whereBetween('price', [$min_price, $max_price])
                        ->orderBy('price', 'asc')->get();

            if($request->type == 'All_type' && $request->size == 'All_size' && $request->gender == 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->whereBetween('price', [$min_price, $max_price])
                            ->where('category', $tag_id)
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type == 'All_type' && $request->size == 'All_size' && $request->gender != 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('priawanita', $request->gender)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->where('category', $tag_id)
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type == 'All_type' && $request->size != 'All_size' && $request->gender == 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('size', $request->size)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->where('category', $tag_id)
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type != 'All_type' && $request->size == 'All_size' && $request->gender == 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('set', $request->type)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->where('category', $tag_id)
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type == 'All_type' && $request->size != 'All_size' && $request->gender != 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('size', $request->size)
                            ->where('priawanita', $request->gender)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->where('category', $tag_id)
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type != 'All_type' && $request->size != 'All_size' && $request->gender == 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('set', $request->type)
                            ->where('size', $request->size)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->where('category', $tag_id)
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type != 'All_type' && $request->size == 'All_size' && $request->gender != 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('set', $request->type)
                            ->where('priawanita', $request->gender)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->where('category', $tag_id)
                            ->orderBy('price', 'asc')->get();
            } elseif($request->type != 'All_type' && $request->size != 'All_size' && $request->gender != 'All_gender'){
                $allThemes = KebayaProduct::where('status', '1')
                            ->where('set', $request->type)
                            ->where('size', $request->size)
                            ->where('priawanita', $request->gender)
                            ->whereBetween('price', [$min_price, $max_price])
                            ->where('category', $tag_id)
                            ->orderBy('price', 'asc')->get();
            }
        }

        if(empty($allThemes[0])) {
            return view('search-result.kebaya.notfound', ['allThemes' => $allThemes], compact('tag_id', 'tema'));
        }
        
        return view('search-result.kebaya.daftar', ['allThemes' => $allThemes], compact('tag_id', 'tema'));
    }

    public function searchFotostudio(Request $request)
    {
        $tag_id = $request->tag_id;
        $tema = Tag::where('tag_id', $tag_id)->first();

        if (!empty($request->min_price)) {
            $min = $request->min_price;
            $min_array = explode(".", $min);
            $min_price = '';
            foreach ($min_array as $key => $value) {
                $min_price = $min_price . $min_array[$key];
            }
        } else {
            $min_price = PartnerDurasi::min('durasi_harga');
        }

        if (!empty($request->max_price)) {
            $max  = $request->max_price;
            $max_array = explode(".", $max);
            $max_price = '';
            foreach ($max_array as $key => $value) {
                $max_price = $max_price . $max_array[$key];
            }
        } else {
            $max_price = PartnerDurasi::max('durasi_harga');

        }

        if($tag_id == 'all'){
            $allThemes = PSPkg::where('status', '1')
                            ->whereBetween('pkg_price_them', [$min_price, $max_price])
                            ->orderBy('pkg_price_them', 'asc')->get();

            if($request->type != 'All_type' && !empty($request->type)){                    
                $allThemes = PSPkg::where('status', '1')
                            ->where('pkg_category_them', $request->type)
                            ->whereBetween('pkg_price_them', [$min_price, $max_price])
                            ->orderBy('pkg_price_them', 'asc')->get();
            }
        }

        elseif($tag_id != 'all'){

            $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)
                            ->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                            ->where('ps_package.status', '1')
                            ->whereBetween('ps_package.pkg_price_them', [$min_price, $max_price])
                            ->orderBy('ps_package.pkg_price_them', 'asc')->get();
            if($request->type != 'All_type' && !empty($request->type)){              
                $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)
                            ->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                            ->where('ps_package.status', '1')
                            ->where('ps_package.pkg_category_them', $request->type)
                            ->whereBetween('ps_package.pkg_price_them', [$min_price, $max_price])
                            ->orderBy('ps_package.pkg_price_them', 'asc')->get();
            }
        }

        return view('search-result.fotostudio.daftar', ['allThemes' => $allThemes], compact('tag_id', 'tema'));

    }



    public function searchData(Request $request)
    {
        // dd($request);
        if ($request->has('word')) {
            $word = $request->word;
            $allThemes = PSPkg::where('pkg_name_them', 'LIKE', "%{$request->input('word')}%")
                        ->where('status', '1')
                        ->get();

            $allThemes2 = PartnerTag::join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                        ->join('ps_tag', 'ps_tag.tag_id', '=', 'ps_package_tag.tag_id')
                        ->where('ps_tag.tag_title', 'LIKE', "%{$request->input('word')}%")
                        ->where('ps_package.status', '1')
                        ->orderBy('ps_package.pkg_price_them', 'asc')->distinct()->get();

            $studio_data = Partner::where('pr_name', 'LIKE', "%{$request->input('word')}%")->where('status', '1')->get();

            $kebaya_data = KebayaProduct::where('name', 'LIKE', "%{$request->input('word')}%")->where('status', '1')->get();

            $cek_studio_data = Partner::where('pr_name', 'LIKE', "%{$request->input('word')}%")->where('status', '1')->first();

            $cek_kebaya_data = KebayaProduct::where('name', 'LIKE', "%{$request->input('word')}%")->where('status', '1')->first();

            // $cek_tag = PartnerTag::join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')->join('ps_tag', 'ps_tag.tag_id', '=', 'ps_package_tag.tag_id')->where('ps_tag.tag_title', 'LIKE', "%{$request->input('word')}%")->where('ps_package.status', '1')->first();
            $cek_paket = PSPkg::where('pkg_name_them', 'LIKE', "%{$request->input('word')}%")
                        ->where('status', '1')
                        ->first();

            $cek_tag = PartnerTag::join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                        ->join('ps_tag', 'ps_tag.tag_id', '=', 'ps_package_tag.tag_id')
                        ->where('ps_tag.tag_title', 'LIKE', "%{$request->input('word')}%")
                        ->where('ps_package.status', '1')
                        ->orderBy('ps_package.pkg_price_them', 'asc')
                        ->first();

            if (empty($cek_studio_data) && empty($cek_paket) && empty($cek_tag) && empty($cek_kebaya_data)) {
                return view('errors.search-not-found');
            }
            else {
                return view('search-result', compact('cek_studio_data', 'cek_paket', 'cek_tag', 'studio_data', 'allThemes', 'allThemes2', 'word', 'kebaya_data', 'cek_kebaya_data'));
            }
        }
        return view('home');
    }

    public function resultstudio()
    {
        return view('resultstudio');
    }
}
