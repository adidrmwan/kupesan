<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PSPkg;
use File;
use Image;
use Auth;
use App\Partner;
use App\PartnerTag;
use App\KebayaKategori;
use App\KebayaProduct;
use App\KebayaBooking;
class KebayaController extends Controller
{
    public function showAddItem()
    {
        $listTag = DB::table('ps_tag')->get();
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $kategori = KebayaKategori::all();
        return view('partner.kebaya.item.add', compact('listTag', 'partner', 'kategori'));
    }

    public function addItem(Request $request)
    {
        $user = Auth::user();
        $partner = Partner::where('user_id', $user->id)->first();
        $package = new KebayaProduct();
        $package->partner_id = $partner->user_id;
        $package->partner_name = $partner->pr_name;
        $package->name = $request->input('name');
        $package->category = $request->input('category');
        $package->set = $request->input('set');
        $package->price = $request->input('price');
        $package->quantity = $request->input('quantity');
        $package->size = $request->input('size');
        $package->status = '1';
        $package->save();

        $package = KebayaProduct::find($package->id);
        $package->id = '40'.$package->partner_id.'00'.$package->id;
        $package->image = $package->id . '_' . $package->category . '_' . $package->set . '_' . $package->size;
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
        
        return redirect()->intended(route('list.item'));  
    }

    public function listItem()
    {
        $user = Auth::user();
        $package = KebayaProduct::join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('partner_id', $user->id)->where('status', '1')->select('kebaya_category.category_name', 'kebaya_product.*')->get();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        return view('partner.kebaya.item.list',['partner' => $partner, 'package' => $package]);
    }

    public function deleteItem(Request $request)
    {
        $product_id = $request->product_id;
        $package = KebayaProduct::where('id', $product_id)->first();
        $package->status = '0';
        $package->save();

        return redirect()->back();
    }

    public function showEditItem(Request $request)
    {
        $user = Auth::user();
        $product_id = $request->product_id;
        $package = KebayaProduct::join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('kebaya_product.id', $product_id)->select('kebaya_category.category_name', 'kebaya_category.id as category_id', 'kebaya_product.*')->get();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $kategori = KebayaKategori::get();
        return view('partner.kebaya.item.edit',['partner' => $partner, 'package' => $package, 'kategori' => $kategori]);
    }

    public function editItem(Request $request)
    {
        $user = Auth::user();
        $product_id = $request->product_id;
        $package = KebayaProduct::find($product_id);
        $package->name = $request->input('name');
        $package->category = $request->input('category');
        $package->set = $request->input('set');
        $package->price = $request->input('price');
        $package->quantity = $request->input('quantity');
        $package->size = $request->input('size');
        $package->save();
      	
      	$package = KebayaProduct::find($package->id);
        $package->image = $package->id . '_' . $package->category . '_' . $package->set . '_' . $package->size;
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
        
        return redirect()->intended(route('list.item')); 
    }

    public function showStep1()
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $package = KebayaProduct::join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('partner_id', $user->id)->where('status', '1')->select('kebaya_category.category_name', 'kebaya_product.*')->get();

        return view('partner.kebaya.booking.step1', ['partner' => $partner], compact('package'));    
    }

    public function showStep2(Request $request)
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
    	$product_id = $request->product_id;
        $cek_booking = KebayaBooking::where('package_id', $product_id)->first();
        if(empty($cek_booking)) {
        	return view('partner.kebaya.booking.step2', ['partner' => $partner], compact('product_id'));
        }

        // $package = KebayaProduct::join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('partner_id', $user->id)->where('status', '1')->select('kebaya_category.category_name', 'kebaya_product.*')->get();

        return view('partner.kebaya.booking.step1', ['partner' => $partner]);    
    }

    public function submitStep2(Request $request)
    {
    	dd($request);
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
    	$product_id = $request->product_id;
        $cek_booking = KebayaBooking::where('package_id', $product_id)->first();
        if(empty($cek_booking)) {
        	return view('partner.kebaya.booking.step2', ['partner' => $partner], compact('product_id'));
        }

        // $package = KebayaProduct::join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('partner_id', $user->id)->where('status', '1')->select('kebaya_category.category_name', 'kebaya_product.*')->get();

        return view('partner.kebaya.booking.step1', ['partner' => $partner]);    
    }
}
