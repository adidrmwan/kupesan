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
class BookingController extends Controller
{
    public function step1(Request $request) {

        $package_id = $request->package_id;

        $package = PSPkg::where('id', $package_id)->get();
        $id = PSPkg::where('id', $package_id)->first();

        $partner = Partner::where('user_id', $id->user_id)->first();
        $provinsi = Provinces::where('id', $partner->pr_prov)->first();
        $kota = Regencies::where('id', $partner->pr_kota)->first();
        $kecamatan = Districts::where('id', $partner->pr_kec)->first();
        $fasilitas = DB::table('facilities_partner')->where('user_id', $partner->user_id)->select('*')->first();

        if (Auth::user()) {
            return redirect()->intended(route('check.auth', ['package_id' => $package_id]));
        }

        return view('online-booking.fotostudio.step1', ['package' => $package, 'pid' => $package_id, 'partner_id' => $partner->user_id], compact('package', 'partner', 'provinsi', 'kota', 'kecamatan', 'fasilitas'));
 
    }

    public function step2(Request $request) {

        $package_id = $request->package_id;

        $package = PSPkg::where('id', $package_id)->get();
        $id = PSPkg::where('id', $package_id)->first();

        $partner = Partner::where('user_id', $id->user_id)->first();
        $provinsi = Provinces::where('id', $partner->pr_prov)->first();
        $kota = Regencies::where('id', $partner->pr_kota)->first();
        $kecamatan = Districts::where('id', $partner->pr_kec)->first();
        $fasilitas = DB::table('facilities_partner')->where('user_id', $partner->user_id)->select('*')->first();

        if(empty($request->booking_date)) {
            return view('online-booking.fotostudio.step2', ['package' => $package, 'pid' => $package_id, 'partner_id' => $partner->user_id], compact('partner', 'provinsi', 'kota', 'kecamatan', 'fasilitas'));
        }
 
    }

