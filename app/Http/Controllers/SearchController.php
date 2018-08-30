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
use App\KebayaTema;
use App\KebayaProduct;
use App\Tag;
use App\KebayaPartnerTema;

class SearchController extends Controller
{
    public function home()
    {
        $tag = PartnerTag::join('ps_tag', 'ps_tag.tag_id', '=', 'ps_package_tag.tag_id')
                ->distinct()->orderBy('tag_title', 'asc')->get(['ps_tag.tag_id', 'ps_tag.tag_title']);
        $tema = kebayaTema::join('kebaya_partner_tema', 'kebaya_tema.tema_id', '=', 'kebaya_partner_tema.tema')->distinct()->orderBy('tema_name', 'asc')->get(['kebaya_tema.tema_name', 'kebaya_tema.tema_id']);
        
        $studio = Partner::where('pr_type', '1')->get();
        return view('home', compact('studio', 'tema', 'tag'));
    }

    public function searchKebaya(Request $request)
    {
        $tag_id = $request->tag_id;
        $tema = KebayaTema::where('tema_id', $tag_id)->first();

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
        // dd($request);

        if($request->has('tag_id')) {

            if($tag_id == 'all'){
                

                if (empty($request->min_price)) {
                    $allThemes = KebayaProduct::where('status', '1')
                                ->orderBy('price', 'asc')->get();
                    if ($request->type == 'All_type') {
                        $allThemes = KebayaProduct::where('status', '1')
                                ->orderBy('price', 'asc')->get();
                    }
                    elseif ($request->type == 'Setelan') {
                        $allThemes = KebayaProduct::where('status', '1')
                                    ->where('set', 'Setelan')
                                    ->orderBy('price', 'asc')->get();
                    }
                    elseif ($request->type == 'Atasan') {
                        $allThemes = KebayaProduct::where('status', '1')
                                    ->where('set', 'Atasan')
                                    ->orderBy('price', 'asc')->get();
                    }
                    elseif ($request->type == 'Bawahan') {
                        $allThemes = KebayaProduct::where('status', '1')
                                    ->where('set', 'Bawahan')
                                    ->orderBy('price', 'asc')->get();
                    }

                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'All_type'){
                    $allThemes = KebayaProduct::where('status', '1')
                                ->whereBetween('price', [$min_price, $max_price])
                                ->orderBy('price', 'asc')->get();
                }

                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'Setelan'){                    
                    $allThemes = KebayaProduct::where('status', '1')
                                ->where('set', 'Setelan')
                                ->whereBetween('price', [$min_price, $max_price])
                                ->orderBy('price', 'asc')->get();
                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'Atasan'){
                    $allThemes = KebayaProduct::where('status', '1')
                                ->where('set', 'Atasan')
                                ->whereBetween('price', [$min_price, $max_price])
                                ->orderBy('price', 'asc')->get();
                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'Bawahano'){
                    $allThemes = KebayaProduct::where('status', '1')
                                ->where('set', 'Bawahan')
                                ->whereBetween('price', [$min_price, $max_price])
                                ->orderBy('price', 'asc')->get();
                }

                if ($request->has('size')) {

                    $allThemes = KebayaProduct::where('status', '1')
                                ->where('size', $request->size)
                                ->orderBy('price', 'asc')->get();
                }

                return view('search-result.kebaya.daftar', ['allThemes' => $allThemes], compact('tag_id', 'tema'));
            }

            elseif($tag_id != 'all'){
                
                if (empty($request->min_price)) {
                    $allThemes = KebayaPartnerTema::where('kebaya_partner_tema.tema', $tag_id)
                                ->join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_partner_tema.package_id')
                                ->where('kebaya_product.status', '1')
                                ->orderBy('kebaya_product.price', 'asc')->get();

                    if ($request->type == 'Setelan') {
                        $allThemes = KebayaPartnerTema::where('kebaya_partner_tema.tema', $tag_id)
                                ->join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_partner_tema.package_id')
                                ->where('kebaya_product.status', '1')
                                ->where('set', 'Setelan')
                                ->orderBy('kebaya_product.price', 'asc')->get();
                    }
                    elseif ($request->type == 'Atasan') {
                        $allThemes = KebayaPartnerTema::where('kebaya_partner_tema.tema', $tag_id)
                                ->join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_partner_tema.package_id')
                                ->where('kebaya_product.status', '1')
                                ->where('set', 'Atasan')
                                ->orderBy('kebaya_product.price', 'asc')->get();
                    }
                    elseif ($request->type == 'Bawahan') {
                        $allThemes = KebayaPartnerTema::where('kebaya_partner_tema.tema', $tag_id)
                                ->join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_partner_tema.package_id')
                                ->where('kebaya_product.status', '1')
                                ->where('set', 'Bawahan')
                                ->orderBy('kebaya_product.price', 'asc')->get();
                    }


                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'All_type'){
                    $allThemes = KebayaPartnerTema::where('kebaya_partner_tema.tema', $tag_id)
                                ->join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_partner_tema.package_id')
                                ->where('kebaya_product.status', '1')
                                ->whereBetween('kebaya_product.price', [$min_price, $max_price])
                                ->orderBy('kebaya_product.price', 'asc')->get();
                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'Setelan'){              
                    $allThemes = KebayaPartnerTema::where('kebaya_partner_tema.tema', $tag_id)
                                ->join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_partner_tema.package_id')
                                ->where('kebaya_product.status', '1')
                                ->where('set', 'Setelan')
                                ->whereBetween('kebaya_product.price', [$min_price, $max_price])
                                ->orderBy('kebaya_product.price', 'asc')->get();
                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'Atasan'){
                    $allThemes = KebayaPartnerTema::where('kebaya_partner_tema.tema', $tag_id)
                                ->join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_partner_tema.package_id')
                                ->where('kebaya_product.status', '1')
                                ->where('set', 'Atasan')
                                ->whereBetween('kebaya_product.price', [$min_price, $max_price])
                                ->orderBy('kebaya_product.price', 'asc')->get();
                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'Bawahan'){
                    $allThemes = KebayaPartnerTema::where('kebaya_partner_tema.tema', $tag_id)
                                ->join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_partner_tema.package_id')
                                ->where('kebaya_product.status', '1')
                                ->where('set', 'Bawahan')
                                ->whereBetween('kebaya_product.price', [$min_price, $max_price])
                                ->orderBy('kebaya_product.price', 'asc')->get();
                }

                if ($request->has('size')) {

                    $allThemes = KebayaProduct::where('status', '1')
                                ->where('size', $request->size)
                                ->orderBy('price', 'asc')->get();
                }
                // dd($request);
                return view('search-result.kebaya.daftar', ['allThemes' => $allThemes], compact('tag_id', 'tema'));
            }
        
        }
    }

    public function searchFotostudio(Request $request)
    {
        $tag_id = $request->tag_id;
        $tema = Tag::where('tag_id', $tag_id)->first();

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

        if($request->has('tag_id')) {

            if($tag_id == 'all'){

                if (empty($request->min_price)) {
                    $allThemes = PSPkg::where('status', '1')
                                ->orderBy('pkg_price_them', 'asc')->get();
                    if ($request->type == 'All_type') {
                        $allThemes = PSPkg::where('status', '1')
                                    ->orderBy('pkg_price_them', 'asc')->get();
                    }
                    elseif ($request->type == 'A La Carte') {
                        $allThemes = PSPkg::where('status', '1')
                                    ->where('pkg_category_them', 'A La Carte')
                                    ->orderBy('pkg_price_them', 'asc')->get();
                    }
                    elseif ($request->type == 'Special Package') {
                        $allThemes = PSPkg::where('status', '1')
                                    ->where('pkg_category_them', 'Special Package')
                                    ->orderBy('pkg_price_them', 'asc')->get();
                    }
                    elseif ($request->type == 'Special Studio') {
                        $allThemes = PSPkg::where('status', '1')
                                    ->where('pkg_category_them', 'Special Studio')
                                    ->orderBy('pkg_price_them', 'asc')->get();
                    }
                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'All_type'){
                    $allThemes = PSPkg::where('status', '1')
                                ->whereBetween('pkg_price_them', [$min_price, $max_price])
                                ->orderBy('pkg_price_them', 'asc')->get();
                }

                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'A La Carte'){                    
                    $allThemes = PSPkg::where('status', '1')
                                ->where('pkg_category_them', 'A La Carte')
                                ->whereBetween('pkg_price_them', [$min_price, $max_price])
                                ->orderBy('pkg_price_them', 'asc')->get();
                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'Special Package'){
                    $allThemes = PSPkg::where('status', '1')
                                ->where('pkg_category_them', 'Special Package')
                                ->whereBetween('pkg_price_them', [$min_price, $max_price])
                                ->orderBy('pkg_price_them', 'asc')->get();
                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'Special Studio'){
                    $allThemes = PSPkg::where('status', '1')
                                ->where('pkg_category_them', 'Special Studio')
                                ->whereBetween('pkg_price_them', [$min_price, $max_price])
                                ->orderBy('pkg_price_them', 'asc')->get();
                }

                return view('search-result.fotostudio.daftar', ['allThemes' => $allThemes], compact('tag_id', 'tema'));
            }

            elseif($tag_id != 'all'){

                if (empty($request->min_price)) {
                    $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)
                                ->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                                ->where('ps_package.status', '1')
                                ->orderBy('ps_package.pkg_price_them', 'asc')->get();

                    if ($request->type == 'All_type') {
                        $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)
                                ->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                                ->where('ps_package.status', '1')
                                ->orderBy('ps_package.pkg_price_them', 'asc')->get();
                    }
                    elseif ($request->type == 'A La Carte') {
                        $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)
                                ->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                                ->where('ps_package.status', '1')
                                ->where('pkg_category_them', 'A La Carte')
                                ->orderBy('ps_package.pkg_price_them', 'asc')->get();
                    }
                    elseif ($request->type == 'Special Package') {
                        $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)
                                ->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                                ->where('ps_package.status', '1')
                                ->where('pkg_category_them', 'Special Package')
                                ->orderBy('ps_package.pkg_price_them', 'asc')->get();
                    }
                    elseif ($request->type == 'Special Studio') {
                        $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)
                                ->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                                ->where('ps_package.status', '1')
                                ->where('pkg_category_them', 'Special Studio')
                                ->orderBy('ps_package.pkg_price_them', 'asc')->get();
                    }


                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'All_type'){
                    $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)
                                ->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                                ->where('ps_package.status', '1')
                                ->whereBetween('ps_package.pkg_price_them', [$min_price, $max_price])
                                ->orderBy('ps_package.pkg_price_them', 'asc')->get();
                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'A La Carte'){              
                    $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)
                                ->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                                ->where('ps_package.status', '1')
                                ->where('ps_package.pkg_category_them', 'A La Carte')
                                ->whereBetween('ps_package.pkg_price_them', [$min_price, $max_price])
                                ->orderBy('ps_package.pkg_price_them', 'asc')->get();
                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'Special Package'){
                    $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)
                                ->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                                ->where('ps_package.status', '1')
                                ->where('ps_package.pkg_category_them', 'Special Package')
                                ->whereBetween('ps_package.pkg_price_them', [$min_price, $max_price])
                                ->orderBy('ps_package.pkg_price_them', 'asc')->get();
                }
                elseif($request->has('min_price') && $request->has('max_price') && $request->type == 'Special Studio'){
                    $allThemes = PartnerTag::where('ps_package_tag.tag_id', $tag_id)
                                ->join('ps_package', 'ps_package.id', '=', 'ps_package_tag.package_id')
                                ->where('ps_package.status', '1')
                                ->where('ps_package.pkg_category_them', 'Special Studio')
                                ->whereBetween('ps_package.pkg_price_them', [$min_price, $max_price])
                                ->orderBy('ps_package.pkg_price_them', 'asc')->get();
                }
                // dd($request);
                return view('search-result.fotostudio.daftar', ['allThemes' => $allThemes], compact('tag_id', 'tema'));
            }
        
        }

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
