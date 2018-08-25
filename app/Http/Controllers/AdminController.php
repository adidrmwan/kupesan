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
class AdminController extends Controller
{
    public function dashboard()
    {
        $booking = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('booking_status', 'paid')->get();
        $booking_confirmed = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('booking_status', 'confirmed')->get();
        $total_partner = Partner::count();
        $total_user = User::join('role_user', 'role_user.user_id', '=', 'users.id')->where('role_user.role_id', '=', '2')->count();
        $total_booking_paid = Booking::where('booking_status', 'paid')->count();
        $total_booking_confirmed = Booking::where('booking_status', 'confirmed')->count();
        $total_booking = Booking::count();
        return view('superadmin.dashboard', ['booking' => $booking, 'booking_confirmed' => $booking_confirmed], compact('total_user', 'total_partner', 'total_booking', 'total_booking_paid', 'total_booking_confirmed'));
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
