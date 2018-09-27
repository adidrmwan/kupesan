<?php

namespace App\Http\Controllers;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FasilitasPartner;
use App\PartnerDurasi;
use App\KebayaUkuran;
use App\BookingCheck;
use App\Fasilitas;
use App\Provinces;
use App\Regencies;
use App\Districts;
use App\Villages;
use App\Booking;
use App\Partner;
use App\PSPkg;
use App\Jam;
use App\User;
use Carbon\Carbon;
use Image;
Use Alert;
use Auth;
use File;
use App\Tnc;

class PartnerController extends Controller
{
    public function dashboard()
    {
    	$user = Auth::user();
    	$partner = DB::table('partner')
    				->where('user_id',$user->id)
    				->select('*')
    				->first();
        $fasilitas = FasilitasPartner::where('user_id',$user->id)->first();

        if (empty($partner->pr_name)) {
            return redirect()->intended(route('partner.profile.form'));
        }
        // fotostudio
        if ($partner->pr_type == '1') {
            
            if (empty($fasilitas->facilities_id)) {
                return redirect()->intended(route('partner.facilities.form'));
            }
            elseif (!empty($fasilitas->facilities_id)) {
               return view('partner.home', ['partner' => $partner]);
            }
        }
        // kebaya
        if ($partner->pr_type == '4') {
            return view('partner.home', ['partner' => $partner]);
        }


        return view('partner.home', ['partner' => $partner]);
    }

    public function showDetailMitra()
    {

        $user = Auth::user();
        $email = $user->email;
        $provinces = Provinces::where('name', 'JAWA TIMUR')->get();
        $phone_number = $user->phone_number;
        $type = DB::table('partner_type')->select('*')->get();
        $jam = Jam::all();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        return view('partner.form.detail-mitra', ['partner' => $partner, 'email' => $email, 'type' => $type, 'phone_number' => $phone_number],compact('provinces', 'jam') );          
    }

    public function submitDetailMitra(Request $request)
    {
        $user = Auth::user();
        $partner = Partner::where('user_id', $user->id)->first();
        $partner->pr_name = $request->input('pr_name');
        $partner->pr_owner_name = $request->input('pr_owner_name');
        $partner->pr_type = $request->input('pr_type');
        $partner->open_hour = $request->input('open_hour');
        $partner->close_hour = $request->input('close_hour');
        $partner->pr_desc = $request->input('pr_desc');
        $partner->pr_prov = $request->input('pr_prov');
        $partner->pr_kota = $request->input('pr_kota');
        $partner->pr_kec = $request->input('pr_kec');
        $partner->pr_kel = $request->input('pr_kel');
        $partner->pr_postal_code = $request->input('pr_postal_code');
        $partner->pr_addr = $request->input('pr_addr');
        $user->phone_number = $request->input('pr_phone');
        $partner->pr_phone2 = $request->input('pr_phone2');
        $partner->status = '0';
        $partner->save();
        

        $partner = Partner::where('user_id', $user->id)->first();
        $created_date = date('Y_m_d_H_i', strtotime("$partner->created_at"));
        $partner->pr_phone = $user->phone_number;
        $partner->ktp = $created_date . '_' . $partner->pr_type . '_' . $partner->pr_name . '_KTP';
        $partner->bangunan = $created_date . '_' . $partner->pr_type . '_' . $partner->pr_name . '_Toko'; 
        $partner->save();
        
        if ($request->hasFile('ktp')) {
            $foto_new = $partner->ktp;
            if( File::exists(public_path('/partner_ktp/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/partner_ktp/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/partner_ktp/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/partner_ktp/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/partner_ktp/' . $foto_new .'.png' ))){
                File::delete(public_path('/partner_ktp/' . $foto_new .'.png' ));
            }
            $foto = $request->file('ktp');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/partner_ktp/' . $foto_name ) );
        $partner = Partner::where('user_id', $user->id)->first();
            $partner->save();
        }

        if ($request->hasFile('bangunan')) {
            $foto_new = $partner->bangunan;
            if( File::exists(public_path('/partner_ktp/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/partner_ktp/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/partner_ktp/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/partner_ktp/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/partner_ktp/' . $foto_new .'.png' ))){
                File::delete(public_path('/partner_ktp/' . $foto_new .'.png' ));
            }
            $foto = $request->file('bangunan');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/partner_ktp/' . $foto_name ) );
        $partner = Partner::where('user_id', $user->id)->first();
            $partner->save();
        }

        return redirect()->intended(route('partner.dashboard')); 
    }

