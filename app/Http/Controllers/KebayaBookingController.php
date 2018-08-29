<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\PSPkg;
use Illuminate\Support\Facades\Input;
use App\Jam;
use App\Partner;
use App\PartnerDurasi;
use App\Booking;
use Carbon\Carbon;
use App\BookingCheck;
use File;
use Image;
use App\Provinces;
use App\Regencies;
use App\Districts;
use App\Villages;
use App\KebayaProduct;
use App\KebayaUkuran;
use App\KebayaCheck;
use App\KebayaBooking;
use DateTime;
class KebayaBookingController extends Controller
{
    public function step1(Request $request) {

        $package_id = $request->package_id;

        $package = KebayaProduct::where('id', $package_id)->get();
        $id = KebayaProduct::where('id', $package_id)->first();

        $partner = Partner::where('user_id', $id->partner_id)->first();
        $partner_id = $partner->user_id;
        if (Auth::user()) {
            return redirect()->intended(route('kebaya.step2', ['package_id' => $package_id]));
        }

        return view('online-booking.kebaya.step1', ['package' => $package, 'pid' => $package_id, 'partner_id' => $partner_id], compact('package', 'partner'));
 
    }

    public function step2(Request $request) {

        $package_id = $request->package_id;

        $package = KebayaProduct::where('id', $package_id)->get();
        $id = KebayaProduct::where('id', $package_id)->first();

        $partner = Partner::where('user_id', $id->partner_id)->first();
        $partner_id = $partner->user_id;
        $pu = KebayaUkuran::where('partner_id', $partner_id)->get();

        $booking_check = KebayaCheck::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking_check.package_id')->where('kebaya_booking_check.package_id', $package_id)->where('kebaya_booking_check.kuantitas', '=', $id->quantity)->select('booking_date as disableDates')->get();

  	
        $disableDates = array_column($booking_check->toArray(), 'disableDates');
        if(empty($request->booking_date)) {
            return view('online-booking.kebaya.step2', ['package' => $package, 'package_id' => $package_id, 'partner_id' => $partner_id], compact('partner', 'pu', 'disableDates'));
        }
 
    }

    public function step3(Request $request)
    {
    	$product_id = $request->package_id;

    	$sdate = explode('/', $request->start_date, 3); $sm = $sdate[0]; $sd = $sdate[1]; $sy = $sdate[2];
    	$booking_start_date = $sy.'-'.$sm.'-'.$sd;
    	$edate = explode('/', $request->end_date, 3); $em = $edate[0]; $ed = $edate[1]; $ey = $edate[2];
    	$booking_end_date = $ey.'-'.$em.'-'.$ed;
    	$time = '00:00:00';
        $endtime = '23:59:59';

    	$start_date = date('Y-m-d H:i:s', strtotime("$booking_start_date $time"));
    	$end_date = date('Y-m-d H:i:s', strtotime("$booking_end_date $endtime"));

        $user = Auth::user();
        $package = KebayaProduct::where('id', $product_id)->first();
		$partner = Partner::where('user_id', $package->partner_id)->first();
        $partner_id = $partner->user_id;
        $cek_booking_sdate = KebayaCheck::where('package_id', $product_id)->where('booking_date', $sdate)->first();
        $cek_booking_edate = KebayaCheck::where('package_id', $product_id)->where('booking_date', $edate)->first();

        if(empty($cek_booking_sdate) && empty($cek_booking_edate)) {
            // $kode_booking = str_random(4);

                $booking = new KebayaBooking();
                $booking->user_id = Auth::user()->id;
                $booking->package_id = $product_id;
                $booking->partner_id = $package->partner_id;
                $booking->start_date = $start_date;
                $booking->end_date = $end_date;
                $booking->booking_status = 'cek_ketersediaan_online';
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
                                $booking_check->save();
                            }
                        }
                    }
                }

            
            return redirect()->intended(route('kebaya.step4', ['bid' => $booking_id]));

        } else {
            return redirect()->intended(route('kebaya.off-booking')); 
        } 
    }

    public function step4(Request $request)
    {
        $user = Auth::user();

        $booking = KebayaBooking::find($request->bid);
        $package = KebayaProduct::where('id', $booking->package_id)->get();
        $package2 = KebayaProduct::where('id', $booking->package_id)->first();
        $partner = Partner::where('user_id', $package2->partner_id)->first();
        $partner_id = $package2->partner_id;
        $pu = KebayaUkuran::where('partner_id', $package2->partner_id)->get();

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

        return view('online-booking.kebaya.step3', ['partner' => $partner], compact('quantity2', 'partner_id', 'package_id', 'package', 'booking', 'booking_id', 'pu'));    

    }

    public function step5(Request $request)
    {
        $quantity = $request->quantity;
        $user_name = Auth::user()->first_name.' '.Auth::user()->last_name;
        $user_email = Auth::user()->email;
        $user_nohp = Auth::user()->phone_number;
        
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
        // dd($booking);
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
            $booking->user_name = $user_name;
            $booking->user_nohp = $user_nohp;
            $booking->user_email = $user_email;
            $booking->quantity = $quantity;
            $booking->booking_price = $package2->price;
            $booking->booking_total = $total;
            $booking->partner_name = $package2->partner_name;
            $booking->save();
            $booking->save();
        }
        $detail_pesanan = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('booking_id', $request->booking_id)->get();

        $deposit = '100000';
        $partner = Partner::where('user_id', $package2->partner_id)->first();
        return view('online-booking.kebaya.step4', ['partner' => $partner], compact('package_id', 'package', 'booking', 'booking_id', 'detail_pesanan', 'deposit')); 
    }

    public function step6(Request $request)
    {
        
        $booking = KebayaBooking::find($request->booking_id);
        $partner = Partner::where('user_id', $booking->partner_id)->first();
        $package = KebayaProduct::where('id', $booking->package_id)->get();

        // $booking->deposit = '100000';
        $booking->booking_status = 'un_approved';
        $booking->save();

        return view('online-booking.kebaya.step5', compact('partner', 'package'));
    }
}
