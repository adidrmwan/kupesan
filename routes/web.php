<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/', function () {
    
    if(Auth::check()) {    
        
        $user = Auth::user();
        $userrole = DB::table('role_user')
                    ->where('user_id', $user->id)
                    ->select('role_id')
                    ->first();
        // dd($userrole);
        if ( $userrole->role_id == '1' ) {
               return redirect()->route('admin.dashboard');
        }
        elseif ( $userrole->role_id == '2' ) {
               return redirect()->route('user.dashboard');
        }
        elseif ( $userrole->role_id == '3' ) {
               return redirect()->route('partner.dashboard');
        }  
    }

    return view('home');       

})->name('index');


// Route untuk user yang baru register
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function(){
	Route::get('/', function(){
		return view('home');
	});
});

// Route untuk user yang admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
});

// Route untuk user yang member
Route::group(['prefix' => '2', 'middleware' => ['auth','role:user']], function(){
	Route::get('/', function(){
		return view('home');
	})->name('user.dashboard');
});

// Role untuk user yang partner
Route::group(['prefix' => '3', 'middleware' => ['auth','role:partner']], function(){
	Route::get('/', 'partnerController@dashboard')->name('partner.dashboard');
    Route::get('/profil-mitra', 'PartnerController@showProfileFormNew')->name('partner.profile.form');
    Route::post('/profil-mitra', 'PartnerController@submitProfileFormNew')->name('partner.profile.form.submit');
});

// Route untuk email verification
Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

//Route untuk studio foto
Route::get('/studiodetail', 'studioController@studiodetail')->name('studio-detail');
Route::get('/studiolist', 'studioController@studiolist')->name('studio-list');

//Route untuk partner
Route::get('/homepartner', 'PartnerController@homepartner')->name('partner-home');
Route::get('/userpartner', 'PartnerController@userpartner')->name('partner-user');
Route::get('/addpackagepartner', 'PartnerController@addpackagepartner')->name('partner-addpackage');
Route::get('/editpackagepartner', 'PartnerController@editpackagepartner')->name('partner-editpackage');
Route::get('/schedulepartner', 'PartnerController@schedulepartner')->name('partner-schedule');
Route::get('/testingpartner', 'HomeController@testingpartner')->name('testingpartner');


// Route Jadi Mitra
Route::get('/jadi-mitra-kupesan/daftar', 'MitraAuth\RegisterController@showRegistrationForm')->name('mitra.daftar');
Route::post('/jadi-mitra-kupesan/daftar', 'MitraAuth\RegisterController@register')->name('mitra.daftar.submit');
Route::get('/jadi-mitra-kupesan', 'PartnerController@showJadiMitra')->name('jadi.mitra');
