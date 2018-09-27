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
use Mail;
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
        $package2 = KebayaProduct::find($package_id);

        $partner = Partner::where('user_id', $package2->partner_id)->first();
        $partner_id = $partner->user_id;

        if (Auth::user()) {
            return redirect()->intended(route('kebaya.step2', ['package_id' => $package_id]));
        }

        return view('online-booking.kebaya.step1', ['package' => $package, 'pid' => $package_id, 'partner_id' => $partner_id], compact('package', 'partner'));
 
    }

    public function step2(Request $request) {

        $package_id = $request->package_id;

        $package = KebayaProduct::where('id', $package_id)->get();
        $package2 = KebayaProduct::find($package_id);

        $partner = Partner::where('user_id', $package2->partner_id)->first();
        $partner_id = $partner->user_id;

        $pu = KebayaUkuran::where('package_id', $package_id)->get();

        $booking_check = KebayaCheck::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking_check.package_id')->where('kebaya_booking_check.package_id', $package_id)->where('kebaya_booking_check.kuantitas', '=', $package2->quantity)->select('booking_date as disableDates')->get();
        $disableDates = array_column($booking_check->toArray(), 'disableDates');

        if(empty($request->booking_date)) {
            return view('online-booking.kebaya.step2', compact('package','package_id','partner_id','partner', 'pu', 'disableDates'));
        }
 
    }

    public function submitStep2(Request $request)
    {
    	$package_id = $request->package_id;
        $sdate = explode('/', $request->start_date, 3); $sm = $sdate[0]; $sd = $sdate[1]; $sy = $sdate[2];
        $booking_start_date = $sy.'-'.$sm.'-'.$sd;
        $time = '00:00:00';
        $start_date = date('Y-m-d H:i:s', strtotime("$booking_start_date $time"));
        
        $package = KebayaProduct::where('id', $package_id)->first();
        $partner = Partner::where('user_id', $package->partner_id)->first();
        $partner_id = $partner->user_id;
        // $partner_open_hour = $partner->open_hour;
        // $partner_close_hour = $partner->close_hour;

        // $mytime = Carbon::now();
        // $waktu = $mytime->toDateTimeString();        
        // $waktu_array = explode(' ', $waktu);
        // $now_date = $waktu_array[0];
        // $now_time = $waktu_array[1];
        // $time_array = explode(':', $now_time);
        // $on_click_lanjut_time = $time_array[0];
        
        // if($on_click_lanjut_time >= $partner_close_hour || $on_click_lanjut_time < $partner_open_hour) {
        //     return redirect()->route('kebaya.step2', ['package_id' => $package_id])->with('warning',"Silahkan memesan pada saat");
        // }

        $cek_booking_sdate = KebayaCheck::where('package_id', $package_id)->where('booking_date', $sdate)->first();

        if(empty($cek_booking_sdate)) {

                $booking = new KebayaBooking();
                $booking->user_id = Auth::user()->id;
                $booking->package_id = $package_id;
                $booking->partner_id = $package->partner_id;
                $booking->start_date = $start_date;
                $booking->booking_status = 'cek_ketersediaan_online';
                $booking->save();

                $booking_id = $booking->booking_id;
                $durasi_sewa = '3';
                $end_date = $booking->start_date->addDays($durasi_sewa-1);
                $edate = date('Y-m-d', strtotime("$end_date"));
                $edate = explode('-', $edate, 3); $ey = $edate[0]; $em = $edate[1]; $ed = $edate[2];
                $endtime = '23:59:59';
                $isi_edate = $ey . '-' . $em . '-' . $ed;
                $end_date = date('Y-m-d H:i:s', strtotime("$isi_edate $endtime"));
                $booking->end_date = $end_date;
                $booking->save();

                for ($i=0; $i < $durasi_sewa; $i++) { 
                    $booking_date = $booking->start_date->addDays($i);
                    if (empty($kebaya_booking_check_2)) {
                        $booking_check = new KebayaCheck();
                        $booking_check->package_id = $package_id;
                        $booking_check->booking_date = $booking_date;
                        $booking_check->save();
                    }
                }
                // if($sm == $em && $sd <= $ed) {
                //     for ($i=1; $i <= 31 ; $i++) { 
                //         if($i >= $sd && $i <= $ed ){
                //             $new_date = $sy.'-'.$sm.'-'.$i;
                //             $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                //             $kebaya_booking_check_2 = KebayaCheck::where('package_id', $package_id)->where('booking_date', $booking_date)->first();
                //             if (empty($kebaya_booking_check_2)) {
                //                 $booking_check = new KebayaCheck();
                //                 $booking_check->package_id = $package_id;
                //                 $booking_check->booking_date = $booking_date;
                //                 $booking_check->save();
                //             }
                //         }
                //     }
                    
                // } elseif ($sm < $em) {
                //     for ($i=1; $i <=31 ; $i++) { 
                //         if($i >= $sd) {
                //             $new_date = $sy.'-'.$sm.'-'.$i;
                //             $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                //             $kebaya_booking_check_2 = KebayaCheck::where('package_id', $package_id)->where('booking_date', $booking_date)->first();
                //             if (empty($kebaya_booking_check_2)) {
                //                 $booking_check = new KebayaCheck();
                //                 $booking_check->package_id = $package_id;
                //                 $booking_check->booking_date = $booking_date;
                //                 $booking_check->save();
                //             }
                //         }
                //         elseif ($i <= $ed) {
                //             $new_date = $sy.'-'.$em.'-'.$i;
                //             $booking_date = date('Y-m-d H:i:s', strtotime("$new_date $time"));
                //             $kebaya_booking_check_2 = KebayaCheck::where('package_id', $package_id)->where('booking_date', $booking_date)->first();
                //             if (empty($kebaya_booking_check_2)) {
                //                 $booking_check = new KebayaCheck();
                //                 $booking_check->package_id = $package_id;
                //                 $booking_check->booking_date = $booking_date;
                //                 $booking_check->save();
                //             }
                //         }
                //     }
                // }

            
            return redirect()->intended(route('kebaya.step3', ['bid' => $booking_id]));

        } else {
            return redirect()->intended(route('kebaya.step2', ['package_id' => $package_id])); 
        } 
    }

    public function step3(Request $request)
    {
        $booking = KebayaBooking::find($request->bid);

        $package = KebayaProduct::where('id', $booking->package_id)->get();
        $package2 = KebayaProduct::where('id', $booking->package_id)->first();

        $partner = Partner::where('user_id', $package2->partner_id)->first();
        $partner_id = $package2->partner_id;
        $package_id = $package2->id;
        $booking_id = $booking->booking_id;

        $pu = KebayaUkuran::where('partner_id', $package2->partner_id)->get();

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
            return redirect()->route('kebaya.step2', ['package_id' => $package_id])->with('warning', 'Stok kebaya sudah tidak tersedia.');
        }

        return view('online-booking.kebaya.step3', ['partner' => $partner], compact('quantity2', 'partner_id', 'package_id', 'package', 'booking', 'booking_id', 'pu'));    

    }

    public function submitStep3(Request $request)
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
        $total = $package2->price * $quantity;
        $deposit = $package2->deposit;
        
        $max_quantity = $package2->quantity;

        $kebaya_booking_check = KebayaCheck::where('package_id', $package_id)->whereBetween('booking_date', [$booking_start_date, $booking_end_date])->get();

        if(empty($booking->user_name)) {

            foreach ($kebaya_booking_check as $key => $value) {
                if (($quantity + $value->kuantitas) <= $max_quantity) {
                    $booking_check = KebayaCheck::find($value->id);
                    $booking_check->kuantitas = $booking_check->kuantitas + $quantity;
                    $booking_check->save();
                } else {
                    return redirect()->route('kebaya.step2', ['package_id' => $package_id])->with('warning', 'Stok kebaya sudah tidak tersedia.');
                }

            }

            $booking->user_name = $user_name;
            $booking->user_nohp = $user_nohp;
            $booking->user_email = $user_email;
            $booking->quantity = $quantity;
            $booking->booking_price = $package2->price;
            $booking->booking_total = $total;
            $booking->deposit = $deposit;
            $booking->partner_name = $package2->partner_name;
            $booking->alamat = $request->alamat;
            $booking->save();

        }

        $detail_pesanan = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                            ->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')
                            ->where('booking_id', $request->booking_id)
                            ->select('kebaya_category.category_name', 'kebaya_product.*', 'kebaya_booking.*', 'kebaya_booking.quantity as kuantitas')
                            ->get();


        $partner = Partner::where('user_id', $package2->partner_id)->first();

        return view('online-booking.kebaya.step4', ['partner' => $partner], compact('package_id', 'package', 'booking', 'booking_id', 'detail_pesanan')); 
    }

    public function submitStep4(Request $request)
    {
        
        $booking = KebayaBooking::find($request->booking_id);
        $partner = Partner::where('user_id', $booking->partner_id)->first();
        $package = KebayaProduct::where('id', $booking->package_id)->get();
        $booking->booking_status = 'un_approved';
        $booking->save();
        $book = KebayaBooking::where('booking_id', $booking->booking_id)->select('booking_id')->first()->toArray();
        $user = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                ->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')
                ->join('partner', 'kebaya_booking.partner_id', '=', 'partner.user_id')
                ->join('users', 'users.id', '=', 'partner.user_id')
                ->select('kebaya_category.category_name', 'kebaya_product.*', 'kebaya_booking.*', 'kebaya_booking.quantity as kuantitas', 'partner.pr_name', 'users.email', 'users.id',  'users.first_name', 'users.last_name')
                ->where('kebaya_booking.booking_id', $booking->booking_id)->first()->toArray();

        $user['link'] = str_random(35);

        DB::table('booking_activations_kebaya')->insert(['id_user'=>$user['id'], 'booking_id'=>$book['booking_id'], 'token'=>$user['link']]);

        Mail::send('emails.kebaya-booking-notification', $user, function($message) use ($user){
          $message->to($user['email']);
          $message->subject('Kupesan.id - Booking Notification');
        });

        return view('online-booking.kebaya.step5', compact('partner', 'package'));
    }

    public function step6(Request $request)
    {
        if (Auth::check()) {
            $booking = KebayaBooking::find($request->bid);

            $bid = $booking->booking_id;

            $package = KebayaProduct::where('id', $booking->package_id)->get();
            // $partner = Partner::where('user_id', $package2->partner_id)->first();

            $review = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                ->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')
                ->select('kebaya_category.category_name', 'kebaya_product.*', 'kebaya_booking.*', 'kebaya_booking.quantity as kuantitas')
                ->where('booking_id', $bid)->get();

            return view('online-booking.kebaya.step6', compact('bid', 'review', 'package','partner'));
        }

        return redirect()->route('index');
    }

    public function step7(Request $request)
    {   
        $mytime = Carbon::now();
        $waktu = $mytime->toDateTimeString();        

        $bid = $request->bid;
        $booking = KebayaBooking::find($request->bid);

        if(empty($booking->booking_at)) {
            $booking_at = date("Y-m-d H:i:s", strtotime("+1 hours"));
            $booking->booking_at = $booking_at;
            $booking->save();
        }
        
        if($waktu >= $booking->booking_at) {
            $booking->booking_status = 'booking-failed';
            $booking->save();
            return view('online-booking.kebaya.failed');
        }

        $booking->booking_status = 'on_pembayaran';
        $booking->save();
        $deadline = $booking->booking_at;

        $review = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                ->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')
                ->select('kebaya_category.category_name', 'kebaya_product.*', 'kebaya_booking.*', 'kebaya_booking.quantity as kuantitas')
                ->where('booking_id', $bid)->get();

        return view('online-booking.kebaya.step7', compact('review', 'bid', 'deadline'));
    }

    public function step8(Request $request)
    {   
        $bid = $request->bid;

        return view('online-booking.kebaya.step8', compact('bid'));
    }

    public function uploadBukti(Request $request)
    {   
        $bid = $request->bid;
        $booking = KebayaBooking::find($bid);
        $booking->bukti_transfer = 'Kebaya_' . $booking->booking_date . '_' . $booking->booking_id . '_' . $booking->user_id. '_' . $booking->booking_total;
        $booking->booking_status = 'paid';
        $booking->save();

        if ($request->hasFile('bukti_pembayaran')) {
            //Found existing file then delete
            $foto_new = $booking->bukti_transfer;
            if( File::exists(public_path('/bukti_pembayaran/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/bukti_pembayaran/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/bukti_pembayaran/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/bukti_pembayaran/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/bukti_pembayaran/' . $foto_new .'.png' ))){
                File::delete(public_path('/bukti_pembayaran/' . $foto_new .'.png' ));
            }

            $foto = $request->file('bukti_pembayaran');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/bukti_pembayaran/' . $foto_name ) );
            $booking = KebayaBooking::find($bid);
            $booking->save();
        }

        
        return redirect()->intended(route('kebaya.step9', ['bid' => $bid])); 
    }

    public function step9(Request $request)
    { 
        $bid = $request->bid;
        $review = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('booking_id', $bid)->get();

        return view('online-booking.kebaya.step9', ['review' => $review]);
    }

}
