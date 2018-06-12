<?php

Route::get('/', function () {
    return view('home');
});



Route::get('/home', 'HomeController@index')->name('home');


Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


// Route::get('/', function () {
    
//     if(Auth::check()) {
    
//     $user = Auth::user();
    
//     $userrole = DB::select("select role_id from role_user where user_id = '$user->id' ");
//         if ( $userrole = 1 ) {
//            return redirect()->route('admin');
//         }
        
//         elseif ( $userrole = 2 ) {
//            return redirect()->route('home');
//         }

//         elseif ( $userrole = 3 ) {
//            return redirect()->route('welcome');
//         }


//     }

//     return view('home');     
    
// });


// Route untuk user yang baru register
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function(){
	Route::get('/', function(){
		return view('home');
	});
});

// Route untuk user yang admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
	Route::get('/', function(){
		$data['users'] = \App\User::whereDoesntHave('roles')->get();
		return view('admin', $data);
	});
});

// Route untuk user yang member
Route::group(['prefix' => 'user', 'middleware' => ['auth','role:user']], function(){
	Route::get('/', function(){
		return view('home');
	});
});

// Role untuk user yang partner
Route::group(['prefix' => 'partner', 'middleware' => ['auth','role:partner']], function(){
	Route::get('/', function(){
		$data['users'] = \App\User::whereDoesntHave('roles')->get();
		return view('welcome', $data);
	});
});

// Route untuk email verification
Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

//Route untuk studio foto
Route::get('/studiodetail', 'studioController@studiodetail')->name('studio-detail');

Auth::routes();