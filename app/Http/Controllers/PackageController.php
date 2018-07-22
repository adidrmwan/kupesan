<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PSPkg;
use File;
use Image;
use Auth;
class PackageController extends Controller
{
    public function ShowAddPackage()
    {
        return view('partner.ps.add-package');
    }

    public function AddPackage(Request $request)
    {
        $user = Auth::user();
        $package = new PSPkg();
        $package->user_id = $user->id;
        $package->pkg_category_them = $request->input('pkg_category_them');
        $package->pkg_name_them = $request->input('pkg_name_them');
        $package->pkg_desc_them = $request->input('pkg_desc_them');
        $package->pkg_price_them = $request->input('pkg_price_them');
        $package->status = '1';
        
        $package->save();

        $package = PSPkg::find($package->id);
        $package->pkg_img_them = $package->id . '_' . $package->pkg_category_them . '_' . $package->pkg_name_them;
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
            $package= PSPkg::where('user_id',$user->id)->first();

            $package->save();
        }

        return redirect()->intended(route('partner-editpackage'));
        
    }

    public function ListPackage()
    {
        $user = Auth::user();
        $partner = DB::table('ps_package')
                    ->where('user_id',$user->id)
                    ->where('status', '1')
                    ->select('*')
                    ->get();
                    // dd($partner);
        return view('partner.ps.list-package', ['partner' => $partner]);
    }

    public function ShowEditPackagePS(Request $request)
    {
    	$id = $request->id;
        $package = PSPkg::find($id);
        return view('partner.ps.edit-package', ['package' => $package]);
    }

    public function EditPackagePS(Request $request)
    {
        $id = $request->input('id');

        $package = PSPkg::find($id);
        $package->pkg_category_them = $request->input('pkg_category_them');
        $package->pkg_name_them = $request->input('pkg_name_them');
        $package->pkg_desc_them = $request->input('pkg_desc_them');
        $package->pkg_price_them = $request->input('pkg_price_them');
        
        $package->save();

        $package = PSPkg::find($package->id);
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
            Image::make($foto)->resize(300, 300)->save( public_path('/img_pkg/' . $foto_name ) );
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

