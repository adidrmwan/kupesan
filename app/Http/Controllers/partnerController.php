<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Partner;
use App\PSThematicPkg;
use File;
use Image;

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

    public function showProfileFormNew()
    {
        $user = Auth::user();
        $email = $user->email;
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->get();
        return view('partner.form', ['partner' => $partner, 'email' => $email]);        
        
    }
    
    public function submitProfileFormNew(Request $request)
    {
        $user = Auth::user();
        $partner = Partner::where('user_id', $user->id)->first();
        $partner->pr_name = $request->input('pr_name');
        $partner->pr_owner_name = $request->input('pr_owner_name');
        $partner->pr_type = $request->input('pr_type');
        $partner->pr_addr = $request->input('pr_addr');
        $partner->pr_area = $request->input('pr_area');
        $partner->pr_postal_code = $request->input('pr_postal_code');
        $partner->pr_desc = $request->input('pr_desc');
        $partner->pr_phone = $request->input('pr_phone');
        $partner->pr_phone2 = $request->input('pr_phone2');
        $partner->status = '1';
        $partner->save();

        return redirect()->intended(route('partner.dashboard'));
        
    }
    
    public function addpackagepartner()
    {
        return view('partner.add-package');
    }
    
    public function submitaddpackagepartner(Request $request)
    {
        $user = Auth::user();
        $package = new PSThematicPkg();
        $package->user_id = $user->id;
        $package->pkg_name_them = $request->input('pkg_name_them');
        $package->pkg_desc_them = $request->input('pkg_desc_them');
        $package->pkg_price_them = $request->input('pkg_price_them');
        $package->pkg_img_them = $request->input('pkg_img_them');
        $package->save();

        if ($request->hasFile('pkg_img_them')) {
            //Found existing file then delete
            $foto_new = $package->pkg_img_them;
            // if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
            //     File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            // }
            // if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
            //     File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            // }
            // if( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
            //     File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            // }

            $foto = $request->file('pkg_img_them');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->resize(300, 300)->save( public_path('/img_pkg/' . $foto_name ) );
            $user = Auth::user();
            $package= PSThematicPkg::where('user_id',$user->id)->first();
            $package->save();
        }

        return redirect()->intended(route('partner.dashboard'));
        
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
