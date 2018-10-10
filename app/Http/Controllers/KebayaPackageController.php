<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\KebayaProduct;
use App\KebayaKategori;
use App\KebayaUkuran;
use App\KebayaPartnerTema;
use App\KebayaPartnerWarna;
use App\KebayaBiayaSewa;
use App\Partner;
use File;
use Image;
use Auth;
class KebayaPackageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $package = KebayaProduct::join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')
                    ->where('partner_id', $user->id)
                    ->select('kebaya_category.category_name', 'kebaya_product.*')
                    ->get();
        $biayaSewa = KebayaBiayaSewa::where('fk_partner_id', $user->id)->get();
        return view('partner.kebaya.item.index',['partner' => $partner, 'package' => $package], compact('biayaSewa'));
    }

    public function create()
    {    
        $listTag = DB::table('ps_tag')->get();
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $kategori = KebayaKategori::all();
        return view('partner.kebaya.item.create', compact('listTag', 'partner', 'kategori'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        if (!empty($request->price_dryclean)) {
            $price_dryclean = $request->price_dryclean;
            $price_dryclean_array = explode(".", $price_dryclean);
            $price_dryclean = '';
            foreach ($price_dryclean_array as $key => $value) {
                $price_dryclean = $price_dryclean . $price_dryclean_array[$key];
            }
        } else {
            $price_dryclean = '0';
        }

        $deposit = $request->deposit;
        $deposit_array = explode(".", $deposit);
        $deposit = '';
        foreach ($deposit_array as $key => $value) {
            $deposit = $deposit . $deposit_array[$key];
        }

        $partner = Partner::where('user_id', $user->id)->first();
        $package = new KebayaProduct();
        $package->partner_id = $partner->user_id;
        $package->partner_name = $partner->pr_name;
        $package->name = $request->input('name');
        $package->category = $request->input('category');
        $package->set = $request->input('set');
        $package->priawanita = $request->input('priawanita');
        $package->deposit = $deposit;
        $package->price_dryclean = $price_dryclean;
        $package->quantity = $request->input('quantity');
        $package->size = $request->input('size');
        $package->description = $request->input('description');
        $package->status = '1';
        $package->save();

        $dataSet = [];
        if (!empty($request->tema[0])) {
            for ($i = 0; $i < count($request->tema); $i++) {
                $dataSet[] = [
                    'partner_id' => $user->id,
                    'package_id' => $package->id,
                    'tema' => $request->tema[$i],
                ];
            }
            KebayaPartnerTema::insert($dataSet);
        }

        $dataSet2 = [];
        if (!empty($request->warna[0])) {
            for ($i = 0; $i < count($request->warna); $i++) {
                $dataSet2[] = [
                    'partner_id' => $user->id,
                    'package_id' => $package->id,
                    'warna' => $request->warna[$i],
                ];
            }
            KebayaPartnerWarna::insert($dataSet2);
        }

        $dataSet3 = [];
        if (!empty($request->bagian[0])) {
            for ($i = 0; $i < count($request->bagian); $i++) {
                $dataSet3[] = [
                    'partner_id' => $user->id,
                    'package_id' => $package->id,
                    'ukuran' => $package->size,
                    'bagian' => $request->bagian[$i],
                    'cm' => $request->ukuran[$i],
                ];
            }
            KebayaUkuran::insert($dataSet3);
        }

        $dataSet4 = [];
        if (!empty($request->durasiSewa[0])) {
            for ($i = 0; $i < count($request->durasiSewa); $i++) {
                $biayaSewa = $request->biayaSewa[$i];
                $biayaSewa_array = explode(".", $biayaSewa);
                $biayaSewa = '';
                foreach ($biayaSewa_array as $key => $value) {
                    $biayaSewa = $biayaSewa . $biayaSewa_array[$key];
                }

                $dataSet4[] = [
                    'fk_partner_id' => $user->id,
                    'fk_package_id' => $package->id,
                    'kebaya_durasi_hari' => $request->durasiSewa[$i],
                    'kebaya_biaya_sewa' => $biayaSewa,
                ];
            }
            KebayaBiayaSewa::insert($dataSet4);
        }

        $package = KebayaProduct::find($package->id);

        $biayaSewaMin = KebayaBiayaSewa::where('fk_package_id', $package->id)->min('kebaya_biaya_sewa');
        $package->price = $biayaSewaMin;

        $uniqid = uniqid();
        $package->image  = 'KBYPACK' . '1' . $package->category . $package->size . $uniqid;
        $package->image2 = 'KBYPACK' . '2' . $package->category . $package->size . $uniqid;
        $package->image3 = 'KBYPACK' . '3' . $package->category . $package->size . $uniqid;
        $package->image4 = 'KBYPACK' . '4' . $package->category . $package->size . $uniqid;
        $package->save();

        if ($request->hasFile('image')) {
            $foto_new = $package->image;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            }

            $foto = $request->file('image');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );

            $package = KebayaProduct::where('partner_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('image2')) {
            $package = KebayaProduct::find($package->id);
            $foto_new = $package->image2;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            }

            $foto = $request->file('image2');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );

            $package = KebayaProduct::where('partner_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('image3')) {
            $package = KebayaProduct::find($package->id);
            $foto_new = $package->image3;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            }

            $foto = $request->file('image3');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );

            $package = KebayaProduct::where('partner_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('image4')) {
            $package = KebayaProduct::find($package->id);
            $foto_new = $package->image4;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            }

            $foto = $request->file('image4');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );

            $package = KebayaProduct::where('partner_id',$user->id)->first();
            $package->save();
        }

        return redirect()->intended(route('kebaya-package.index'));  
    }

    public function show($package_id)
    {
        $user = Auth::user();
        $package = KebayaProduct::join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')
                    ->where('kebaya_product.id', $package_id)
                    ->select('kebaya_category.category_name', 'kebaya_category.id as category_id', 'kebaya_product.*')
                    ->get();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $kategori = KebayaKategori::get();
        $pu = KebayaUkuran::where('package_id', $package_id)->get();

        $biayaSewa = KebayaBiayaSewa::where('fk_partner_id', $user->id)
                    ->where('fk_package_id', $package_id)
                    ->get();
        return view('partner.kebaya.item.show',['partner' => $partner, 'package' => $package, 'kategori' => $kategori], compact('pu', 'biayaSewa', 'package_id'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $package_id)
    {
        $user = Auth::user();

        if (!empty($request->price_dryclean)) {
            $price_dryclean = $request->price_dryclean;
            $price_dryclean_array = explode(".", $price_dryclean);
            $price_dryclean = '';
            foreach ($price_dryclean_array as $key => $value) {
                $price_dryclean = $price_dryclean . $price_dryclean_array[$key];
            }
        } else {
            $price_dryclean = '0';
        }

        $deposit = $request->deposit;
        $deposit_array = explode(".", $deposit);
        $deposit = '';
        foreach ($deposit_array as $key => $value) {
            $deposit = $deposit . $deposit_array[$key];
        }

        $product_id = $request->product_id;
        $package_id = $request->product_id;
        $package = KebayaProduct::find($product_id);
        $package->name = $request->name;
        $package->category = $request->category;
        $package->set = $request->set;
        $package->priawanita = $request->priawanita;
        $package->deposit = $deposit;
        $package->price_dryclean = $price_dryclean;
        $package->quantity = $request->quantity;
        $package->size = $request->size;
        $package->save();
        
        if (!empty($request->bagian[0])) {
            for ($i = 0; $i < count($request->bagian); $i++) {
                $dataSet3[] = [
                    'partner_id' => $user->id,
                    'package_id' => $package->id,
                    'ukuran' => $package->size,
                    'bagian' => $request->bagian[$i],
                    'cm' => $request->ukuran[$i],
                ];
            }
            KebayaUkuran::insert($dataSet3);
        }

        $dataSet4 = [];
        if (!empty($request->durasiSewa[0])) {
            for ($i = 0; $i < count($request->durasiSewa); $i++) {
                $biayaSewa = $request->biayaSewa[$i];
                $biayaSewa_array = explode(".", $biayaSewa);
                $biayaSewa = '';
                foreach ($biayaSewa_array as $key => $value) {
                    $biayaSewa = $biayaSewa . $biayaSewa_array[$key];
                }

                $dataSet4[] = [
                    'fk_partner_id' => $user->id,
                    'fk_package_id' => $package->id,
                    'kebaya_durasi_hari' => $request->durasiSewa[$i],
                    'kebaya_biaya_sewa' => $biayaSewa,
                ];
            }
            KebayaBiayaSewa::insert($dataSet4);
        }

        $biayaSewaMin = KebayaBiayaSewa::where('fk_package_id', $package->id)->min('kebaya_biaya_sewa');
        $package->price = $biayaSewaMin;
        $package->save();

        if ($request->hasFile('image')) {
            $package = KebayaProduct::find($package->id);
            $foto_new = $package->image;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            }

            $foto = $request->file('image');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );

            $package = KebayaProduct::where('partner_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('image2')) {
            $package = KebayaProduct::find($package->id);
            $foto_new = $package->image2;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            }

            $foto = $request->file('image2');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );

            $package = KebayaProduct::where('partner_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('image3')) {
            $package = KebayaProduct::find($package->id);
            $foto_new = $package->image3;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            }

            $foto = $request->file('image3');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );

            $package = KebayaProduct::where('partner_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('image4')) {
            $package = KebayaProduct::find($package->id);
            $foto_new = $package->image4;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            }

            $foto = $request->file('image4');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );

            $package = KebayaProduct::where('partner_id',$user->id)->first();
            $package->save();
        }

        return redirect()->intended(route('kebaya-package.show', ['package_id' => $package_id]));
    }

    public function destroy($id)
    {
        //
    }

    public function setNonActive(Request $request)
    {
        $product_id = $request->product_id;
        $package = KebayaProduct::where('id', $product_id)->first();
        $package->status = '0';
        $package->save();

        return redirect()->back();
    }

    public function setActive(Request $request)
    {
        $product_id = $request->product_id;
        $package = KebayaProduct::where('id', $product_id)->first();
        $package->status = '1';
        $package->save();

        return redirect()->back();
    }

    public function deleteBiayaSewa(Request $request)
    {
        $user = Auth::user();
        $biayaSewa_id = $request->id;
        $biayaSewa = KebayaBiayaSewa::where('id_kebaya_biaya_sewa', $biayaSewa_id)->where('fk_partner_id', $user->id)->first();
        $package_id = $biayaSewa->fk_package_id;
        $biayaSewa->delete();

        return redirect()->intended(route('kebaya-package.show', ['package_id' => $package_id]));
    }
}