    public function showFormFacilities()
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        return view('partner.form.fasilitas', ['partner' => $partner]);          
    }

    public function submitFormFacilities(Request $request)
    {
        $user = Auth::user();
        $fasilitas = FasilitasPartner::where('user_id', $user->id)->first();
        $fasilitas->toilet = $request->input('toilet');
        $fasilitas->wifi = $request->input('wifi');
        $fasilitas->rganti = $request->input('rganti');
        $fasilitas->ac = $request->input('ac');
        $fasilitas->parkir = $request->input('parkir');
        $fasilitas->facilities_id = '1';
        $fasilitas->save();
        return redirect()->intended(route('partner.dashboard')); 
    }

    public function showStep1()
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        if ($partner->status == '0') {
            return view('partner.home', ['partner' => $partner]);
        }
        $package_carte = PSPkg::where('user_id', $partner->user_id)->where('pkg_category_them', 'A La Carte')->get();
        $package_package = PSPkg::where('user_id', $partner->user_id)->where('pkg_category_them', 'Special Package')->get();
        $package_studio = PSPkg::where('user_id', $partner->user_id)->where('pkg_category_them', 'Special Studio')->get();

        return view('partner.ps.booking.step1', ['partner' => $partner], compact('package_carte', 'package_studio', 'package_package'));        
        
    }

    public function showStep2(Request $request)
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        if ($partner->status == '0') {
            return view('partner.home', ['partner' => $partner]);
        }
        $package_id = $request->package_id;
        $package = PSPkg::where('id', $package_id)->get();
        $durasiPaket = PartnerDurasi::where('package_id', $package_id)->get();

        return view('partner.ps.booking.step2', ['partner' => $partner], compact('package', 'package_id', 'durasiPaket'));        
        
    }

    public function submitStep2(Request $request)
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        if ($partner->status == '0') {
            return view('partner.home', ['partner' => $partner]);
        }
        $package_id = $request->package_id;
        $package = PSPkg::where('id', $package_id)->get();
        $durasiPaket = PartnerDurasi::where('package_id', $package_id)->get();

        $open = $partner->open_hour;
        $close = $partner->close_hour;
        $jam_mulai = DB::table('jam')->where('num_hour', '>=', $partner->open_hour)
                    ->where('num_hour', '<', $partner->close_hour)->get();
        $jam_selesai = DB::table('jam')->where('num_hour', '>', $partner->open_hour)
                    ->where('num_hour', '<=', $partner->close_hour)->get();
        $booking_date = $request->booking_date;


        $bookingcheck = BookingCheck::where('package_id', $package_id)->where('booking_date', $booking_date)->first();

        if(empty($bookingcheck)) {
            $bookingcheck = new BookingCheck();
            $bookingcheck->package_id = $package_id;
            $bookingcheck->booking_date = $booking_date;
            $bookingcheck->save();
        }

        $durasi = PartnerDurasi::where('package_id', $package_id)->get();

        return view('partner.ps.booking.step3', ['partner' => $partner], compact('package', 'package_id', 'jam_mulai', 'jam_selesai', 'booking_date', 'open', 'close', 'bookingcheck', 'durasi', 'durasiPaket'));    
    }

    public function submitStep3(Request $request)
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $open = $partner->open_hour;
        $close = $partner->close_hour;
        $jam_mulai = DB::table('jam')->where('num_hour', '>=', $partner->open_hour)
                    ->where('num_hour', '<', $partner->close_hour)->get();
        $jam_selesai = DB::table('jam')->where('num_hour', '>', $partner->open_hour)
                    ->where('num_hour', '<=', $partner->close_hour)->get();
          
        if ($partner->status == '0') {
            return view('partner.home', ['partner' => $partner]);
        }

        $paket = explode(',', $request->durasi_paket, 4);
        $durasi2 = $paket[0];
        $package_id = $request->package_id;
        $booking_date = $paket[2];
        $harga_paket = $paket[3];

        $booking_overtime = $request->jam_tambahan;
        if(empty($booking_overtime)) {
            $jam_tambahan = '0'; 
        } else {
            $jam_tambahan = $booking_overtime[0];
        }

        // dd($jam_tambahan);

        $durasi = PartnerDurasi::where('package_id', $package_id)->get();
        $package = PSPkg::where('id', $package_id)->get();

        $mulai = explode(',', $request->jam_mulai, 4);
        if ($mulai < 10) {
            $jam_mulai = '0'.$mulai[0].':00:00';
        } elseif ($mulai >= 10) {
            $jam_mulai = $mulai[0].':00:00';
        }
        $booking_start_time = $mulai[0];
        $booking_start_date = date('Y-m-d H:i:s', strtotime("$booking_date $jam_mulai"));
        
        $selesai = $booking_start_time + $durasi2;
        if ($selesai < 10) {
            $jam_selesai = '0'.$selesai.':00:00';
        } elseif ($mulai >= 10) {
            $jam_selesai = $selesai.':00:00';
        }
        $booking_end_time = $selesai;
        $booking_end_date = date('Y-m-d H:i:s', strtotime("$booking_date $jam_selesai"));
        $packageI = PSPkg::where('id', $package_id)->first();
        $booking_selesai_jam = $booking_end_time + $jam_tambahan - 1;

        $bookingcheck = BookingCheck::where('package_id', $package_id)->where('booking_date', $booking_date)->first();

        $range_jam = DB::select('select num_hour from jam where num_hour BETWEEN :booking_start_time and :booking_selesai_jam', ['booking_start_time' => $booking_start_time, 'booking_selesai_jam' => $booking_selesai_jam]);

        $notavailable = '0';

        if(empty($bookingcheck)) {
            $bookingcheck = new BookingCheck();
            $bookingcheck->package_id = $package_id;
            $bookingcheck->booking_date = $booking_date;
            $bookingcheck->save();
        }
        elseif (!empty($bookingcheck)) {
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
                return view('partner.ps.booking.step3', ['partner' => $partner], compact('package', 'package_id', 'jam_mulai', 'jam_selesai', 'booking_date', 'open', 'close', 'bookingcheck', 'durasi'))->with('warning',"Activation link has been sent to your e-mail, please click the link to activate your account."); 
            }
        }
        $bookingcheck2 = Booking::where('booking_start_time', $booking_start_time)->where('booking_end_time', $booking_end_time)->where('booking_start_date', $booking_start_date)->where('booking_end_date', $booking_end_date)->where('package_id', $package_id)->first();
        if (empty($bookingcheck2)) {
            
            $booking = new Booking();
            $booking->user_id = Auth::user()->id;
            $booking->package_id = $package_id;
            $booking->partner_name = $packageI->partner_name;
            $booking->booking_start_date = $booking_start_date;
            $booking->booking_end_date = $booking_end_date;
            $booking->booking_start_time = $booking_start_time;
            $booking->booking_end_time = $booking_end_time;
            $booking->booking_overtime = $jam_tambahan;
            $booking->booking_normal_price = $harga_paket;
            $booking->booking_overtime_price = $packageI->pkg_overtime_them;
            $booking->booking_status = 'on_booking';
            $booking->save();
            $bid = $booking->booking_id;
        }else{

            $bid = $bookingcheck2->booking_id;
        }

        $review = Booking::where('booking_id', $bid)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_img_them, ps_package.pkg_category_them, booking.booking_normal_price as total_normal, ((booking_overtime * booking_overtime_price) ) as total_overtime, (booking_normal_price + (booking_overtime * booking_overtime_price)) as total'))
                    ->get();
        $durasiPaket = PartnerDurasi::where('package_id', $package_id)->get();

        return view('partner.ps.booking.step4', ['partner' => $partner], compact('package', 'package_id', 'bid', 'booking_date', 'review', 'booking_date', 'durasiPaket'));
    }

    public function submitStep4(Request $request)
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        if ($partner->status == '0') {
            return view('partner.home', ['partner' => $partner]);
        }
        

        $bid = $request->bid;
        $booking_date = $request->booking_date;
        $package_id = $request->package_id;
        $package = PSPkg::where('id', $package_id)->get();

        $bookingcheck = BookingCheck::where('package_id', $package_id)->where('booking_date', $booking_date)->first();

        $range_jam = DB::select('select j.num_hour, b.p_id, b.b_date from jam j, (select package_id as p_id, booking_start_date as b_date,  booking_start_time as mulai, (booking_end_time + booking_overtime - 1) as selesai from booking where booking_id = :id ) b where j.num_hour BETWEEN b.mulai and b.selesai', ['id' => $bid]);

        $notavailable = '0';

        if(empty($bookingcheck)) {
            $bookingcheck = new BookingCheck();
            $bookingcheck->package_id = $package_id;
            $bookingcheck->booking_date = $booking_date;
            $bookingcheck->save();
        }
        elseif (!empty($bookingcheck)) {
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
                $open = $partner->open_hour;
                $close = $partner->close_hour;
                $jam_mulai = DB::table('jam')->where('num_hour', '>=', $partner->open_hour)
                            ->where('num_hour', '<', $partner->close_hour)->get();
                $jam_selesai = DB::table('jam')->where('num_hour', '>', $partner->open_hour)
                            ->where('num_hour', '<=', $partner->close_hour)->get();
                $durasi = PartnerDurasi::where('package_id', $package_id)->get();

                return view('partner.ps.booking.step3', ['partner' => $partner], compact('package', 'package_id', 'jam_mulai', 'jam_selesai', 'booking_date', 'open', 'close', 'bookingcheck', 'durasi'))->with('warning',"Activation link has been sent to your e-mail, please click the link to activate your account."); 
            }
        }

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
        $kode_booking = $kode_booking = str_random(7);
        $booking = Booking::find($request->bid);
        $booking->kode_booking = $kode_booking; 
        $booking->booking_user_name = $request->input('booking_user_name');
        $booking->booking_user_nohp = $request->input('booking_user_nohp');
        $booking->booking_user_email = $request->input('booking_user_email');
        $booking->booking_total = $booking->booking_normal_price + ($booking->booking_overtime * $booking->booking_overtime_price);
        $booking->booking_status = 'offline-booking';
        $booking->save();


        return view('partner.ps.booking.step5', ['partner' => $partner], compact('package', 'package_id', 'bid', 'booking_date' ));
    }


    public function submitFormOffline(Request $request)
    {
        return redirect()->intended(route('partner.dashboard')); 
    }

    public function showFormDayOff()
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $jam = Jam::all();
        if ($partner->status == '0') {
            return view('partner.home', ['partner' => $partner]);
        }
        return view('partner.form.dayoff', ['partner' => $partner], compact('jam'));        
        
    }

    public function submitFormDayOff(Request $request)
    {
        $user = Auth::user();
        $date = $request->Tanggal_libur;
        $durasi = $request->durasi_libur;
        $judul = $request->judul;

        if($durasi == 'full_day') {

            $package = PSPkg::where('user_id', $user->id)->get();
            foreach ($package as $key => $value) {

                $bookingcheck = BookingCheck::where('package_id', $package[$key]->id)->where('booking_date', $date)->first();
                if(empty($bookingcheck)) {

                    $bookingcheck = new BookingCheck();
                    $bookingcheck->package_id = $package[$key]->id;
                    $bookingcheck->booking_date = $date;
                    $bookingcheck->save();

                }

                $bookingcheck->num_hour_1 = '1';
                $bookingcheck->num_hour_2 = '1';
                $bookingcheck->num_hour_3 = '1';
                $bookingcheck->num_hour_4 = '1';
                $bookingcheck->num_hour_5 = '1';
                $bookingcheck->num_hour_6 = '1';
                $bookingcheck->num_hour_7 = '1';
                $bookingcheck->num_hour_8 = '1';
                $bookingcheck->num_hour_9 = '1';
                $bookingcheck->num_hour_10 = '1';
                $bookingcheck->num_hour_11 = '1';
                $bookingcheck->num_hour_12 = '1';
                $bookingcheck->num_hour_13 = '1';
                $bookingcheck->num_hour_14 = '1';
                $bookingcheck->num_hour_15 = '1';
                $bookingcheck->num_hour_16 = '1';
                $bookingcheck->num_hour_17 = '1';
                $bookingcheck->num_hour_18 = '1';
                $bookingcheck->num_hour_19 = '1';
                $bookingcheck->num_hour_20 = '1';
                $bookingcheck->num_hour_21 = '1';
                $bookingcheck->num_hour_22 = '1';
                $bookingcheck->num_hour_23 = '1';
                $bookingcheck->num_hour_24 = '1';
                $bookingcheck->save(); 
            } 

            $jam_mulai = '00:00:00';
            $booking_start_date = date('Y-m-d H:i:s', strtotime("$date $jam_mulai"));
            $jam_selesai = '23:59:59';
            $booking_end_date = date('Y-m-d H:i:s', strtotime("$date $jam_selesai"));
            $booking = new Booking();
            $booking->user_id = $user->id;
            $booking->booking_start_date = $booking_start_date;
            $booking->booking_end_date = $booking_end_date;
            $booking->booking_status = 'libur';
            $booking->partner_name = $judul;
            $booking->package_id = '100';
            $booking->save();
            return redirect()->back();
        } elseif ($durasi == '3') {
            
        } elseif ($durasi == '7') {
        
        }
        return redirect()->intended(route('partner.dashboard')); 
    }

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
            $type = DB::table('partner_type')
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

        }
        return view('partner.ps.profile', ['partner' => $partner, 'data' => $partner, 'type' => $type, 'email' => $email, 'jam' => $jam, 'fasilitas' => $fasilitas, 'phone_number' => $phone_number], compact('provinces', 'partner_prov', 'partner_kota', 'partner_kel', 'partner_kec', 'tnc'));
    }

    public function edit(Request $Request)
    {
        $user = Auth::user();
        $partner = Partner::find($user->id);
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->get();
        return view('partner.home', ['partner' => $partner]);
    }

    

    public function submitEditProfile(Request $request)
    {
        $user = Auth::user();
        $partner = Partner::where('user_id', $user->id)->first();
        $partner->pr_owner_name = $request->input('pr_owner_name');
        $partner->pr_addr = $request->input('pr_addr');
        $partner->pr_kel = $request->input('pr_kel');
        $partner->pr_kec = $request->input('pr_kec');
        $partner->pr_area = $request->input('pr_area');
        $partner->pr_postal_code = $request->input('pr_postal_code');
        $partner->pr_desc = $request->input('pr_desc');
        $partner->pr_phone = $request->input('pr_phone');
        $partner->pr_phone2 = $request->input('pr_phone2');
        $partner->open_hour = $request->input('open_hour');
        $partner->close_hour = $request->input('close_hour');
        $partner->save();
        
        $logo = Partner::where('user_id', $user->id)->first();
        $logo->pr_logo = $logo->id . '_' . $logo->pr_type . '_' . $logo->pr_name;
        $logo->save();
        
        if ($request->hasFile('pr_logo')) {
            //Found existing file then delete
            $foto_new = $logo->pr_logo;
            if( File::exists(public_path('/logo/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/logo/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/logo/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/logo/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/logo/' . $foto_new .'.png' ))){
                File::delete(public_path('/logo/' . $foto_new .'.png' ));
            }
            $foto = $request->file('pr_logo');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/logo/' . $foto_name ) );
            $user = Auth::user();
            $logo = Partner::where('user_id', $user->id)->first();
            $logo->save();
        }
        return redirect()->intended(route('partner.profile'));
        
    }

    public function uploadLogo(Request $request)
    {
        $user = Auth::user();

        $logo = Partner::where('user_id', $user->id)->first();
        $logo->pr_logo = $logo->id . '_' . $logo->pr_type . '_' . $logo->pr_name;
        $logo->save();

        if ($request->hasFile('pr_logo')) {
            //Found existing file then delete
            $foto_new = $logo->pr_logo;
            if( File::exists(public_path('/logo/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/logo/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/logo/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/logo/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/logo/' . $foto_new .'.png' ))){
                File::delete(public_path('/logo/' . $foto_new .'.png' ));
            }
            $foto = $request->file('pr_logo');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/logo/' . $foto_name ) );
            $user = Auth::user();
            $logo = Partner::where('user_id', $user->id)->first();
            $logo->save();
        }
        return redirect()->intended(route('partner.profile'));
        
    }

    public function EditPackagePartner($id)
    {
        $partner = PSPkg::find($id);

        return view('partner.ps.edit-package', ['partner' => $partner]);
    }

    public function deletepackagepartner($id)
    {
        $user = Auth::user();
        $partner = DB::table('ps_package')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->get();
        return view('partner.ps.edit-package', ['partner' => $partner]);
    }

    public function showBookingSchedule(Request $request)
    {   
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        if ($partner->status == '0') {
            return view('partner.home', ['partner' => $partner]);
        }

        $title = 'Libur';
        $events = [];
                $data = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('ps_package.user_id', $user->id)->get();
                // dd($data);
                if($data->count()) {
                    foreach ($data as $key => $value) {
                        $judulOff = 'Off | ' . $value->booking_user_name;
                        $judulOn = 'On | ' . $value->booking_user_name;
                        if($value->booking_status == 'confirmed') {
                            $events[] = Calendar::event(
                            $judulOn,
                            false,
                            $value->booking_start_date,
                            $value->booking_end_date,
                            null,
                            // Add color and link on event
                             [
                                 'color' => '#28a745',
                                 'url' => route('detail.booking', ['booking_id' => $value->booking_id]),
                             ]
                            );
                        }elseif($value->booking_status == 'offline-booking') {
                            $events[] = Calendar::event(
                            $judulOff,
                            true,
                            $value->booking_start_date,
                            $value->booking_end_date,
                            null,
                            // Add color and link on event
                             [
                                 'color' => '#ffc107',
                                 'textColor' => '#000000',
                                 'url' => route('detail.booking', ['booking_id' => $value->booking_id]),
                             ]
                            );
                        }
                        elseif($value->booking_status == 'libur') {
                            $events[] = Calendar::event(
                            $value->partner_name,
                            true,
                            $value->booking_start_date,
                            $value->booking_end_date,
                            null,
                            // Add color and link on event
                             [
                                 'color' => '#dc3545',
                                 'url' => route('detail.booking', ['booking_id' => $value->booking_id]),
                             ]
                            );
                        }
                    }
                }
        $calendar = Calendar::addEvents($events);

        $booking = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('ps_package.user_id', $user->id)->where('booking.booking_status', 'offline-booking')->orWhere('booking.booking_status', 'confirmed')->orderBy('booking.booking_start_date', 'asc')->get();

        return view('partner.ps.booking-schedule', ['partner' => $partner], compact('calendar', 'booking'));
    }

    public function showBookingHistory()
    {   
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        $booking = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('ps_package.user_id', $user->id)->where('booking.booking_status', 'done')->orderBy('booking.booking_start_date', 'asc')->get();
        $booking_cancelled = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('ps_package.user_id', $user->id)->where('booking.booking_status', 'cancelled_by_partner')->orderBy('booking.booking_start_date', 'asc')->get();

        return view('partner.ps.booking-history', ['partner' => $partner, 'booking' => $booking], compact('booking_cancelled'));
    }

    public function showDetailBooking(Request $request)
    {   
        $booking_id = $request->booking_id;
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $package_id = Booking::where('booking_id', $booking_id)->select('package_id')->first();
        $package = PSPkg::where('id', $package_id->package_id)->first();

        $booking = Booking::where('booking_id', $booking_id)->get();
        $package_id->booking_start_date = Carbon::now();

        return view('partner.ps.detail-booking', ['partner' => $partner, 'booking' => $booking, 'package' => $package]);
    }

    public function showJadiMitra()
    {
        return view('partner.jadi-mitra');
    }

    public function bookingFinished(Request $request)
    {
        // dd($request);
        $booking_id = $request->id;
        $booking = Booking::where('booking_id', $booking_id)->first();
        $booking->booking_status = 'done';
        $booking->save();

        return redirect()->back();
    }

    public function bookingCancel(Request $request)
    {
        // dd($request);
        $booking_id = $request->id;
        $booking = Booking::where('booking_id', $booking_id)->first();
        $booking->booking_status = 'cancelled_by_partner';
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

    public function updateTNC(Request $request)
    {
        $user = Auth::user();

        $dataSet = [];
        if ($user) {
            for ($i = 0; $i < count($request->tnc); $i++) {
                $dataSet[] = [
                    'partner_id' => $user->id,
                    'tnc_desc' => $request->tnc[$i],
                ];
            }
        }
        Tnc::insert($dataSet);

        return redirect()->intended(route('partner.profile'));
    }

    public function deleteTNC(Request $request)
    {
        $user = Auth::user();
        $tnc = Tnc::find($request->id);
        $tnc->delete();

        return redirect()->intended(route('partner.profile'));
    }

    public function bookingActivation($token){
      $check = DB::table('booking_activations')->where('token',$token)->first();
      if(!is_null($check)){
        $user = User::find($check->id_user);
        $bid = $check->booking_id;

        if ($user->is_activated == 1){

            return redirect()->route('index');
        }

        $user->update(['is_activated' => 1]);

        return redirect()->route('index');
      }
      return redirect()->to('home')->with('Warning',"Your token is invalid");
    }   

}
