<?php
Auth::routes();

Route::get('/home', function(){
        return view('home');
    })->name('');

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

//Route Search Fotostudio di Home
Route::post('/search/fotostudio', 'SearchController@searchFotostudio')->name('search.fotostudio');
Route::post('/detail/fotostudio', 'StudioController@detailFotostudio')->name('detail.fotostudio');


// Route untuk user yang admin
Route::group(['prefix' => '1', 'middleware' => ['auth','role:superadmin']], function(){
	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/confirm/', 'AdminController@confirmBukti')->name('confirm.bukti');
});

// Route untuk user yang member
Route::group(['prefix' => '2', 'middleware' => ['auth','role:user']], function(){
	Route::get('/', function(){
		return view('home');
	})->name('user.dashboard');
    Route::get('/booking/0', 'BookingController@checkAuth')->name('check.auth');
    Route::post('/booking/1', 'BookingController@showBooking')->name('form.pesan');
    Route::post('/booking/2', 'BookingController@showReview')->name('form.booking');
    Route::post('/booking/3', 'BookingController@showBayar')->name('form.bayar');
    Route::post('/booking/4', 'BookingController@showKonfirmasi')->name('form.konfirmasi');   
    Route::post('/booking/5', 'BookingController@uploadBukti')->name('upload.bukti');
    Route::get('/voucher', 'BookingController@voucher')->name('voucher');
    Route::get('/dashboard', 'CustomerController@dashboard')->name('dashboard');
});

// Role untuk user yang partner
Route::group(['prefix' => 'mitra', 'middleware' => ['auth','role:partner']], function(){

    Route::get('/', 'partnerController@dashboard')->name('partner.dashboard');
    // Form Detail Mitra
    Route::get('/detail-mitra', 'PartnerController@showDetailMitra')->name('partner.profile.form');
    Route::post('/detail-mitra', 'PartnerController@submitDetailMitra')->name('partner.profile.form.submit');

    Route::get('/booking-schedule', 'PartnerController@showBookingSchedule')->name('booking.schedule');

    Route::get('/profile', 'PartnerController@profile')->name('partner.profile');
    
    // Album/Portofolio
    Route::get('/portofolio', 'AlbumController@showAlbumPortofolio')->name('partner.portofolio');
    Route::post('/portofolio/upload', 'AlbumController@uploadAlbum')->name('partner.upload.portofolio');


    Route::post('/profile/edit', 'PartnerController@submitEditProfile')->name('partner.profile.form.edit');
    // Update Fasilitas
    Route::post('/profile/fasilitas', 'AlbumController@updateFasilitas')->name('update.fasilitas');

    // upload logo
    Route::post('/profile/upload/logo', 'PartnerController@uploadLogo')->name('partner.upload.logo');



//----------------PackageController
    // Tambah Paket
    Route::get('/package/add', 'PackageController@ShowAddPackage')->name('partner-addpackage');
    Route::post('/package/add', 'PackageController@AddPackage')->name('partner-addpackage-submit');
    // Daftar Paket
    Route::get('/package/list', 'PackageController@ListPackage')->name('partner-editpackage');
    // Button Edit Paket
    Route::post('/package/edit', 'PackageController@ShowEditPackagePS')->name('partner.edit.pkg');
    // Button Delete Paket
    Route::post('/package/delete', 'PackageController@DeletePackagePS')->name('partner.delete.pkg');

    Route::post('/package/update', 'PackageController@EditPackagePS')->name('partner.edit.pkg.submit');
    
    Route::get('/package/update/{$id}', 'PartnerController@UpdatePackagePartner')->name('partner-updatepackage-button');
});

// Route untuk email verification
Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

//Route untuk studio foto
Route::get('/studio/detail', 'StudioController@studiodetail')->name('studio-detail');
Route::get('/studiolist', 'StudioController@studiolist')->name('studio-list');

//Route untuk partner
Route::get('/homepartner', 'PartnerController@homepartner')->name('partner-home');
Route::get('/userpartner', 'PartnerController@userpartner')->name('partner-user');
Route::get('/schedulepartner', 'PartnerController@schedulepartner')->name('partner-schedule');
Route::get('/testingpartner', 'HomeController@testingpartner')->name('testingpartner');

// Route Jadi Mitra
Route::get('/jadi-mitra-kupesan/daftar', 'MitraAuth\RegisterController@showRegistrationForm')->name('mitra.daftar');
Route::post('/jadi-mitra-kupesan/daftar', 'MitraAuth\RegisterController@register')->name('mitra.daftar.submit');
Route::get('/jadi-mitra-kupesan', 'PartnerController@showJadiMitra')->name('jadi.mitra');


//Route Booking


//Route untuk testing saja
Route::get('/pageerror', 'PageController@pageerror')->name('page-error');

Route::get('/booking', 'BookingController@booking')->name('booking');
Route::get('/review', 'BookingController@review')->name('review');
Route::get('/bayar', 'BookingController@bayar')->name('bayar');
Route::get('/proses', 'BookingController@proses')->name('proses');


Route::get('/dashboard', 'CustomerController@dashboard')->name('dashboard');
Route::get('/studioresult', 'CustomerController@studioresult')->name('studioresult');
Route::get('/pesan', 'CustomerController@pesan')->name('pesan');
Route::get('/dashboardadmin', 'CustomerController@dashboardadmin')->name('dashboardadmin');
Route::get('/forgotpassword', 'CustomerController@forgotpassword')->name('forgotpassword');
Route::get('/privacy', 'CustomerController@privacy')->name('privacy');

