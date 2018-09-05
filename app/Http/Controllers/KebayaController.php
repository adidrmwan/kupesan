<?php

namespace App\Http\Controllers;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PSPkg;
use File;
use Image;
use Auth;
use Carbon\Carbon;
use App\Partner;
use App\PartnerTag;
use App\KebayaKategori;
use App\KebayaProduct;
use App\KebayaBooking;
use App\KebayaCheck;
use App\KebayaUkuran;
use App\Booking;
use App\KebayaPartnerTema;
use App\KebayaPartnerWarna;
use DateTime;

class KebayaController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        if ($partner->status == '0') {
            return view('partner.home', ['partner' => $partner]);

        }
        else {
            $tipe = DB::table('partner_type')
                    ->where('partner_type.id', '=', $partner->pr_type)
                    ->first();
            $phone_number = $user->phone_number;
            $jam = Jam::all();
            $provinces = Provinces::where('name', 'JAWA TIMUR')->get();
            $partner_prov = Provinces::where('id', $partner->pr_prov)->first();
            $partner_kota = Regencies::where('id', $partner->pr_kota)->first();
            $partner_kel = Villages::where('id', $partner->pr_kel)->first();
            $partner_kec = Districts::where('id', $partner->pr_kec)->first();
            $email = $user->email;
            $fasilitas = DB::table('facilities_partner')->where('user_id', $user->id)->select('*')->first();
            $tnc = Tnc::where('partner_id', $user->id)->get();
            $partner->pr_type = '1';
            if($partner->pr_type == '4') {
                $partner->pr_type = '4';
                $pu = KebayaUkuran::where('partner_id', $user->id)->get();
            }
            return view('partner.profile', ['partner' => $partner, 'data' => $partner, 'tipe' => $tipe, 'email' => $email, 'jam' => $jam, 'fasilitas' => $fasilitas, 'phone_number' => $phone_number], compact('provinces', 'partner_prov', 'partner_kota', 'partner_kel', 'partner_kec', 'tnc', 'pu'));
        }
    }
    
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
        $package->description = $request->input('description');
        $package->status = '1';
        $package->save();

        $dataSet = [];
        if ($user) {
            for ($i = 0; $i < count($request->tema); $i++) {
                $dataSet[] = [
                    'partner_id' => $user->id,
                    'package_id' => $package->id,
                    'tema' => $request->tema[$i],
                ];
            }
        }
        KebayaPartnerTema::insert($dataSet);

        $dataSet2 = [];
        if ($user) {
            for ($i = 0; $i < count($request->warna); $i++) {
                $dataSet2[] = [
                    'partner_id' => $user->id,
                    'package_id' => $package->id,
                    'warna' => $request->warna[$i],
                ];
            }
        }
        KebayaPartnerWarna::insert($dataSet2);

        $package = KebayaProduct::find($package->id);
        if(empty($package->id)) {
            $package->id = '40'.$package->partner_id.$package->id;
            $package->save();
        }

        $package->image  = $package->id . '_1_' . $package->category . '_' . $package->size;
        $package->image2 = $package->id . '_2_' . $package->category . '_' . $package->size;
        $package->image3 = $package->id . '_3_' . $package->category . '_' . $package->size;
        $package->image4 = $package->id . '_4_' . $package->category . '_' . $package->size;
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
        $package->image = $package->id . '_1_' . $package->category . '_' . $package->set . '_' . $package->size;
        $package->image2 = $package->id . '_2_' . $package->category . '_' . $package->set . '_' . $package->size;
        $package->image3 = $package->id . '_3_' . $package->category . '_' . $package->set . '_' . $package->size;
        $package->image4 = $package->id . '_4_' . $package->category . '_' . $package->set . '_' . $package->size;
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
        $package = KebayaProduct::join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('kebaya_product.id', $product_id)->select('kebaya_category.category_name', 'kebaya_product.*')->get();
        $package2 = KebayaProduct::find($product_id);

        $booking_check = KebayaCheck::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking_check.package_id')->where('kebaya_booking_check.package_id', $product_id)->where('kebaya_booking_check.kuantitas', '=', $package2->quantity)->select('booking_date as disableDates')->get();
  
        $disableDates = array_column($booking_check->toArray(), 'disableDates');

        $package2 = KebayaProduct::where('id', $product_id)->first();
        $quantity2 = $package2->quantity;
        return view('partner.kebaya.booking.step2', ['partner' => $partner], compact('dates', 'package', 'product_id', 'disableDates', 'quantity2'));    
    }

    public function submitStep2(Request $request)
    {
    	$sdate = explode('/', $request->start_date, 3); $sm = $sdate[0]; $sd = $sdate[1]; $sy = $sdate[2];
    	$booking_start_date = $sy.'-'.$sm.'-'.$sd;
    	$edate = explode('/', $request->end_date, 3); $em = $edate[0]; $ed = $edate[1]; $ey = $edate[2];
    	$booking_end_date = $ey.'-'.$em.'-'.$ed;
    	$time = '00:00:00';
        $endtime = '23:59:59';

    	$start_date = date('Y-m-d H:i:s', strtotime("$booking_start_date $time"));
    	$end_date = date('Y-m-d H:i:s', strtotime("$booking_end_date $endtime"));
    	$quantity = $request->quantity;
    	$user_name = $request->user_name;
    	$user_nohp = $request->user_nohp;
    	$user_email = $request->user_email;
    	$product_id = $request->product_id;
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $package = KebayaProduct::where('id', $product_id)->first();
        $cek_booking_sdate = KebayaCheck::where('package_id', $product_id)->where('booking_date', $sdate)->first();
        $cek_booking_edate = KebayaCheck::where('package_id', $product_id)->where('booking_date', $edate)->first();

        
        if(empty($cek_booking_sdate) && empty($cek_booking_edate)) {
            // $kode_booking = str_random(4);

                $booking = new KebayaBooking();
                $booking->user_id = $user->id;
                $booking->package_id = $product_id;
                $booking->partner_id = $package->partner_id;
                $booking->start_date = $start_date;
                $booking->end_date = $end_date;
                $booking->booking_status = 'cek_ketersediaan';
                $booking->booking_price = $package->price;
                $booking->booking_total = $total;
                $booking->save();

                
                $booking_id = $booking->booking_id;

                if($sm == $em && $sd <= $ed) {
                    for ($i=1; $i <= 31 ; $i++) { 
                        if($i >= $sd && $i <= $ed ){
                            $new_date = $sy.'-'.$sm.'-'.$i;
                            $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                            $kebaya_booking_check_2 = KebayaCheck::where('package_id', $product_id)->where('booking_date', $booking_date)->first();
                            if (empty($kebaya_booking_check_2)) {
                                $booking_check = new KebayaCheck();
                                $booking_check->package_id = $product_id;
                                $booking_check->booking_date = $booking_date;
                                // $booking_check->kuantitas = $quantity;
                                $booking_check->save();
                            }
                        }
                    }
                    
                } elseif ($sm < $em) {
                    for ($i=1; $i <=31 ; $i++) { 
                        if($i >= $sd) {
                            $new_date = $sy.'-'.$sm.'-'.$i;
                            $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                            $kebaya_booking_check_2 = KebayaCheck::where('package_id', $product_id)->where('booking_date', $booking_date)->first();
                            if (empty($kebaya_booking_check_2)) {
                                $booking_check = new KebayaCheck();
                                $booking_check->package_id = $product_id;
                                $booking_check->booking_date = $booking_date;
                                $booking_check->kuantitas = $quantity;
                                $booking_check->save();
                            }
                        }
                        elseif ($i <= $ed) {
                            $new_date = $sy.'-'.$em.'-'.$i;
                            $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                            $kebaya_booking_check_2 = KebayaCheck::where('package_id', $product_id)->where('booking_date', $booking_date)->first();
                            if (empty($kebaya_booking_check_2)) {
                                $booking_check = new KebayaCheck();
                                $booking_check->package_id = $product_id;
                                $booking_check->booking_date = $booking_date;
                                $booking_check->kuantitas = $quantity;
                                $booking_check->save();
                            }
                        }
                    }
                }

             
            return redirect()->intended(route('kebaya.off-booking.step3', ['booking_id' => $booking_id]));

        } else {
            return redirect()->intended(route('kebaya.off-booking')); 
        }

        // $package = KebayaProduct::join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('partner_id', $user->id)->where('status', '1')->select('kebaya_category.category_name', 'kebaya_product.*')->get();

        return view('partner.kebaya.booking.step1', ['partner' => $partner]);    
    }

    public function showStep3(Request $request)
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        $booking = KebayaBooking::find($request->booking_id);
        $package = KebayaProduct::where('id', $booking->package_id)->get();
        $package2 = KebayaProduct::where('id', $booking->package_id)->first();
        $package_id = $package2->id;
        $booking_id = $booking->booking_id;
        $booking_start_date = date('Y-m-d', strtotime("$booking->start_date"));
        $booking_end_date = date('Y-m-d', strtotime("$booking->end_date"));

        $kebaya_booking_check = KebayaCheck::where('package_id', $package_id)->whereBetween('booking_date', [$booking_start_date, $booking_end_date])->get(['kuantitas']);

        $kuantitas = '0';
        foreach ($kebaya_booking_check as $key => $value) {
            if ($value->kuantitas > $kuantitas) {
                    $kuantitas = $value->kuantitas;
                }    
        }
        $quantity2 = $package2->quantity - $kuantitas;
        if ($kuantitas == $quantity2) {
            return redirect()->route('kebaya.off-booking')->with('warning', 'Stok kebaya sudah tidak tersedia.');
        }

        return view('partner.kebaya.booking.step3', ['partner' => $partner], compact('quantity2', 'package_id', 'package', 'booking', 'booking_id'));    

    }

    public function submitStep3(Request $request)
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $quantity = $request->quantity;
        $user_name = $request->user_name;
        $user_email = $request->user_email;
        $user_nohp = $request->user_nohp;
        
        $booking = KebayaBooking::find($request->booking_id);
        $package = KebayaProduct::where('id', $booking->package_id)->get();
        $package2 = KebayaProduct::where('id', $booking->package_id)->first();
        $package_id = $package2->id;
        $booking_id = $booking->booking_id;
        $booking_start_date = date('Y-m-d', strtotime("$booking->start_date"));
        $booking_end_date = date('Y-m-d', strtotime("$booking->end_date"));
        
        $fdate = $booking->start_date;
        $tdate = $booking->end_date;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $total = ($package2->price * ($days + 1)) * $quantity;

        $max_quantity = $package2->quantity;
        $kebaya_booking_check = KebayaCheck::where('package_id', $package_id)->whereBetween('booking_date', [$booking_start_date, $booking_end_date])->get();
        if(empty($booking->kode_booking)) {

            foreach ($kebaya_booking_check as $key => $value) {
                if (($quantity + $value->kuantitas) <= $max_quantity) {
                    $booking_check = KebayaCheck::find($value->id);
                    $booking_check->kuantitas = $booking_check->kuantitas + $quantity;
                    $booking_check->save();
                } else {
                    return redirect()->route('kebaya.off-booking')->with('warning', 'Stok kebaya sudah tidak tersedia.');
                }

            }
            $kode_booking = str_random(8);
            $booking->user_name = $user_name;
            $booking->user_nohp = $user_nohp;
            $booking->user_email = $user_email;
            $booking->quantity = $quantity;
            $booking->booking_price = $package2->price;
            $booking->booking_total = $total;
            $booking->partner_name = $package2->partner_name;
            $booking->kode_booking = '4'.$kode_booking;
            $booking->save();
        }
        $detail_pesanan = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('booking_id', $request->booking_id)->get();

        $deposit = '100000';

        return view('partner.kebaya.booking.step4', ['partner' => $partner], compact('quantity2', 'package_id', 'package', 'booking', 'booking_id', 'detail_pesanan', 'deposit')); 
    }

    public function submitStep4(Request $request)
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        
        $booking = KebayaBooking::find($request->booking_id);
        $booking->deposit = '100000';
        $booking->booking_status = 'offline-booking';
        $booking->save();

        return view('partner.kebaya.booking.step5', compact('partner'));
    }

    public function showBookingSchedule(Request $request)
    {   
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        $title = 'Libur';
        $events = [];
        $data = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                    ->where('kebaya_booking.partner_id', $user->id)->get();

        // dd($data);

        if($data->count()) {
            foreach ($data as $key => $value) {
                $title = $value->user_name.' - '.$value->name;
                if($value->booking_status == 'confirmed') {
                    $events[] = Calendar::event(
                    $title,
                    false,
                    $value->start_date,
                    $value->end_date,
                    null,
                    // Add color and link on event
                     [
                         'color' => '#28a745',
                         'url' => route('detail.booking', ['booking_id' => $value->booking_id]),
                     ]
                    );
                }
                elseif($value->booking_status == 'libur') {
                    $events[] = Calendar::event(
                    $title,
                    false,
                    $value->start_date,
                    $value->end_date,
                    null,
                    // Add color and link on event
                     [
                         'color' => '#dc3545',
                         'url' => '#',
                     ]
                    );
                }elseif($value->booking_status == 'offline-booking') {
                    $events[] = Calendar::event(
                    $title,
                    false,
                    $value->start_date,
                    $value->end_date,
                    null,
                    // Add color and link on event
                     [
                         'color' => '#ffc107',
                         'textColor' => '#000000',
                         'url' => '#',
                     ]
                    );
                }
            }
        }
        $calendar = Calendar::addEvents($events);

        $booking = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                    ->where('kebaya_booking.partner_id', $user->id)
                    ->where('kebaya_booking.booking_status', 'offline-booking')
                    ->orwhere('kebaya_booking.booking_status', 'confirmed')
                    ->select('kebaya_booking.*', 'kebaya_product.name', 'kebaya_product.size', 'kebaya_product.set')
                    ->orderBy('kebaya_booking.start_date', 'asc')->get();

        return view('partner.kebaya.booking.schedule', ['partner' => $partner], compact('calendar', 'booking'));
    }

    public function showBookingHistory()
    {   
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        $booking = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                    ->where('kebaya_booking.partner_id', $user->id)
                    ->where('kebaya_booking.booking_status', 'done')
                    ->select('kebaya_booking.*', 'kebaya_product.name', 'kebaya_product.size', 'kebaya_product.set')
                    ->orderBy('kebaya_booking.start_date', 'asc')->get();

        $booking_offline = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                    ->where('kebaya_booking.partner_id', $user->id)
                    ->where('kebaya_booking.booking_status', 'offline-booking-done')
                    ->select('kebaya_booking.*', 'kebaya_product.name', 'kebaya_product.size', 'kebaya_product.set')
                    ->orderBy('kebaya_booking.start_date', 'asc')->get();
        // dd($booking_offline);
        return view('partner.kebaya.booking.history', ['partner' => $partner, 'booking' => $booking], compact('booking_offline'));
    }

    public function bookingCancel(Request $request)
    {
        // dd($request);
        $booking_id = $request->id;
        $booking = KebayaBooking::where('booking_id', $booking_id)->first();
        $dateString_startDate = strtotime($booking->start_date);
        $startDate = date('m/d/Y', $dateString_startDate);
        $sdate = explode('/', $startDate, 3); $sm = $sdate[0]; $sd = $sdate[1]; $sy = $sdate[2];

        $dateString_endDate = strtotime($booking->end_date);
        $endDate = date('m/d/Y', $dateString_endDate);
        $edate = explode('/', $endDate, 3); $em = $edate[0]; $ed = $edate[1]; $ey = $edate[2];
        $booking_end_date = $ey.'-'.$em.'-'.$ed;

        $time = '00:00:00';

        if($sm == $em && $sd <= $ed) {
            for ($i=1; $i <= 31 ; $i++) { 
                if($i >= $sd && $i <= $ed ){
                    $new_date = $sy.'-'.$sm.'-'.$i;
                    $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                    $booking_check = KebayaCheck::where('package_id', $booking->package_id)->where('booking_date', $booking_date)->delete();
                }
            }
        } elseif ($sm < $em) {
            for ($i=1; $i <=31 ; $i++) { 
                if($i >= $sd) {
                    $new_date = $sy.'-'.$sm.'-'.$i;
                    $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                    $booking_check = KebayaCheck::where('package_id', $booking->package_id)->where('booking_date', $booking_date)->delete();
                }
                elseif ($i <= $ed) {
                    $new_date = $sy.'-'.$em.'-'.$i;
                    $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                    $booking_check = KebayaCheck::where('package_id', $booking->package_id)->where('booking_date', $booking_date)->delete();
                }
            }
        }

        $booking->booking_status = 'offline-booking-cancel';
        $booking->save();

        return redirect()->back();
    }

    public function bookingFinished(Request $request)
    {
        // dd($request);
        $booking_id = $request->id;
        $booking = KebayaBooking::where('booking_id', $booking_id)->first();
        $booking->booking_status = 'offline-booking-done';
        $booking->save();

        return redirect()->back();
    }

    public function bookingFinishedOnline(Request $request)
    {
        // dd($request);
        $booking_id = $request->id;
        $booking = KebayaBooking::where('booking_id', $booking_id)->first();
        $booking->booking_status = 'done';
        $booking->save();

        return redirect()->back();
    }


    public function updatePU(Request $request)
    {
        $user = Auth::user();

        $dataSet = [];
        if ($user) {
            for ($i = 0; $i < count($request->ukuran); $i++) {
                $dataSet[] = [
                    'partner_id' => $user->id,
                    'ukuran' => $request->ukuran[$i],
                    'panjang' => $request->panjang[$i],
                    'lebar' => $request->lebar[$i],
                ];
            }
        }
        KebayaUkuran::insert($dataSet);

        return redirect()->intended(route('partner.profile'));
    }

    public function deletePU(Request $request)
    {
        $user = Auth::user();
        $pu = KebayaUkuran::find($request->id);
        $pu->delete();

        return redirect()->intended(route('partner.profile'));
    }
}
