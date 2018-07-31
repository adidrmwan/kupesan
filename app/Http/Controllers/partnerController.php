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
use App\Booking;
use File;
use Image;
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

        if (empty($partner->pr_name)) {
            return redirect()->intended(route('partner.profile.form'));
        }
        elseif (!empty($partner->pr_name)) {
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
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        return view('partner.form.detail-mitra', ['partner' => $partner, 'email' => $email, 'type' => $type, 'phone_number' => $phone_number],compact('provinces') );        
        
    }

    public function provinces(){
      $provinces = Provinces::all();
      return view('indonesia', compact('provinces'));
    }

    public function regencies(){
      $provinces_id = Input::get('province_id');
      $regencies = Regencies::where('province_id', '=', $provinces_id)->where('name', 'KOTA SURABAYA')->get();
      return response()->json($regencies);
    }

    public function districts(){
      $regencies_id = Input::get('regencies_id');
      $districts = Districts::where('regency_id', '=', $regencies_id)->get();
      return response()->json($districts);
    }

    public function villages(){
      $districts_id = Input::get('districts_id');
      $villages = Villages::where('district_id', '=', $districts_id)->get();
      return response()->json($villages);
    }

    public function submitDetailMitra(Request $request)
    {
        $user = Auth::user();
        $partner = Partner::where('user_id', $user->id)->first();
        $partner->pr_name = $request->input('pr_name');
        $partner->pr_owner_name = $request->input('pr_owner_name');
        $partner->pr_type = $request->input('pr_type');
        $partner->pr_addr = $request->input('pr_addr');
        $partner->pr_prov = $request->input('pr_prov');
        $partner->pr_kota = $request->input('pr_kota');
        $partner->pr_kel = $request->input('pr_kel');
        $partner->pr_kec = $request->input('pr_kec');
        $partner->pr_area = $request->input('pr_area');
        $partner->pr_postal_code = $request->input('pr_postal_code');
        $partner->pr_desc = $request->input('pr_desc');
        $partner->pr_phone = $request->input('pr_phone');
        $partner->pr_phone2 = $request->input('pr_phone2');
        $partner->open_hour = $request->input('open_hour');
        $partner->close_hour = $request->input('close_hour');
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

    public function showFormOffline()
    {

        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        return view('partner.form.offline-booking', ['partner' => $partner]);        
        
    }

    public function submitFormOffline(Request $request)
    {
        dd($request);
        return redirect()->intended(route('partner.dashboard')); 
    }

    public function profile()
    {
        $user = Auth::user();
        $partner = DB::table('partner')->where('user_id',$user->id)->select('*')->get();
        $tipe = DB::table('partner_type')
                ->select('*')
                ->get();
        $email = DB::table('users')->where('id', $user->id)->select('email')->get();
        $fasilitas = DB::table('facilities_partner')->where('user_id', $user->id)->select('*')->first();
        return view('partner.profile', ['partner' => $partner, 'tipe' => $tipe, 'email' => $email, 'fasilitas' => $fasilitas]);
    }

    public function edit(Request $Request)
    {
        $user = Auth::user();
        $partner = Partner::find($user->id);
        // dd($partner);
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
                    dd($partner);
        return view('partner.ps.edit-package', ['partner' => $partner]);
    }

    public function deletepackagepartner($id)
    {
        $user = Auth::user();
        $partner = DB::table('ps_package')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->get();
                    // dd($partner);
        return view('partner.ps.edit-package', ['partner' => $partner]);
    }

    public function showBookingSchedule()
    {   
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $events = [];
                $data = Booking::where('booking_status', 'paid')->get();
                if($data->count()) {
                    foreach ($data as $key => $value) {
                        $events[] = Calendar::event(
                            $value->partner_name,
                            false,
                            $value->booking_start_date,
                            $value->booking_end_date,
                            null,
                            // Add color and link on event
                         [
                             'color' => '#ff0000',
                             'url' => 'pass here url and any route',
                         ]
                        );
                    }
                }
        $calendar = Calendar::addEvents($events);
        // dd($calendar);
        return view('partner.ps.booking-schedule', ['partner' => $partner], compact('calendar'));
    }


    public function showJadiMitra()
    {
        return view('partner.jadi-mitra');
    }
}
