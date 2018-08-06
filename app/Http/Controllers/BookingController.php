<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\PSPkg;
use App\Partner;
use App\Booking;
use Carbon\Carbon;
use App\BookingCheck;
use File;
use Image;
class BookingController extends Controller
{
    public function checkAuth(Request $request) {
        // dd($request);
        $package_id = $request->package_id;
        $package = PSPkg::where('id', $package_id)->get();
        $id = PSPkg::where('id', $package_id)->first();
        $partner = Partner::where('user_id', $id->user_id)
                            ->select('pr_name', 'open_hour', 'close_hour')->first();

        $jam_mulai = DB::table('jam')->where('num_hour', '>=', $partner->open_hour)
                            ->where('num_hour', '<', $partner->close_hour)->get();

        $jam_selesai = DB::table('jam')->where('num_hour', '>', $partner->open_hour)
                            ->where('num_hour', '<=', $partner->close_hour)->get();

        return view('pesan.pesan', ['package' => $package, 'jam_mulai' => $jam_mulai, 'jam_selesai' => $jam_selesai]);
    }
    public function checkAuth2(Request $request) {
        $package_id = $request->id;
        $package = PSPkg::where('id', $package_id)->get();
        $name = PSPkg::where('id', $package_id)->first();

        $partner = Partner::where('user_id', $name->user_id)
                            ->select('pr_name', 'open_hour', 'close_hour')->first();

        $jam_mulai = DB::table('jam')->where('num_hour', '>=', $partner->open_hour)
                            ->where('num_hour', '<', $partner->close_hour)->get();

        $jam_selesai = DB::table('jam')->where('num_hour', '>', $partner->open_hour)
                            ->where('num_hour', '<=', $partner->close_hour)->get();

        $pid = $request->id;
        $prc = $name->pkg_price_them;
        $pname = $partner->pr_name;

        $bookingcheck = BookingCheck::where('package_id', $package_id)->where('booking_date', $bdte)->first();
        // dd($bookingcheck);
        if(empty($bookingcheck)) {
            $bookingcheck = new BookingCheck();
            $bookingcheck->package_id = $package_id;
            $bookingcheck->booking_date = $bdte;
            $bookingcheck->save();
        }
        
        return view('pesan.pesan', ['package' => $package, 'partner' => $partner, 'jam_mulai' => $jam_mulai, 'jam_selesai' => $jam_selesai, 'pid' => $pid, 'prc' => $prc, 'pname' => $pname, 'bdte' => $bdte, 'bookingcheck' => $bookingcheck]);
    }


    public function showBooking(Request $request)
    {
        $booking = new Booking();
        $booking->user_id = Auth::user()->id;
        $booking->package_id = $request->input('pid');
        $booking->partner_name = $request->input('pname');
        $booking->booking_price = $request->input('prc');
        $booking->booking_date = $request->input('bdte');
        $booking->booking_start_time = $request->input('booking_start_time');
        $booking->booking_end_time = $request->input('booking_end_time');
        $booking->booking_capacities = $request->input('booking_capacities');
        $booking->booking_status = 'on_booking';
        $booking->save();
        $bid = $booking->booking_id;

        $review = Booking::where('booking_id', $bid)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, ((booking_end_time - booking_start_time) * booking_price) as total'))
                    ->get();

        $package = PSPkg::where('id', $booking->package_id)->select('pkg_img_them')->get();

        return view('payment.booking', ['bid' => $bid, 'review' => $review, 'package' => $package]);
    }

    public function showReview(Request $request)
    {
        $booking = Booking::find($request->bid);
        $booking->booking_user_name = $request->input('booking_user_name');
        $booking->booking_user_nohp = $request->input('booking_user_nohp');
        $booking->booking_user_email = $request->input('booking_user_email');
        $booking->booking_total = $request->input('xxx');
        $booking->booking_status = 'on_review';
        $booking->save();
        $bid = $booking->booking_id;

        // $cekjam = DB::SELECT('SELECT j.num_hour FROM jam j ,(SELECT booking_id AS id, booking_start_time AS mulai ,booking_end_time AS selesai FROM booking WHERE package_id = $booking->package_id) b WHERE j.num_hour BETWEEN b.mulai AND b.selesai');

        $range_jam = DB::select('select j.num_hour, b.p_id, b.b_date from jam j, (select package_id as p_id, booking_date as b_date,  booking_start_time as mulai, booking_end_time as selesai from booking where booking_id = :id ) b where j.num_hour BETWEEN b.mulai and b.selesai', ['id' => $bid]);

        foreach ($range_jam as $value) {
            $bookingcheck = BookingCheck::where('package_id', $value->p_id)->where('booking_date', $value->b_date)->first();
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
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, ps_package.pkg_img_them, ((booking_end_time - booking_start_time) * booking_price) as total'))
                    ->get();
        return view('payment.review', ['bid' => $bid, 'review' => $review]);
    }
    public function showBayar(Request $request)
    {   
        $booking = Booking::find($request->bid);
        if(empty($booking->booking_at)) {
            $booking_at = date("Y-m-d H:i:s", strtotime("+1 hours"));
            $booking->booking_at = $booking_at;
        }
        
        $booking->booking_status = 'on_pembayaran';
        $booking->save();
        $deadline = $booking->booking_at;

        $review = Booking::where('booking_id', $request->bid)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, ((booking_end_time - booking_start_time) * booking_price) as total'))
                    ->get();
        $bid = $request->bid;


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
            $foto_new = $booking->bukti_transafer;
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
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, ps_package.pkg_img_them, partner.pr_name, ((booking_end_time - booking_start_time) * booking_price) as total'))
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

}
