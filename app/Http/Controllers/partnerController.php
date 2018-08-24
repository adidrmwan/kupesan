<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Partner;
use App\Fasilitas;
use App\PSPkg;
use App\Provinces;
use App\Regencies;
use App\Districts;
use App\Villages;
use App\Booking;
use App\Jam;
use App\BookingCheck;
use App\FasilitasPartner;
use File;
use Image;
use Carbon\Carbon;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

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

    public function showFormOffline()
    {

        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        if ($partner->status == '0') {
            return view('partner.home', ['partner' => $partner]);
        }

        return view('partner.form.offline-booking', ['partner' => $partner]);        
        
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
        return view('partner.form.offline-booking', ['partner' => $partner], compact('jam'));        
        
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
        }
        // elseif ($durasi == 'half_day') {
        //     $mulai = $request->jam_mulai_libur;
        //     if ($mulai < 10) {
        //         $jam_mulai = '0'.$mulai.':00:00';
        //     } elseif ($mulai >= 10) {
        //         $jam_mulai = $mulai.':00:00';
        //     }
        //     $booking_start_time = $mulai;
        //     $booking_start_date = date('Y-m-d H:i:s', strtotime("$date $jam_mulai"));
        //     $selesai = $request->jam_selesai_libur;
        //     if ($selesai < 10) {
        //         $jam_selesai = '0'.$selesai.':00:00';
        //     } elseif ($mulai >= 10) {
        //         $jam_selesai = $selesai.':00:00';
        //     }
        //     $booking_end_time = $selesai;
        //     $booking_end_date = date('Y-m-d H:i:s', strtotime("$date $jam_selesai"));
        //     $booking = new Booking();
        //     $booking->user_id = $user->id;
        //     $booking->booking_start_date = $booking_start_date;
        //     $booking->booking_end_date = $booking_end_date;
        //     $booking->booking_status = 'libur';
        //     $booking->partner_name = 'Libur';
        //     $booking->package_id = '100';
        //     $booking->save();
        // }
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

            return view('partner.profile', ['partner' => $partner, 'data' => $partner, 'tipe' => $tipe, 'email' => $email, 'jam' => $jam, 'fasilitas' => $fasilitas, 'phone_number' => $phone_number], compact('provinces', 'partner_prov', 'partner_kota', 'partner_kel', 'partner_kec'));
        }
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
                $data = Booking::where('user_id', $partner->user_id);
                if($data->count()) {
                    foreach ($data as $key => $value) {
                        if($value->booking_status == 'confirmed') {
                            $events[] = Calendar::event(
                            $value->partner_name,
                            false,
                            $value->booking_start_date,
                            $value->booking_end_date,
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
                            $value->partner_name,
                            false,
                            $value->booking_start_date,
                            $value->booking_end_date,
                            null,
                            // Add color and link on event
                             [
                                 'color' => '#009885',
                                 'url' => '#',
                             ]
                            );
                        }
                    }
                }
        $calendar = Calendar::addEvents($events);

        $booking = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('ps_package.user_id', $user->id)->where('booking.booking_status', 'confirmed')->orderBy('booking.booking_start_date', 'asc')->get();
        if ($request->has('show_id')) {
            $booking_show = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('ps_package.user_id', $user->id)->where('booking.booking_id', $request->show_id)->get();
            return view('partner.ps.booking-schedule', ['partner' => $partner], compact('calendar', 'booking', 'booking_show'));
        }
        return view('partner.ps.booking-schedule', ['partner' => $partner], compact('calendar', 'booking'));
    }

    public function showBookingHistory()
    {   
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        $booking = Booking::join('ps_package', 'ps_package.id', '=', 'booking.package_id')->where('booking.user_id', $user->id)->where('booking.booking_status', 'done')->orderBy('booking.booking_start_date', 'asc')->get();
        return view('partner.ps.booking-history', ['partner' => $partner, 'booking' => $booking]);
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
}