    public function step3(Request $request)
    {   
        $partner_id = $request->partner_id;
        $package_id = $request->pid;

        $package = PSPkg::where('id', $package_id)->get();
        $id = PSPkg::where('id', $package_id)->first();
        $partner = Partner::where('user_id', $id->user_id)->first();
        $provinsi = Provinces::where('id', $partner->pr_prov)->first();
        $kota = Regencies::where('id', $partner->pr_kota)->first();
        $kecamatan = Districts::where('id', $partner->pr_kec)->first();
        $fasilitas = DB::table('facilities_partner')->where('user_id', $partner->user_id)->select('*')->first();
        $durasi = PartnerDurasi::where('package_id', $package_id)->get();
        $booking_date = $request->booking_date;

        $bookingcheck = BookingCheck::where('package_id', $package_id)->where('booking_date', $booking_date)->first();
        
        if(empty($bookingcheck)) {

            $bookingcheck = new BookingCheck();
            $bookingcheck->package_id = $package_id;
            $bookingcheck->booking_date = $booking_date;
            $bookingcheck->save();
        }

        $open = $partner->open_hour;
        $close = $partner->close_hour;

        $mytime = Carbon::now();
        $waktu = $mytime->toDateTimeString();        
        $waktu2 = explode(' ', $waktu);
        $now_date = $waktu2[0];
        $now_time = $waktu2[1];
        $time_array = explode(':', $now_time);
        $now_time = $time_array[0] + 6;

        $jam_mulai = DB::table('jam')->where('num_hour', '>=', $partner->open_hour)
                        ->where('num_hour', '<', $partner->close_hour)->get();

        $jam_selesai = DB::table('jam')->where('num_hour', '>', $partner->open_hour)
                        ->where('num_hour', '<=', $partner->close_hour)->get();
        $date_flag = 'not_same_date';
        if($booking_date == $now_date) {
            $date_flag = 'same_date';
        }
        if($now_time <= $open) {
            $time_flag = 'less';
        } elseif ($now_time > $open) {
            $time_flag = 'more';
        }

        
        return view('online-booking.fotostudio.step3', ['package' => $package, 'jam_mulai' => $jam_mulai, 'jam_selesai' => $jam_selesai, 'bookingcheck' => $bookingcheck,'pid' => $package_id], compact('provinces', 'booking_date', 'open', 'close', 'partner_id', 'partner', 'provinsi', 'kota', 'kecamatan', 'fasilitas', 'durasi', 'package_id', 'date_flag', 'time_flag', 'now_time'));

    }
    public function step4(Request $request)
    {   

        $paket = explode(',', $request->durasi_paket, 3);
        $durasi = $paket[0];
        $package_id = $paket[1];
        $date = $paket[2];

        $booking_overtime = $request->jam_tambahan;
        $jam_tambahan = $booking_overtime[0];

        $package = PSPkg::where('id', $package_id)->get();
        $package_list = PSPkg::where('id', $package_id)->first();
        
        $mulai = explode(',', $request->jam_mulai, 4);
        if ($mulai < 10) {
            $jam_mulai = '0'.$mulai[0].':00:00';
        } elseif ($mulai >= 10) {
            $jam_mulai = $mulai[0].':00:00';
        }
        $booking_start_time = $mulai[0];
        $booking_start_date = date('Y-m-d H:i:s', strtotime("$date $jam_mulai"));
        
        $selesai = explode(',', $request->jam_selesai, 5);
        if ($selesai < 10) {
            $jam_selesai = '0'.$selesai[0].':00:00';
        } elseif ($mulai >= 10) {
            $jam_selesai = $selesai[0].':00:00';
        }
        $booking_end_time = $selesai[0];
        $booking_end_date = date('Y-m-d H:i:s', strtotime("$date $jam_selesai"));
        $booking_selesai_jam = $booking_end_time + $jam_tambahan - 1;

        // now Date
        $mytime = Carbon::now();
        $waktu = $mytime->toDateTimeString();        
        $waktu2 = explode(' ', $waktu);
        $now_date = $waktu2[0];
        $now_time = $waktu2[1];
        $time_array = explode(':', $now_time);
        $now_time = $time_array[0] + 5;

        // end now Date


        $range_jam = DB::select('select num_hour from jam where num_hour BETWEEN :booking_start_time and :booking_selesai_jam', ['booking_start_time' => $booking_start_time, 'booking_selesai_jam' => $booking_selesai_jam]);
        $notavailable = '0';

        $id = PSPkg::where('id', $package_id)->first();
        $partner = Partner::where('user_id', $id->user_id)->first();
        $provinsi = Provinces::where('id', $partner->pr_prov)->first();
        $kota = Regencies::where('id', $partner->pr_kota)->first();
        $kecamatan = Districts::where('id', $partner->pr_kec)->first();
        $fasilitas = DB::table('facilities_partner')->where('user_id', $partner->user_id)->select('*')->first();
        
        // cek tanggal dan jam jika hari yang di pesan = now date
        if ($date == $now_date && $booking_start_time < $now_time) {
            dd($now_date);
            return view('online-booking.fotostudio.step2', ['package' => $package, 'pid' => $package_id, 'partner_id' => $partner->user_id], compact('partner', 'provinsi', 'kota', 'kecamatan', 'fasilitas'));# code...
        }
        
        // cek ketersediaan tanggal dan jam dari database
        $bookingcheck = BookingCheck::where('package_id', $package_id)->where('booking_date', $date)->first();
        $bookingcheck2 = Booking::where('booking_start_time', $booking_start_time)->where('booking_end_time', $booking_end_time)->where('booking_start_date', $booking_start_date)->where('booking_end_date', $booking_end_date)->where('package_id', $package_id)->first();

        if (empty($bookingcheck2)) {
            if (!empty($bookingcheck)) {
                foreach ($range_jam as $key => $value) {
                    if ($value->num_hour == '1' && $bookingcheck->num_hour_1 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '2' && $bookingcheck->num_hour_2 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '3' && $bookingcheck->num_hour_3 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '4' && $bookingcheck->num_hour_4 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '5' && $bookingcheck->num_hour_5 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '6' && $bookingcheck->num_hour_6 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '7' && $bookingcheck->num_hour_7 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '8' && $bookingcheck->num_hour_8 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '9' && $bookingcheck->num_hour_9 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '10' && $bookingcheck->num_hour_10 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '11' && $bookingcheck->num_hour_11 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '12' && $bookingcheck->num_hour_12 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '13' && $bookingcheck->num_hour_13 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '14' && $bookingcheck->num_hour_14 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '15' && $bookingcheck->num_hour_15 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '16' && $bookingcheck->num_hour_16 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '17' && $bookingcheck->num_hour_17 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '18' && $bookingcheck->num_hour_18 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '19' && $bookingcheck->num_hour_19 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '20' && $bookingcheck->num_hour_20 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '21' && $bookingcheck->num_hour_21 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '22' && $bookingcheck->num_hour_22 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '23' && $bookingcheck->num_hour_23 == '1') { $notavailable = '1';}
                    if ($value->num_hour == '24' && $bookingcheck->num_hour_24 == '1') { $notavailable = '1';}
                }
                if($notavailable == '1'){

                    return view('online-booking.fotostudio.step2', ['package' => $package, 'pid' => $package_id, 'partner_id' => $partner->user_id], compact('partner', 'provinsi', 'kota', 'kecamatan', 'fasilitas'));
                }
            }
            $booking = new Booking();
            $booking->user_id = Auth::user()->id;
            $booking->package_id = $package_id;
            $booking->partner_name = $package_list->partner_name;
            $booking->booking_start_date = $booking_start_date;
            $booking->booking_end_date = $booking_end_date;
            $booking->booking_start_time = $booking_start_time;
            $booking->booking_end_time = $booking_end_time;
            $booking->booking_overtime = $jam_tambahan;
            $booking->booking_normal_price = $package_list->pkg_price_them;
            $booking->booking_overtime_price = $package_list->pkg_overtime_them;
            $booking->booking_capacities = $request->input('booking_capacities');
            $booking->booking_status = 'on_booking';
            $booking->booking_user_name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $booking->booking_user_nohp = Auth::user()->phone_number;
            $booking->booking_user_email = Auth::user()->email;
            $booking->booking_at = $waktu;
            $booking->booking_status = 'un_approved';
            $booking->save();
            $bid = $booking->booking_id;
        } else {
            $bid = $bookingcheck2->booking_id;
        }

        $range_jam2 = DB::select('select j.num_hour, b.p_id, b.b_date from jam j, (select package_id as p_id, booking_start_date as b_date,  booking_start_time as mulai, (booking_end_time + booking_overtime - 1) as selesai from booking where booking_id = :id ) b where j.num_hour BETWEEN b.mulai and b.selesai', ['id' => $bid]);

        foreach ($range_jam2 as $value) {
            $b_date = $value->b_date;
            $booking_start_date = date('Y-m-d', strtotime("$b_date"));
            $bookingcheck = BookingCheck::where('package_id', $value->p_id)->where('booking_date', $booking_start_date)->first();
            if(!empty($bookingcheck)) {
                if ($value->num_hour == '1') { $bookingcheck->num_hour_1 = '1';}
                if ($value->num_hour == '2') { $bookingcheck->num_hour_2 = '1';}
                if ($value->num_hour == '3') { $bookingcheck->num_hour_3 = '1';}
                if ($value->num_hour == '4') { $bookingcheck->num_hour_4 = '1';}
                if ($value->num_hour == '5') { $bookingcheck->num_hour_5 = '1';}
                if ($value->num_hour == '6') { $bookingcheck->num_hour_6 = '1';}
                if ($value->num_hour == '7') { $bookingcheck->num_hour_7 = '1';}
                if ($value->num_hour == '8') { $bookingcheck->num_hour_8 = '1';}
                if ($value->num_hour == '9') { $bookingcheck->num_hour_9 = '1';}
                if ($value->num_hour == '10') { $bookingcheck->num_hour_10 = '1';}    
                if ($value->num_hour == '11') { $bookingcheck->num_hour_11 = '1';}
                if ($value->num_hour == '12') { $bookingcheck->num_hour_12 = '1';}
                if ($value->num_hour == '13') { $bookingcheck->num_hour_13 = '1';}
                if ($value->num_hour == '14') { $bookingcheck->num_hour_14 = '1';}
                if ($value->num_hour == '15') { $bookingcheck->num_hour_15 = '1';}
                if ($value->num_hour == '16') { $bookingcheck->num_hour_16 = '1';}
                if ($value->num_hour == '17') { $bookingcheck->num_hour_17 = '1';}
                if ($value->num_hour == '18') { $bookingcheck->num_hour_18 = '1';}
                if ($value->num_hour == '19') { $bookingcheck->num_hour_19 = '1';}
                if ($value->num_hour == '20') { $bookingcheck->num_hour_20 = '1';}    
                if ($value->num_hour == '21') { $bookingcheck->num_hour_21 = '1';}
                if ($value->num_hour == '22') { $bookingcheck->num_hour_22 = '1';}
                if ($value->num_hour == '23') { $bookingcheck->num_hour_23 = '1';}
                if ($value->num_hour == '24') { $bookingcheck->num_hour_24 = '1';} 
                $bookingcheck->save();
            }
        }
        $booking2 = Booking::find($bid);
        if (empty($booking2->bid)) {
            $review = Booking::where('booking_id', $bid)
                        ->join('ps_package','booking.package_id','=', 'ps_package.id')
                        ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, ps_package.pkg_img_them, (((booking_end_time - booking_start_time) * booking_normal_price) ) as total_normal, ((booking_overtime * booking_overtime_price) ) as total_overtime'))
                        ->first();
            $booking2->booking_total = $review->total_overtime + $review->total_normal;
            $booking2->save();
        }

        return view('online-booking.fotostudio.step4', compact('bid', 'partner', 'provinsi', 'kota', 'kecamatan', 'fasilitas', 'package'));
    }

