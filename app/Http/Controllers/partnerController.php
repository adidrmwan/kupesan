<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Partner;

class PartnerController extends Controller
{
    public function dashboard()
    {
    	$user = Auth::user();
    	$partner = DB::table('partner')
    				->where('user_id',$user->id)
    				->select('pr_name')
    				->get();
        if (empty($partner->pr_name)) {
            return redirect()->intended(route('partner.profile.form'));
        }
        return view('partner.home', ['partner' => $partner]);
    }
    public function profile()
    {
        $user = Auth::user();
    	$partner = DB::table('partner')
    				->where('user_id',$user->id)
    				->select('*')
    				->get();
    	$tipe = DB::table('pr_type')
    			->select('*')
    			->get();
    	$email = DB::table('users')
    			->where('id', $user->id)
    			->select('email')
    			->get();
        return view('partner.profile', ['partner' => $partner, 'tipe' => $tipe, 'email' => $email]);
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

    public function showProfileFormNew()
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('pr_name')
                    ->get();
        
        return view('partner.form', ['partner' => $partner]);        
        
    }
    
    public function addpackagepartner()
    {
        return view('partner.add-package');
    }
    public function editpackagepartner()
    {
        return view('partner.edit-package');
    }
    public function schedulepartner()
    {
        return view('partner.schedule');
    }
    public function showJadiMitra()
    {
        return view('partner.jadi-mitra');
    }
}
