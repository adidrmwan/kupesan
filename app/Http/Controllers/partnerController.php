<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        return view('partner-ps.form', ['partner' => $partner]);
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
    	// dd($partner);
    	$partner = DB::table('partner')
    				->where('user_id',$user->id)
    				->select('*')
    				->get();
        return view('partner.home', ['partner' => $partner]);
    }

    public function submit(Request $request)
    {
        $user = Auth::user();
        $partner = new Partner();
        $partner->user_id = $user->id;
        $partner->pr_name = $request->input('pr_name');
        $partner->pr_desc = $request->input('pr_desc');
        
        $partner->save();
        return redirect()->back();
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
    public function formpartner()
    {
        return view('partner.form');
    }
}