    public function showReview(Request $request)
    {
        $booking = Booking::find($request->bid);

        $booking->save();
        $bid = $booking->booking_id;

        $range_jam = DB::select('select j.num_hour, b.p_id, b.b_date from jam j, (select package_id as p_id, booking_start_date as b_date,  booking_start_time as mulai, (booking_end_time + booking_overtime - 1) as selesai from booking where booking_id = :id ) b where j.num_hour BETWEEN b.mulai and b.selesai', ['id' => $bid]);

        foreach ($range_jam as $value) {
            $b_date = $value->b_date;
            $booking_start_date = date('Y-m-d', strtotime("$b_date"));
            $bookingcheck = BookingCheck::where('package_id', $value->p_id)->where('booking_date', $booking_start_date)->first();
            if (empty($bookingcheck)){
                $bookingcheck = new BookingCheck();
                $bookingcheck->package_id = $value->p_id;
                $bookingcheck->booking_date = $value->b_date;
                $bookingcheck->save();
            }
            if(!empty($bookingcheck)) {
                if ($value->num_hour == '1') { $bookingcheck->num_hour_1 = '1';}
                if ($value->num_hour == '2') { $bookingcheck->num_hour_2 = '1';}
                if ($value->num_hour == '3') { $bookingcheck->num_hour_3 = '1';}
                if ($value->num_hour == '4') { $bookingcheck->num_hour_4 = '1';}
                if ($value->num_hour == '5') { $bookingcheck->num_hour_5 = '1';}
                if ($value->num_hour == '6') { $bookingcheck->num_hour_6 = '1';}
                if ($value->num_hour == '7') { $bookingcheck->num_hour_7 = '1';}
                if ($value->num_hour == '8') { $bookingcheck->num_hour_8 = '1';}
                if ($value->num_hour == '9') { $bookingcheck->num_hour_9 = '1';}
                if ($value->num_hour == '10') { $bookingcheck->num_hour_10 = '1';}    
                if ($value->num_hour == '11') { $bookingcheck->num_hour_11 = '1';}
                if ($value->num_hour == '12') { $bookingcheck->num_hour_12 = '1';}
                if ($value->num_hour == '13') { $bookingcheck->num_hour_13 = '1';}
                if ($value->num_hour == '14') { $bookingcheck->num_hour_14 = '1';}
                if ($value->num_hour == '15') { $bookingcheck->num_hour_15 = '1';}
                if ($value->num_hour == '16') { $bookingcheck->num_hour_16 = '1';}
                if ($value->num_hour == '17') { $bookingcheck->num_hour_17 = '1';}
                if ($value->num_hour == '18') { $bookingcheck->num_hour_18 = '1';}
                if ($value->num_hour == '19') { $bookingcheck->num_hour_19 = '1';}
                if ($value->num_hour == '20') { $bookingcheck->num_hour_20 = '1';}    
                if ($value->num_hour == '21') { $bookingcheck->num_hour_21 = '1';}
                if ($value->num_hour == '22') { $bookingcheck->num_hour_22 = '1';}
                if ($value->num_hour == '23') { $bookingcheck->num_hour_23 = '1';}
                if ($value->num_hour == '24') { $bookingcheck->num_hour_24 = '1';} 
                $bookingcheck->save();
            }
        }
        $review = Booking::where('booking_id', $bid)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, ps_package.pkg_img_them, (((booking_end_time - booking_start_time) * booking_normal_price) ) as total_normal, ((booking_overtime * booking_overtime_price) ) as total_overtime'))
                    ->get();
        return view('payment.review', ['bid' => $bid, 'review' => $review]);
    }
    public function showBayar(Request $request)
    {   
        $bid = $request->bid;
        $booking = Booking::find($request->bid);
        if(empty($booking->booking_at)) {
            $booking_at = date("Y-m-d H:i:s", strtotime("+1 hours"));
            $booking->booking_at = $booking_at;
        }
        
        $booking->booking_status = 'on_pembayaran';
        $booking->save();
        $deadline = $booking->booking_at;

        $review = Booking::where('booking_id', $bid)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, ps_package.pkg_img_them, (((booking_end_time - booking_start_time) * booking_normal_price) ) as total_normal, ((booking_overtime * booking_overtime_price) ) as total_overtime'))
                    ->get();


        return view('payment.bayar', compact('review', 'bid', 'deadline'));
    }
    public function showKonfirmasi(Request $request)
    {   
        $bid = $request->bid;

        return view('payment.upload-bukti', compact('bid'));
    }

