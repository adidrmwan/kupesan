<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Partner;
use App\FasilitasPartner;
use App\Album;
use File;
use Image;

class AlbumController extends Controller
{
	public function showAlbumPortofolio()
    {
        $user = Auth::user();
        // $album = Album::where('user_id', $user->id)->first();
        $data = DB::table('album')
        		->where('user_id', $user->id)
        		->select('*')
        		->first();
        $partner = DB::table('partner')
                    ->where('user_id',$user->id)
                    ->select('*')
                    ->first();
        return view('partner.ps.album-portofolio', ['data' => $data, 'partner' => $partner]);
    }

    public function uploadAlbum(Request $request)
    {
        $user = Auth::user();
        // $album = New Album();
        // $album->user_id = $user->id;
        // $album->save();
        // dd($request);
        $album = Album::where('user_id', $user->id)->first();
	    if ($request->hasFile('album_img_1')) {
    	    $album->album_img_1 = $album->id . '_' . $album->user_id . '_album1';
        	$album->save();

            //Found existing file then delete
            $foto_new = $album->album_img_1;
            if( File::exists(public_path('/album/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/album/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/album/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/album/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/album/' . $foto_new .'.png' ))){
                File::delete(public_path('/album/' . $foto_new .'.png' ));
            }
            $foto = $request->file('album_img_1');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/album/' . $foto_name ) );
            $user = Auth::user();
            $album = Album::where('user_id', $user->id)->first();
            $album->save();
        }
        if ($request->hasFile('album_img_2')) {
    	    $album->album_img_2 = $album->id . '_' . $album->user_id . '_album2';
        	$album->save();

            //Found existing file then delete
            $foto_new = $album->album_img_2;
            if( File::exists(public_path('/album/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/album/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/album/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/album/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/album/' . $foto_new .'.png' ))){
                File::delete(public_path('/album/' . $foto_new .'.png' ));
            }
            $foto = $request->file('album_img_2');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/album/' . $foto_name ) );
            $user = Auth::user();
            $album = Album::where('user_id', $user->id)->first();
            $album->save();
        }
        if ($request->hasFile('album_img_3')) {
    	    $album->album_img_3 = $album->id . '_' . $album->user_id . '_album3';
        	$album->save();

            //Found existing file then delete
            $foto_new = $album->album_img_3;
            if( File::exists(public_path('/album/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/album/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/album/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/album/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/album/' . $foto_new .'.png' ))){
                File::delete(public_path('/album/' . $foto_new .'.png' ));
            }
            $foto = $request->file('album_img_3');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/album/' . $foto_name ) );
            $user = Auth::user();
            $album = Album::where('user_id', $user->id)->first();
            $album->save();
        }
        if ($request->hasFile('album_img_4')) {
    	    $album->album_img_4 = $album->id . '_' . $album->user_id . '_album4';
        	$album->save();

            //Found existing file then delete
            $foto_new = $album->album_img_4;
            if( File::exists(public_path('/album/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/album/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/album/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/album/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/album/' . $foto_new .'.png' ))){
                File::delete(public_path('/album/' . $foto_new .'.png' ));
            }
            $foto = $request->file('album_img_4');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/album/' . $foto_name ) );
            $user = Auth::user();
            $album = Album::where('user_id', $user->id)->first();
            $album->save();
        }
        return redirect()->intended(route('partner.portofolio'));
        
    }

    public function updateFasilitas(Request $request)
    {
        $user = Auth::user();
        $fasilitas = FasilitasPartner::where('user_id', $user->id)->first();
        $fasilitas->toilet = $request->input('toilet');
        $fasilitas->wifi = $request->input('wifi');
        $fasilitas->rganti = $request->input('rganti');
        $fasilitas->ac = $request->input('ac');
        $fasilitas->parkir = $request->input('parkir');
        $fasilitas->save();
        return redirect()->intended(route('partner.profile'));
    }
}
