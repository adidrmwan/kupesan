<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\PSPkg;
use App\User;
use App\Partner;
use DB;
use Mail;
use Auth;
use App\Provinces;
use App\Regencies;
use App\Districts;
use App\Villages;
use App\BookingCheck;
class AdminController extends Controller
{
    public function dashboard()
    {
        $booking = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('booking_status', 'on_review')->get();
        $booking_unapprove = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')
                            ->join('partner', 'ps_package.user_id', '=', 'partner.user_id')
                            ->join('users', 'users.id', '=', 'partner.user_id')
                            ->where('booking.booking_status', 'un_approved')
                            ->select('ps_package.*','partner.*','booking.*', 'users.phone_number', 'users.email')
                            ->get();
                            // dd($booking_unreview);
        $booking_unconfirmed = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('booking_status', 'paid')->get();

        $booking_confirmed = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('booking_status', 'confirmed')->get();
        $total_partner = Partner::count();
        $total_user = User::join('role_user', 'role_user.user_id', '=', 'users.id')->where('role_user.role_id', '=', '2')->count();
        $total_booking_paid = Booking::where('booking_status', 'paid')->count();
        $total_booking_confirmed = Booking::where('booking_status', 'confirmed')->count();
        $total_booking = Booking::count();
        return view('superadmin.dashboard', ['booking' => $booking, 'booking_confirmed' => $booking_confirmed], compact('total_user', 'total_partner', 'total_booking', 'total_booking_paid', 'total_booking_confirmed', 'booking_unapprove', 'booking_unconfirmed'));
    }

    public function approveBooking(Request $request)
    {
        // dd($request);
        $booking_id = $request->id;
        $booking = Booking::where('booking_id', $booking_id)->first();
        $book = Booking::where('booking_id', $booking_id)->select('booking_id')->first()->toArray();
        $user = User::where('id', $booking->user_id)->first()->toArray();
        
        $user['link'] = str_random(35);

        DB::table('booking_activations')->insert(['id_user'=>$user['id'], 'booking_id'=>$book['booking_id'], 'token'=>$user['link']]);

        Mail::send('emails.booking-approve', $user, function($message) use ($user){
          $message->to($user['email']);
          $message->subject('Kupesan.id - Booking Approved');
        });

        $booking->booking_status = 'approved';
        $booking->save();

        return redirect()->back();
    }

    public function bookingActivation($token){
      $check = DB::table('booking_activations')->where('token',$token)->first();
      if(!is_null($check)){
        $user = User::find($check->id_user);
        $bid = $check->booking_id;

        if ($user->is_activated == 1){

            return redirect()->route('form.step6', ['bid' => $bid]);
        }

        $user->update(['is_activated' => 1]);

        return redirect()->route('form.step6', ['bid' => $bid]);
      }
      return redirect()->to('home')->with('Warning',"Your token is invalid");
    }

    public function cancelBooking(Request $request)
    {
        // dd($request);
        $booking_id = $request->id;
        $booking = Booking::where('booking_id', $booking_id)->first();
        $book = Booking::where('booking_id', $booking_id)->select('booking_id')->first()->toArray();
        $user = User::where('id', $booking->user_id)->first()->toArray();
        
        Mail::send('emails.booking-cancel', $user, function($message) use ($user){
          $message->to($user['email']);
          $message->subject('Kupesan.id - Booking Tidak Tersedia');
        });
        
        $booking->booking_status = 'canceled';
        $booking->save();

        return redirect()->back();
    }

    public function confirmBukti(Request $request)
    {
    	// dd($request);
    	$booking_id = $request->id;
    	$kode_booking = str_random(7);
        $booking = Booking::where('booking_id', $booking_id)->first();
        $booking->kode_booking = $kode_booking;
        $booking->booking_status = 'confirmed';
        $booking->save();

        return redirect()->back();
    }

