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
class BookingController extends Controller
{
    public function checkAuth(Request $request) {
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
        return view('pesan.pesan', ['package' => $package, 'partner' => $partner, 'jam_mulai' => $jam_mulai, 'jam_selesai' => $jam_selesai, 'pid' => $pid, 'prc' => $prc, 'pname' => $pname]);

    }
    public function checkAuth1(Request $request)
    {
        $package_id = $request->id;
        if(Auth::check()) {
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
            return view('pesan.pesan', ['package' => $package, 'partner' => $partner, 'jam_mulai' => $jam_mulai, 'jam_selesai' => $jam_selesai, 'pid' => $pid, 'prc' => $prc, 'pname' => $pname]);
        } else {
            return redirect()->intended(route('login'));
        }
    }

    public function showBooking(Request $request)
    {
        $booking = new Booking();
        $booking->user_id = Auth::user()->id;
        $booking->package_id = $request->input('pid');
        $booking->partner_name = $request->input('pname');
        $booking->booking_price = $request->input('prc');
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
        $review = Booking::where('booking_id', $bid)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, ((booking_end_time - booking_start_time) * booking_price) as total'))
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
        $booking->bukti_transafer = $booking->booking_date . '_' . $booking->booking_id . '_' . $booking->user_id. '_' . $booking->booking_total;
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
        redirect()->intended(route('partner.profile.form'));
    }


    public function voucher()
    {
        return view('payment.voucher');
    }
}
