<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Partner;

class partnerController extends Controller
{
    public function home()
    {
    	$user = Auth::user();
    	$partner = DB::table('partner')
    				->where('user_id',$user->id)
    				->select('partner_name')
    				->get();
        return view('partner.home', ['partner' => $partner]);
    }
    public function profile()
    {
        $user = Auth::user();
    	$partner = DB::table('partner')
    				->where('user_id',$user->id)
    				->select('*')
    				->get();
    	$tipe = DB::table('partner_type')
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
    	dd($partner);
    	$partner = DB::table('partner')
    				->where('user_id',$user->id)
    				->select('*')
    				->get();
        return view('partner.home', ['partner' => $partner]);
    }
}