    public function cancelBukti(Request $request)
    {
        // dd($request);
        $booking_id = $request->id;
        $booking = Booking::where('booking_id', $booking_id)->first();
        $booking->booking_status = 'paid_unvalid';
        $bid = $booking_id;

        $range_jam2 = DB::select('select j.num_hour, b.p_id, b.b_date from jam j, (select package_id as p_id, booking_start_date as b_date,  booking_start_time as mulai, (booking_end_time + booking_overtime - 1) as selesai from booking where booking_id = :id ) b where j.num_hour BETWEEN b.mulai and b.selesai', ['id' => $bid]);

        foreach ($range_jam2 as $value) {
            $b_date = $value->b_date;
            $booking_start_date = date('Y-m-d', strtotime("$b_date"));
            $bookingcheck = BookingCheck::where('package_id', $value->p_id)->where('booking_date', $booking_start_date)->first();
            if(!empty($bookingcheck)) {
                if ($value->num_hour == '1') { $bookingcheck->num_hour_1 = null;}
                if ($value->num_hour == '2') { $bookingcheck->num_hour_2 = null;}
                if ($value->num_hour == '3') { $bookingcheck->num_hour_3 = null;}
                if ($value->num_hour == '4') { $bookingcheck->num_hour_4 = null;}
                if ($value->num_hour == '5') { $bookingcheck->num_hour_5 = null;}
                if ($value->num_hour == '6') { $bookingcheck->num_hour_6 = null;}
                if ($value->num_hour == '7') { $bookingcheck->num_hour_7 = null;}
                if ($value->num_hour == '8') { $bookingcheck->num_hour_8 = null;}
                if ($value->num_hour == '9') { $bookingcheck->num_hour_9 = null;}
                if ($value->num_hour == '10') { $bookingcheck->num_hour_10 = null;}    
                if ($value->num_hour == '11') { $bookingcheck->num_hour_11 = null;}
                if ($value->num_hour == '12') { $bookingcheck->num_hour_12 = null;}
                if ($value->num_hour == '13') { $bookingcheck->num_hour_13 = null;}
                if ($value->num_hour == '14') { $bookingcheck->num_hour_14 = null;}
                if ($value->num_hour == '15') { $bookingcheck->num_hour_15 = null;}
                if ($value->num_hour == '16') { $bookingcheck->num_hour_16 = null;}
                if ($value->num_hour == '17') { $bookingcheck->num_hour_17 = null;}
                if ($value->num_hour == '18') { $bookingcheck->num_hour_18 = null;}
                if ($value->num_hour == '19') { $bookingcheck->num_hour_19 = null;}
                if ($value->num_hour == '20') { $bookingcheck->num_hour_20 = null;}    
                if ($value->num_hour == '21') { $bookingcheck->num_hour_21 = null;}
                if ($value->num_hour == '22') { $bookingcheck->num_hour_22 = null;}
                if ($value->num_hour == '23') { $bookingcheck->num_hour_23 = null;}
                if ($value->num_hour == '24') { $bookingcheck->num_hour_24 = null;} 
                $bookingcheck->save();
            }
        }

        $booking->save();

        return redirect()->back();
    }

    public function showBukti(Request $request)
    {
        // dd($request);
        $booking_id = $request->id;
        $booking = Booking::where('booking_id', $booking_id)->get();

        return view('superadmin.booking.show-bukti', compact('booking'));
    }

    public function partnerList()
    {
        $partner = Partner::join('partner_type', 'partner_type.id', '=', 'partner.pr_type')->join('users', 'users.id', '=', 'partner.user_id')->where('partner.status', '0')->get();
        $partner_confirmed = Partner::join('partner_type', 'partner_type.id', '=', 'partner.pr_type')->join('users', 'users.id', '=', 'partner.user_id')->where('partner.status', '1')->get();
        // dd($partner);
        $total_fotostudio = Partner::where('pr_type', '1')->count();
        $total_fotografer = Partner::where('pr_type', '2')->count();
        $total_mua = Partner::where('pr_type', '3')->count();
        $total_kebaya = Partner::where('pr_type', '4')->count();
        return view('superadmin.daftarpartner', ['partner' => $partner, 'partner_confirmed' => $partner_confirmed], compact('total_fotostudio', 'total_fotografer', 'total_mua', 'total_kebaya'));
    }

    public function confirmPartner(Request $request)
    {
        $partner_id = $request->id;
        
        $user = User::where('id', $partner_id)->first()->toArray();

        $user['link'] = str_random(30);

        DB::table('partner_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);

        Mail::send('emails.approve', $user, function($message) use ($user){
          $message->to($user['email']);
          $message->subject('Kupesan - Partner Activation Account');
        });

        $partner = Partner::where('user_id', $partner_id)->first();
        $partner->status = '1';
        $partner->save();

        return redirect()->back();
    }

    public function partnerActivation($token){
      $check = DB::table('partner_activations')->where('token',$token)->first();
      if(!is_null($check)){
        $user = User::find($check->id_user);
        if ($user->is_activated ==1){
          return redirect()->to('partner-ku/login')->with('success',"Selamat, profil perusahan Anda telah berhasil kami tinjau.");

        }
        $user->update(['is_activated' => 1]);
        DB::table('user_activations')->where('token',$token)->delete();
        return redirect()->to('partner-ku/login')->with('success',"Account active successfully, please enter your e-mail and password to Log-In.");
      }
      return redirect()->to('login')->with('Warning',"Your token is invalid");
    }

    public function cancelPartner(Request $request)
    {
        // dd($request);
        $partner_id = $request->id;
        
        $user = User::where('id', $partner_id)->first()->toArray();

        Mail::send('emails.cancel-partner', $user, function($message) use ($user){
          $message->to($user['email']);
          $message->subject('Kupesan - Partner Cancellation Account');
        });

        $partner = Partner::where('user_id', $partner_id)->first();
        $partner->status = '2';
        $partner->save();

        return redirect()->back();
    }

    public function showPartner(Request $request)
    {
        $partner_id = $request->id;
        $partner = Partner::join('users', 'users.id', '=', 'partner.user_id')->where('partner.user_id', $partner_id)->get();
        $partner1 = Partner::join('users', 'users.id', '=', 'partner.user_id')->where('partner.user_id', $partner_id)->first();
        foreach ($partner as $key => $value) {
            $type = DB::table('partner_type')->where('id', $value->pr_type)->get();
        }
        $provinsi = Provinces::where('id', $partner1->pr_prov)->first();
        $kota = Regencies::where('id', $partner1->pr_kota)->first();
        $kecamatan = Districts::where('id', $partner1->pr_kec)->first();
        return view('superadmin.partner.application-form', compact('partner', 'type', 'provinsi', 'kota', 'kecamatan'));
    }
}
