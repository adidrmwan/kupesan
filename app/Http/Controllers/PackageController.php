<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PSPkg;
use Auth;
class PackageController extends Controller
{
    public function EditPackagePS(Request $request)
    {
    	$id = $request->input('id');
        $package = PSPkg::where('id',$id)->get();
        // dd($package);
        return view('partner.ps.edit-package', ['package' => $package]);
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