    public function uploadBukti(Request $request)
    {   
        $bid = $request->bid;
        $booking = Booking::find($bid);
        $booking->bukti_transfer = $booking->booking_date . '_' . $booking->booking_id . '_' . $booking->user_id. '_' . $booking->booking_total;
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
            $booking = Booking::find($bid);
            $booking->save();
        }

        
        return redirect()->intended(route('voucher', ['bid' => $bid])); 
    }


    public function voucher(Request $request)
    { 
        $review = Booking::where('booking_id', $request->bid)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->join('partner', 'partner.user_id', '=', 'ps_package.user_id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, ps_package.pkg_img_them, partner.pr_name'))
                    ->get();
        return view('payment.voucher', ['review' => $review]);
    }

    public function orderCompleted(Request $request)
    { 
        $booking = Booking::where('booking_id', $request->booking_id)->first();
        $booking->booking_status = 'completed';
        $booking->save();
        return redirect()->intended(route('booking.schedule')); 
    }

    public function regencies(){
      $package_id = Input::get('pack_id');
      $id = PSPkg::where('id', $package_id)->first();
      $partner = Partner::where('user_id', $id->user_id)
                 ->select('pr_name', 'open_hour', 'close_hour')->first();
      $durasi = Input::get('durasi');

      $regencies = Jam::where('num_hour', '>=', $partner->open_hour)
                   ->where('num_hour', '<=', $partner->close_hour - $durasi)->get();
      return response()->json($regencies);
    }

    public function districts(){
      $jam_mulai = Input::get('jam_mulai');
      $durasi = Input::get('durasi2');
      $districts = Jam::where('num_hour', '=' , $jam_mulai + $durasi)->get();
      return response()->json($districts);
    }

    public function villages(){
      $jam_selesai = Input::get('jam_selesai');
      $jam_mulai = Input::get('jam_mulai');
      $package_id = Input::get('pack_id');
      $durasi = Input::get('durasi2');
      $date = Input::get('date');
      $mulai = $jam_mulai;
      $selesai = $jam_selesai;
      $package = PSPkg::where('id', $package_id)->first();
      $partner = Partner::where('user_id', $package->user_id)->first();
      $close_hour = $partner->close_hour;
      $bookingcheck = BookingCheck::where('package_id', $package_id)->where('booking_date', $date)->first();
      
      if ($jam_mulai == '1' && empty($bookingcheck->num_hour_1)){ $jam_mulai = 'available'; }
      elseif ($jam_mulai == '1' && $bookingcheck->num_hour_1 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '2' && empty($bookingcheck->num_hour_2)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '2' && $bookingcheck->num_hour_2 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '3' && empty($bookingcheck->num_hour_3)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '3' && $bookingcheck->num_hour_3 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '4' && empty($bookingcheck->num_hour_4)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '4' && $bookingcheck->num_hour_4 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '5' && empty($bookingcheck->num_hour_5)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '5' && $bookingcheck->num_hour_5 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '6' && empty($bookingcheck->num_hour_6)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '6' && $bookingcheck->num_hour_6 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '7' && empty($bookingcheck->num_hour_7)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '7' && $bookingcheck->num_hour_7 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '8' && empty($bookingcheck->num_hour_8)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '8' && $bookingcheck->num_hour_8 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '9' && empty($bookingcheck->num_hour_9)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '9' && $bookingcheck->num_hour_9 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '10' && empty($bookingcheck->num_hour_10)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '10' && $bookingcheck->num_hour_10 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '11' && empty($bookingcheck->num_hour_11)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '11' && $bookingcheck->num_hour_11 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '12' && empty($bookingcheck->num_hour_12)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '12' && $bookingcheck->num_hour_12 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '13' && empty($bookingcheck->num_hour_13)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '13' && $bookingcheck->num_hour_13 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '14' && empty($bookingcheck->num_hour_14)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '14' && $bookingcheck->num_hour_14 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '15' && empty($bookingcheck->num_hour_15)) { $jam_mulai = 'available'; }
      elseif ($jam_mulai == '15' && $bookingcheck->num_hour_15 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '16' && empty($bookingcheck->num_hour_16)) { $jam_mulai = 'available';}
      elseif ($jam_mulai == '16' && $bookingcheck->num_hour_16 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '17' && empty($bookingcheck->num_hour_17)) { $jam_mulai = 'available';}
      elseif ($jam_mulai == '17' && $bookingcheck->num_hour_17 == '1') { $jam_mulai = 'not'; }
      if ($jam_mulai == '18' && empty($bookingcheck->num_hour_18)) { $jam_mulai = 'available';}
      elseif ($jam_mulai == '18' && $bookingcheck->num_hour_18 == '1') { $jam_mulai = 'not';}
      if ($jam_mulai == '19' && empty($bookingcheck->num_hour_19)) { $jam_mulai = 'available';}
      elseif ($jam_mulai == '19' && $bookingcheck->num_hour_19 == '1') { $jam_mulai = 'not';}
      if ($jam_mulai == '20' && empty($bookingcheck->num_hour_20)) { $jam_mulai = 'available';}
      elseif ($jam_mulai == '20' && $bookingcheck->num_hour_20 == '1') { $jam_mulai = 'not';}
      if ($jam_mulai == '21' && empty($bookingcheck->num_hour_21)) { $jam_mulai = 'available';}
      elseif ($jam_mulai == '21' && $bookingcheck->num_hour_21 == '1') { $jam_mulai = 'not';}
      if ($jam_mulai == '22' && empty($bookingcheck->num_hour_22)) { $jam_mulai = 'available';}
      elseif ($jam_mulai == '22' && $bookingcheck->num_hour_22 == '1') { $jam_mulai = 'not';}
      if ($jam_mulai == '23' && empty($bookingcheck->num_hour_23)) { $jam_mulai = 'available';}
      elseif ($jam_mulai == '23' && $bookingcheck->num_hour_23 == '1') { $jam_mulai = 'not';}
      if ($jam_mulai == '24' && empty($bookingcheck->num_hour_24)) { $jam_mulai = 'available';}
      elseif ($jam_mulai == '24' && $bookingcheck->num_hour_24 == '1') { $jam_mulai = 'not';}

      if ($jam_selesai == '1' && empty($bookingcheck->num_hour_1)){ $jam_selesai = 'available'; }
      elseif ($jam_selesai == '1' && $bookingcheck->num_hour_1 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '2' && empty($bookingcheck->num_hour_2)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '2' && $bookingcheck->num_hour_2 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '3' && empty($bookingcheck->num_hour_3)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '3' && $bookingcheck->num_hour_3 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '4' && empty($bookingcheck->num_hour_4)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '4' && $bookingcheck->num_hour_4 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '5' && empty($bookingcheck->num_hour_5)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '5' && $bookingcheck->num_hour_5 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '6' && empty($bookingcheck->num_hour_6)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '6' && $bookingcheck->num_hour_6 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '7' && empty($bookingcheck->num_hour_7)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '7' && $bookingcheck->num_hour_7 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '8' && empty($bookingcheck->num_hour_8)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '8' && $bookingcheck->num_hour_8 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '9' && empty($bookingcheck->num_hour_9)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '9' && $bookingcheck->num_hour_9 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '10' && empty($bookingcheck->num_hour_10)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '10' && $bookingcheck->num_hour_10 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '11' && empty($bookingcheck->num_hour_11)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '11' && $bookingcheck->num_hour_11 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '12' && empty($bookingcheck->num_hour_12)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '12' && $bookingcheck->num_hour_12 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '13' && empty($bookingcheck->num_hour_13)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '13' && $bookingcheck->num_hour_13 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '14' && empty($bookingcheck->num_hour_14)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '14' && $bookingcheck->num_hour_14 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '15' && empty($bookingcheck->num_hour_15)) { $jam_selesai = 'available'; }
      elseif ($jam_selesai == '15' && $bookingcheck->num_hour_15 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '16' && empty($bookingcheck->num_hour_16)) { $jam_selesai = 'available';}
      elseif ($jam_selesai == '16' && $bookingcheck->num_hour_16 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '17' && empty($bookingcheck->num_hour_17)) { $jam_selesai = 'available';}
      elseif ($jam_selesai == '17' && $bookingcheck->num_hour_17 == '1') { $jam_selesai = 'not'; }
      if ($jam_selesai == '18' && empty($bookingcheck->num_hour_18)) { $jam_selesai = 'available';}
      elseif ($jam_selesai == '18' && $bookingcheck->num_hour_18 == '1') { $jam_selesai = 'not';}
      if ($jam_selesai == '19' && empty($bookingcheck->num_hour_19)) { $jam_selesai = 'available';}
      elseif ($jam_selesai == '19' && $bookingcheck->num_hour_19 == '1') { $jam_selesai = 'not';}
      if ($jam_selesai == '20' && empty($bookingcheck->num_hour_20)) { $jam_selesai = 'available';}
      elseif ($jam_selesai == '20' && $bookingcheck->num_hour_20 == '1') { $jam_selesai = 'not';}
      if ($jam_selesai == '21' && empty($bookingcheck->num_hour_21)) { $jam_selesai = 'available';}
      elseif ($jam_selesai == '21' && $bookingcheck->num_hour_21 == '1') { $jam_selesai = 'not';}
      if ($jam_selesai == '22' && empty($bookingcheck->num_hour_22)) { $jam_selesai = 'available';}
      elseif ($jam_selesai == '22' && $bookingcheck->num_hour_22 == '1') { $jam_selesai = 'not';}
      if ($jam_selesai == '23' && empty($bookingcheck->num_hour_23)) { $jam_selesai = 'available';}
      elseif ($jam_selesai == '23' && $bookingcheck->num_hour_23 == '1') { $jam_selesai = 'not';}
      if ($jam_selesai == '24' && empty($bookingcheck->num_hour_24)) { $jam_selesai = 'available';}
      elseif ($jam_selesai == '24' && $bookingcheck->num_hour_24 == '1') { $jam_selesai = 'not';}

      $selesai_1 = ($selesai + 1);

      if ($selesai_1 == '1' && empty($bookingcheck->num_hour_1)){ $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '1' && $bookingcheck->num_hour_1 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '2' && empty($bookingcheck->num_hour_2)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '2' && $bookingcheck->num_hour_2 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '3' && empty($bookingcheck->num_hour_3)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '3' && $bookingcheck->num_hour_3 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '4' && empty($bookingcheck->num_hour_4)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '4' && $bookingcheck->num_hour_4 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '5' && empty($bookingcheck->num_hour_5)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '5' && $bookingcheck->num_hour_5 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '6' && empty($bookingcheck->num_hour_6)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '6' && $bookingcheck->num_hour_6 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '7' && empty($bookingcheck->num_hour_7)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '7' && $bookingcheck->num_hour_7 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '8' && empty($bookingcheck->num_hour_8)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '8' && $bookingcheck->num_hour_8 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '9' && empty($bookingcheck->num_hour_9)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '9' && $bookingcheck->num_hour_9 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '10' && empty($bookingcheck->num_hour_10)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '10' && $bookingcheck->num_hour_10 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '11' && empty($bookingcheck->num_hour_11)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '11' && $bookingcheck->num_hour_11 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '12' && empty($bookingcheck->num_hour_12)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '12' && $bookingcheck->num_hour_12 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '13' && empty($bookingcheck->num_hour_13)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '13' && $bookingcheck->num_hour_13 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '14' && empty($bookingcheck->num_hour_14)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '14' && $bookingcheck->num_hour_14 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '15' && empty($bookingcheck->num_hour_15)) { $jam_selesai_1 = 'available'; }
      elseif ($selesai_1 == '15' && $bookingcheck->num_hour_15 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '16' && empty($bookingcheck->num_hour_16)) { $jam_selesai_1 = 'available';}
      elseif ($selesai_1 == '16' && $bookingcheck->num_hour_16 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '17' && empty($bookingcheck->num_hour_17)) { $jam_selesai_1 = 'available';}
      elseif ($selesai_1 == '17' && $bookingcheck->num_hour_17 == '1') { $jam_selesai_1 = 'not'; }
      if ($selesai_1 == '18' && empty($bookingcheck->num_hour_18)) { $jam_selesai_1 = 'available';}
      elseif ($selesai_1 == '18' && $bookingcheck->num_hour_18 == '1') { $jam_selesai_1 = 'not';}
      if ($selesai_1 == '19' && empty($bookingcheck->num_hour_19)) { $jam_selesai_1 = 'available';}
      elseif ($selesai_1 == '19' && $bookingcheck->num_hour_19 == '1') { $jam_selesai_1 = 'not';}
      if ($selesai_1 == '20' && empty($bookingcheck->num_hour_20)) { $jam_selesai_1 = 'available';}
      elseif ($selesai_1 == '20' && $bookingcheck->num_hour_20 == '1') { $jam_selesai_1 = 'not';}
      if ($selesai_1 == '21' && empty($bookingcheck->num_hour_21)) { $jam_selesai_1 = 'available';}
      elseif ($selesai_1 == '21' && $bookingcheck->num_hour_21 == '1') { $jam_selesai_1 = 'not';}
      if ($selesai_1 == '22' && empty($bookingcheck->num_hour_22)) { $jam_selesai_1 = 'available';}
      elseif ($selesai_1 == '22' && $bookingcheck->num_hour_22 == '1') { $jam_selesai_1 = 'not';}
      if ($selesai_1 == '23' && empty($bookingcheck->num_hour_23)) { $jam_selesai_1 = 'available';}
      elseif ($selesai_1 == '23' && $bookingcheck->num_hour_23 == '1') { $jam_selesai_1 = 'not';}
      if ($selesai_1 == '24' && empty($bookingcheck->num_hour_24)) { $jam_selesai_1 = 'available';}
      elseif ($selesai_1 == '24' && $bookingcheck->num_hour_24 == '1') { $jam_selesai_1 = 'not';}

      $selesai_2 = ($selesai + 2);
      if ($selesai_2 == '1' && empty($bookingcheck->num_hour_1)){ $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '1' && $bookingcheck->num_hour_1 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '2' && empty($bookingcheck->num_hour_2)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '2' && $bookingcheck->num_hour_2 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '3' && empty($bookingcheck->num_hour_3)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '3' && $bookingcheck->num_hour_3 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '4' && empty($bookingcheck->num_hour_4)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '4' && $bookingcheck->num_hour_4 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '5' && empty($bookingcheck->num_hour_5)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '5' && $bookingcheck->num_hour_5 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '6' && empty($bookingcheck->num_hour_6)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '6' && $bookingcheck->num_hour_6 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '7' && empty($bookingcheck->num_hour_7)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '7' && $bookingcheck->num_hour_7 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '8' && empty($bookingcheck->num_hour_8)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '8' && $bookingcheck->num_hour_8 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '9' && empty($bookingcheck->num_hour_9)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '9' && $bookingcheck->num_hour_9 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '10' && empty($bookingcheck->num_hour_10)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '10' && $bookingcheck->num_hour_10 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '11' && empty($bookingcheck->num_hour_11)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '11' && $bookingcheck->num_hour_11 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '12' && empty($bookingcheck->num_hour_12)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '12' && $bookingcheck->num_hour_12 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '13' && empty($bookingcheck->num_hour_13)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '13' && $bookingcheck->num_hour_13 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '14' && empty($bookingcheck->num_hour_14)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '14' && $bookingcheck->num_hour_14 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '15' && empty($bookingcheck->num_hour_15)) { $jam_selesai_2 = 'available'; }
      elseif ($selesai_2 == '15' && $bookingcheck->num_hour_15 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '16' && empty($bookingcheck->num_hour_16)) { $jam_selesai_2 = 'available';}
      elseif ($selesai_2 == '16' && $bookingcheck->num_hour_16 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '17' && empty($bookingcheck->num_hour_17)) { $jam_selesai_2 = 'available';}
      elseif ($selesai_2 == '17' && $bookingcheck->num_hour_17 == '1') { $jam_selesai_2 = 'not'; }
      if ($selesai_2 == '18' && empty($bookingcheck->num_hour_18)) { $jam_selesai_2 = 'available';}
      elseif ($selesai_2 == '18' && $bookingcheck->num_hour_18 == '1') { $jam_selesai_2 = 'not';}
      if ($selesai_2 == '19' && empty($bookingcheck->num_hour_19)) { $jam_selesai_2 = 'available';}
      elseif ($selesai_2 == '19' && $bookingcheck->num_hour_19 == '1') { $jam_selesai_2 = 'not';}
      if ($selesai_2 == '20' && empty($bookingcheck->num_hour_20)) { $jam_selesai_2 = 'available';}
      elseif ($selesai_2 == '20' && $bookingcheck->num_hour_20 == '1') { $jam_selesai_2 = 'not';}
      if ($selesai_2 == '21' && empty($bookingcheck->num_hour_21)) { $jam_selesai_2 = 'available';}
      elseif ($selesai_2 == '21' && $bookingcheck->num_hour_21 == '1') { $jam_selesai_2 = 'not';}
      if ($selesai_2 == '22' && empty($bookingcheck->num_hour_22)) { $jam_selesai_2 = 'available';}
      elseif ($selesai_2 == '22' && $bookingcheck->num_hour_22 == '1') { $jam_selesai_2 = 'not';}
      if ($selesai_2 == '23' && empty($bookingcheck->num_hour_23)) { $jam_selesai_2 = 'available';}
      elseif ($selesai_2 == '23' && $bookingcheck->num_hour_23 == '1') { $jam_selesai_2 = 'not';}
      if ($selesai_2 == '24' && empty($bookingcheck->num_hour_24)) { $jam_selesai_2 = 'available';}
      elseif ($selesai_2 == '24' && $bookingcheck->num_hour_24 == '1') { $jam_selesai_2 = 'not';}

      if($close_hour == $selesai || ($jam_mulai == 'available' && $jam_selesai == 'not') || $jam_mulai == 'not' && $jam_selesai == 'not') {
          $villages = "Tidak bisa tambah";
      }
      elseif ($selesai == ($close_hour - 4) || ($jam_mulai == 'available' && $jam_selesai == 'available' && $jam_selesai_1 == 'available' && $jam_selesai_2 == 'available')) {
          $villages = Jam::where('num_hour', '<' , '4')->get();
      }
      elseif ($selesai == ($close_hour - 3) || ($jam_mulai == 'available' && $jam_selesai == 'available' && $jam_selesai_1 == 'available' && $jam_selesai_2 == 'not')) {
          $villages = Jam::where('num_hour', '<' , '3')->get();
      }
      elseif ($selesai == ($close_hour - 2) || ($jam_mulai == 'available' && $jam_selesai == 'available' && $jam_selesai_1 == 'available')) {
          $villages = Jam::where('num_hour', '<' , '2')->get();
      }
      elseif ($selesai == ($close_hour - 1) || ($jam_mulai == 'available' && $jam_selesai == 'available' && $jam_selesai_1 == 'not')) {
          $villages = Jam::where('num_hour', '=' , '1')->get();
      }
      
      return response()->json($villages);
    }

    public function villages2(){
      $jam_selesai = Input::get('jam_selesai');
      $jam_overtime = Input::get('jam_overtime');
      $jam_mulai = Input::get('jam_mulai');
      $districts = $jam_selesai + $jam_overtime;
      return response()->json($districts);
    }

}
