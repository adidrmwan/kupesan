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
use App\PartnerDurasi;
class PackageController extends Controller
{
    public function showAddPackage()
    {
        $listTag = DB::table('ps_tag')->get();
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        return view('partner.ps.package.add', compact('listTag', 'partner'));
    }

    public function addPackage(Request $request)
    {
        $user = Auth::user();
        $partner = Partner::where('user_id', $user->id)->first();

        if (!empty($request->pkg_overtime_them)) {
            $overtime = $request->pkg_overtime_them;
            $overtime_array = explode(".", $overtime);
            $pkg_overtime_them = '';
            foreach ($overtime_array as $key => $value) {
                $pkg_overtime_them = $pkg_overtime_them . $overtime_array[$key];
            }
        } else {
            $pkg_overtime_them = '0';
        }

        $package = new PSPkg();
        $package->user_id = $partner->user_id;
        $package->partner_name = $partner->pr_name;
        $package->pkg_category_them = $request->input('pkg_category_them');
        $package->pkg_name_them = $request->input('pkg_name_them');
        $package->pkg_fotografer = $request->input('pkg_fotografer');
        $package->pkg_print_size = $request->input('pkg_print_size');
        $package->pkg_edited_photo = $request->input('pkg_edited_photo');
        $package->pkg_capacity = $request->input('pkg_capacity');
        $package->pkg_frame = $request->input('pkg_frame');
        $package->pkg_overtime_them = $pkg_overtime_them;
        $package->status = '1';
        $package->save();

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

        $durasiSet = [];
        if ($package->save()) {
            for ($i = 0; $i < count($request->durasi_jam); $i++) {
                $price = $request->durasi_harga[$i];
                $price_array = explode(".", $price);
                $pkg_price_them = '';
                foreach ($price_array as $key => $value) {
                    $pkg_price_them = $pkg_price_them . $price_array[$key];
                }
                $durasiSet[] = [
                    'partner_id' => $partner->id,
                    'package_id' => $package->id,
                    'durasi_jam' => $request->durasi_jam[$i],
                    'durasi_harga' => $pkg_price_them,
                ];
            }
        }
        PartnerDurasi::insert($durasiSet);

        $durasiPaket = PartnerDurasi::where('package_id', $package->id)->min('durasi_harga');
        $package->pkg_price_them = $durasiPaket;
        $package->save();
        
        if ($request->hasFile('pkg_img_them')) {
            $package->pkg_img_them = $package->id . '_' . $package->pkg_category_them . '_' . $package->pkg_name_them . '_1';
            $package->save();
            $foto_new = $package->pkg_img_them;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.PNG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.PNG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPEG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPEG' ));
            }  
            $foto = $request->file('pkg_img_them');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );
            $user = Auth::user();
            $package= PSPkg::where('user_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('pkg_img_them2')) {
            $package->pkg_img_them2 = $package->id . '_' . $package->pkg_category_them . '_' . $package->pkg_name_them . '_2';
            $package->save();
            $foto_new = $package->pkg_img_them2;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.PNG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.PNG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPEG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPEG' ));
            }
            $foto = $request->file('pkg_img_them2');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );
            $user = Auth::user();
            $package= PSPkg::where('user_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('pkg_img_them3')) {
            $package->pkg_img_them3 = $package->id . '_' . $package->pkg_category_them . '_' . $package->pkg_name_them . '_3';
            $package->save();
            $foto_new = $package->pkg_img_them3;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.PNG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.PNG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPEG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPEG' ));
            }
            $foto = $request->file('pkg_img_them3');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );
            $user = Auth::user();
            $package= PSPkg::where('user_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('pkg_img_them4')) {
            $package->pkg_img_them4 = $package->id . '_' . $package->pkg_category_them . '_' . $package->pkg_name_them . '_4';
            $package->save();
            $foto_new = $package->pkg_img_them4;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.PNG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.PNG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPEG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPEG' ));
            }
            $foto = $request->file('pkg_img_them4');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );
            $user = Auth::user();
            $package= PSPkg::where('user_id',$user->id)->first();
            $package->save();
        }

        return redirect()->intended(route('partner.listpackage'));    
    }

    public function listPackage()
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
        $hargaPaket = PartnerDurasi::where('partner_id', $partner->id)->get();

        return view('partner.ps.package.list', compact('partner', 'package', 'hargaPaket'));
    }

    public function showEditPackage(Request $request)
    {
        $user = Auth::user();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        $id = $request->id;
        $package = PSPkg::where('id', $id)->get();
        $packageList = PSPkg::where('id', $id)->first();
        $partnerTag = PartnerTag::join('ps_tag', 'ps_tag.tag_id', '=', 'ps_package_tag.tag_id')->where('package_id', $packageList->id)->get();
        $durasiPaket = PartnerDurasi::where('package_id', $packageList->id)->get();

        return view('partner.ps.package.edit', compact('package', 'partnerTag', 'partner', 'durasiPaket'));
    }

    public function editPackage(Request $request)
    {
        $user = Auth::user();
        $id = $request->id;
        $partner = Partner::where('user_id', $user->id)->first();
        $package = PSPkg::findOrFail($id);

        if (!empty($request->pkg_overtime_them)) {
            $overtime = $request->pkg_overtime_them;
            $overtime_array = explode(".", $overtime);
            $pkg_overtime_them = '';
            foreach ($overtime_array as $key => $value) {
                $pkg_overtime_them = $pkg_overtime_them . $overtime_array[$key];
            }
        } else {
            $pkg_overtime_them = '0';
        }
        
        $package->pkg_name_them = $request->input('pkg_name_them');
        $package->pkg_category_them = $request->input('pkg_category_them');
        $package->pkg_overtime_them = $request->input('pkg_overtime_them');
        $package->pkg_fotografer = $request->input('pkg_fotografer');
        $package->pkg_print_size = $request->input('pkg_print_size');
        $package->pkg_edited_photo = $request->input('pkg_edited_photo');
        $package->pkg_capacity = $request->input('pkg_capacity');
        $package->pkg_frame = $request->input('pkg_frame');
        $package->pkg_overtime_them = $pkg_overtime_them;
        $package->save();

        $package = PSPkg::findOrFail($id);
        
        if(!empty($request->tag)) {
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
        }
        
        if(!empty($request->durasi_jam)) {
            $durasiSet = [];
            if ($package->save()) {
                for ($i = 0; $i < count($request->durasi_jam); $i++) {
                    $price = $request->durasi_harga[$i];
                    $price_array = explode(".", $price);
                    $pkg_price_them = '';
                    foreach ($price_array as $key => $value) {
                        $pkg_price_them = $pkg_price_them . $price_array[$key];
                    }
                    $durasiSet[] = [
                        'partner_id' => $partner->id,
                        'package_id' => $package->id,
                        'durasi_jam' => $request->durasi_jam[$i],
                        'durasi_harga' => $pkg_price_them,
                    ];
                }
            }
            PartnerDurasi::insert($durasiSet);
        }
        
        if ($request->hasFile('pkg_img_them')) {
            $package->pkg_img_them = $package->id . '_' . $package->pkg_category_them . '_' . $package->pkg_name_them . '_1';
            $package->save();
            $foto_new = $package->pkg_img_them;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.PNG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.PNG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPEG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPEG' ));
            }  
            $foto = $request->file('pkg_img_them');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );
            $user = Auth::user();
            $package= PSPkg::where('user_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('pkg_img_them2')) {
            $package->pkg_img_them2 = $package->id . '_' . $package->pkg_category_them . '_' . $package->pkg_name_them . '_2';
            $package->save();
            $foto_new = $package->pkg_img_them2;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.PNG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.PNG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPEG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPEG' ));
            }
            $foto = $request->file('pkg_img_them2');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );
            $user = Auth::user();
            $package= PSPkg::where('user_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('pkg_img_them3')) {
            $package->pkg_img_them3 = $package->id . '_' . $package->pkg_category_them . '_' . $package->pkg_name_them . '_3';
            $package->save();
            $foto_new = $package->pkg_img_them3;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.PNG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.PNG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPEG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPEG' ));
            }
            $foto = $request->file('pkg_img_them3');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );
            $user = Auth::user();
            $package= PSPkg::where('user_id',$user->id)->first();
            $package->save();
        }

        if ($request->hasFile('pkg_img_them4')) {
            $package->pkg_img_them4 = $package->id . '_' . $package->pkg_category_them . '_' . $package->pkg_name_them . '_4';
            $package->save();
            $foto_new = $package->pkg_img_them4;
            if( File::exists(public_path('/img_pkg/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpeg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.jpg' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.png' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.png' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.PNG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.PNG' ));
            } elseif( File::exists(public_path('/img_pkg/' . $foto_new .'.JPEG' ))){
                File::delete(public_path('/img_pkg/' . $foto_new .'.JPEG' ));
            }
            $foto = $request->file('pkg_img_them4');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/img_pkg/' . $foto_name ) );
            $user = Auth::user();
            $package= PSPkg::where('user_id',$user->id)->first();
            $package->save();
        }
        
        return redirect()->intended(route('partner.listpackage'));
    }    

    public function deletePackage(Request $request)
    {
    	$id = $request->id;
        $package = PSPkg::findOrFail($id);
        $package->status = '0';
        $package->save();
        return redirect()->intended(route('partner.listpackage'));
    }

    public function deleteDurasi(Request $request)
    {
        $user = Auth::user();
        $pu = PartnerDurasi::find($request->id);
        $pu->delete();

        return redirect()->intended(route('partner.listpackage'));
    }

}

