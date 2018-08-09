<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PSPkg;
use File;
use Image;
use Auth;
use App\Partner;
use App\PartnerTag;
class PackageController extends Controller
{
    public function ShowAddPackage()
    {
        $listTag = DB::table('ps_tag')->get();
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        return view('partner.ps.add-package', compact('listTag', 'partner'));
    }

    public function AddPackage(Request $request)
    {
        $user = Auth::user();
        $partner = Partner::where('user_id', $user->id)->first();
        $package = new PSPkg();
        $package->user_id = $partner->user_id;
        $package->partner_name = $partner->pr_name;
        $package->pkg_category_them = $request->input('pkg_category_them');
        $package->pkg_name_them = $request->input('pkg_name_them');
        $package->pkg_duration_them = $request->input('pkg_duration_them');
        $package->pkg_price_them = $request->input('pkg_price_them');
        $package->pkg_overtime_them = $request->input('pkg_overtime_them');
        $package->status = '1';
        
        $package->save();
        $package = PSPkg::find($package->id);

        $dataSet = [];
        if ($package->save()) {
            for ($i = 0; $i < count($request->tag); $i++) {
                $dataSet[] = [
                    'package_id' => $package->id,
                    'tag_id' => $request->tag[$i],
                ];
            }
        }
        PartnerTag::insert($dataSet);

        $package->pkg_img_them = $package->id . '_' . $package->pkg_category_them . '_' . $package->pkg_name_them;
        $package->save();
        if ($request->hasFile('pkg_img_them')) {

            //Found existing file then delete
            $foto_new = $package->pkg_img_them;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            }

            $foto = $request->file('pkg_img_them');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );
            $user = Auth::user();
            $package= PSPkg::where('user_id',$user->id)->first();

            $package->save();
        }
        
        return redirect()->intended(route('partner-editpackage'));
        
    }

    public function ListPackage()
    {
        $user = Auth::user();
        $package = DB::table('ps_package')
                    ->where('user_id',$user->id)
                    ->where('status', '1')
                    ->select('*')
                    ->get();

        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();

        return view('partner.ps.list-package',['partner' => $partner, 'package' => $package]);
    }

    public function ShowEditPackagePS(Request $request)
    {
    	$id = $request->id;
        $package = PSPkg::where('id', $id)->get();
        $package_id = PSPkg::where('id', $id)->first();
        $partnerTag = PartnerTag::join('ps_tag', 'ps_tag.tag_id', '=', 'ps_package_tag.tag_id')->where('package_id', $package_id->id)->get();

        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        
        return view('partner.ps.edit-package', ['package' => $package, 'partnerTag' => $partnerTag, 'partner' => $partner]);
    }

    public function EditPackagePS(Request $request)
    {
        $id = $request->id;

        $package = PSPkg::find($id);
        $package->pkg_category_them = $request->input('pkg_category_them');
        $package->pkg_name_them = $request->input('pkg_name_them');
        $package->pkg_duration_them = $request->input('pkg_duration_them');
        $package->pkg_price_them = $request->input('pkg_price_them');
        $package->pkg_overtime_them = $request->input('pkg_overtime_them');
        
        $package->save();

        $package = PSPkg::find($package->id);

        $dataSet = [];
        if ($package->save()) {
            for ($i = 0; $i < count($request->tag); $i++) {
                $dataSet[] = [
                    'package_id' => $package->id,
                    'tag_id' => $request->tag[$i],
                ];
            }
        }
        PartnerTag::insert($dataSet);

        $package->pkg_img_them = $package->id . '_' . $package->pkg_category_them . '_' . $package->pkg_name_them;
        $package->save();

        if ($request->hasFile('pkg_img_them')) {
            //Found existing file then delete
            $foto_new = $package->pkg_img_them;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            }
            $foto = $request->file('pkg_img_them');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );
            $user = Auth::user();
            $package= PSPkg::where('id',$id)->first();
            $package->save();
        }

        
        return redirect()->intended(route('partner-editpackage'));
    }    

    public function DeletePackagePS(Request $request)
    {
    	$id = $request->input('id');
        $package = PSPkg::where('id',$id)->first();
        // dd($package);
        $package->status = '0';
        $package->save();
        return redirect()->intended(route('partner-editpackage'));
    }

}

