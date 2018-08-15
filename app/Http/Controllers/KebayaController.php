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
use App\Booking;


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
        $package = KebayaProduct::join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('kebaya_product.id', $product_id)->select('kebaya_category.category_name', 'kebaya_product.*')->get();

        $booking_check = KebayaCheck::where('package_id', $product_id)->select('booking_date as disableDates')->get();
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
        // berapa hari
        $day = $ed - $sd + 1;
        $total = ($package->price * $day) * $quantity;
        
        if(empty($cek_booking_sdate) && empty($cek_booking_edate)) {
            $kode_booking = str_random(4);
        	$booking = new KebayaBooking();
        	$booking->user_id = $user->id;
        	$booking->package_id = $product_id;
            $booking->partner_id = $package->partner_id;
        	$booking->user_name = $user_name;
        	$booking->user_nohp = $user_nohp;
        	$booking->user_email = $user_email;
        	$booking->start_date = $start_date;
        	$booking->end_date = $end_date;
        	$booking->quantity = $quantity;
        	$booking->booking_price = $package->price;
            $booking->booking_total = $total;
        	$booking->booking_status = 'offline-booking';
            $booking->save();

            $booking->kode_booking = '4'.$sd.$sm.$kode_booking;
            $booking->save();

        	if($sm == $em && $sd <= $ed) {
		        for ($i=1; $i <= 31 ; $i++) { 
		        	if($i >= $sd && $i <= $ed ){
		        		$new_date = $sy.'-'.$sm.'-'.$i;
		        		$booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
		        		$booking_check = new KebayaCheck();
		        		$booking_check->package_id = $product_id;
		        		$booking_check->booking_date = $booking_date;
		        		$booking_check->save();
		        	}
		        }
	        	
	        } elseif ($sm < $em) {
	        	for ($i=1; $i <=31 ; $i++) { 
	        		if($i >= $sd) {
	        			$new_date = $sy.'-'.$sm.'-'.$i;
		        		$booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
		        		$booking_check = new KebayaCheck();
		        		$booking_check->package_id = $product_id;
		        		$booking_check->booking_date = $booking_date;
		        		$booking_check->save();
	        		}
	        		elseif ($i <= $ed) {
	        			$new_date = $sy.'-'.$em.'-'.$i;
		        		$booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
		        		$booking_check = new KebayaCheck();
		        		$booking_check->package_id = $product_id;
		        		$booking_check->booking_date = $booking_date;
		        		$booking_check->save();
	        		}
	        	}
	        }

        	return redirect()->intended(route('kebaya.schedule')); 
        } else {
            return redirect()->intended(route('kebaya.off-booking')); 
        }

        // $package = KebayaProduct::join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('partner_id', $user->id)->where('status', '1')->select('kebaya_category.category_name', 'kebaya_product.*')->get();

        return view('partner.kebaya.booking.step1', ['partner' => $partner]);    
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
        $data = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')->where('kebaya_booking.partner_id', $user->id)->get();

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
                         'color' => '#ff0000',
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
                         'color' => '#009885',
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

        $booking = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')->where('kebaya_booking.partner_id', $user->id)->where('kebaya_booking.booking_status', 'offline-booking')->orderBy('kebaya_booking.start_date', 'asc')->get();
        
        // if ($request->has('show_id')) {
        //     $booking_show = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('ps_package.user_id', $user->id)->where('booking.booking_id', $request->show_id)->get();
        //     return view('partner.kebaya.booking.schedule', ['partner' => $partner], compact('calendar', 'booking', 'booking_show'));
        // }

        return view('partner.kebaya.booking.schedule', ['partner' => $partner], compact('calendar', 'booking'));
    }

    public function showBookingHistory()
    {   
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        $booking = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')->where('kebaya_booking.partner_id', $user->id)->where('kebaya_booking.booking_status', 'done')->orderBy('kebaya_booking.start_date', 'asc')->get();

        $booking_offline = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')->where('kebaya_booking.partner_id', $user->id)->where('kebaya_booking.booking_status', 'offline-booking-done')->orderBy('kebaya_booking.start_date', 'asc')->get();
        // dd($booking_offline);
        return view('partner.kebaya.booking.history', ['partner' => $partner, 'booking' => $booking], compact('booking_offline'));
    }

    public function bookingCancel(Request $request)
    {
        // dd($request);
        $booking_id = $request->id;
        $booking = KebayaBooking::where('booking_id', $booking_id)->first();
        $dateString = strtotime($booking->start_date);
        $sdate = date('Y-m-d', $dateString);
        dd($sdate);
        $sdate = explode('/', $booking->start_date, 3); $sm = $sdate[0]; $sd = $sdate[1]; $sy = $sdate[2];
        $booking_start_date = $sy.'-'.$sm.'-'.$sd;
        dd($booking_start_date);
        $edate = explode('/', $booking->end_date, 3); $em = $edate[0]; $ed = $edate[1]; $ey = $edate[2];
        $booking_end_date = $ey.'-'.$em.'-'.$ed;
        $time = '00:00:00';

        if($sm == $em && $sd <= $ed) {
            for ($i=1; $i <= 31 ; $i++) { 
                if($i >= $sd && $i <= $ed ){
                    $new_date = $sy.'-'.$sm.'-'.$i;
                    $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                    $booking_check = KebayaCheck::where('package_id', $booking->package_id)->where('booking_date', $booking_date)->first();
                    dd($booking_check);
                }
            }
        } elseif ($sm < $em) {
            for ($i=1; $i <=31 ; $i++) { 
                if($i >= $sd) {
                    $new_date = $sy.'-'.$sm.'-'.$i;
                    $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                    $booking_check = new KebayaCheck();
                    $booking_check->package_id = $product_id;
                    $booking_check->booking_date = $booking_date;
                    $booking_check->save();
                }
                elseif ($i <= $ed) {
                    $new_date = $sy.'-'.$em.'-'.$i;
                    $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                    $booking_check = new KebayaCheck();
                    $booking_check->package_id = $product_id;
                    $booking_check->booking_date = $booking_date;
                    $booking_check->save();
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
}
