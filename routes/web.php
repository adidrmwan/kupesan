<?php
Auth::routes();

Route::get('/home', 'SearchController@home')->name('home');

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

    return redirect()->intended(route('home'));      

})->name('index');

//Route Search Fotostudio di Home
Route::post('/search/fotostudio', 'SearchController@searchFotostudio')->name('search.fotostudio');
Route::get('/detail/fotostudio', 'StudioController@detailFotostudio')->name('detail.fotostudio');
Route::post('/search/kebaya', 'SearchController@searchKebaya')->name('search.kebaya');
Route::get('/detail/kebaya', 'StudioController@detailFotostudio')->name('detail.fotostudio');
Route::post('/search/data', 'SearchController@searchData')->name('search.data');
Route::get('/search/result/#1', 'SearchController@resultstudio')->name('resultstudio');

// Kebaya
Route::post('/search/kebaya', 'SearchController@searchKebaya')->name('search.kebaya');

// Route untuk user yang admin
Route::group(['prefix' => 'admin-kupesan', 'middleware' => ['auth','role:superadmin']], function(){
	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/kupesan', 'SearchController@home')->name('admin.kupesan');
    Route::get('/approve/booking', 'AdminController@approveBooking')->name('approve.booking');
    Route::get('/cancel/booking', 'AdminController@cancelBooking')->name('cancel.booking');
    Route::get('/confirm/bukti', 'AdminController@confirmBukti')->name('confirm.bukti');
    Route::get('/cancel/bukti', 'AdminController@cancelBukti')->name('cancel.bukti');
    Route::get('/show/bukti', 'AdminController@showBukti')->name('show.bukti');
    Route::get('/partner-list', 'AdminController@partnerList')->name('daftar.partner');
    Route::get('/confirm/partner', 'AdminController@confirmPartner')->name('confirm.partner');
    Route::get('/show/partner', 'AdminController@showPartner')->name('show.partner');
    Route::get('/cancel/partner', 'AdminController@cancelPartner')->name('cancel.partner');

    // kebaya

    Route::get('/kebaya/approve/booking', 'AdminController@approveBookingKebaya')->name('kebaya.approve.booking');
    Route::get('/kebaya/cancel/booking', 'AdminController@cancelBookingKebaya')->name('kebaya.cancel.booking');
    Route::get('/kebaya/confirm/bukti', 'AdminController@confirmBuktiKebaya')->name('kebaya.confirm.bukti');
    Route::get('/kebaya/cancel/bukti', 'AdminController@cancelBuktiKebaya')->name('kebaya.cancel.bukti');
    Route::get('kebaya//show/bukti', 'AdminController@showBuktiKebaya')->name('kebaya.show.bukti');

    Route::get('/list/booking/kebaya', 'AdminController@listBookingKebaya')->name('list.booking.kebaya');

});

// Route untuk email verification
Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');
Route::get('/partner/activation/2/{token}', 'MitraAuth\RegisterController@userActivation');
Route::get('/partner/activation/{token}', 'AdminController@partnerActivation');
Route::get('/booking/approved/{token}', 'AdminController@bookingActivation');
Route::get('/booking/approved/kebaya/{token}', 'AdminController@bookingActivationKebaya');

// Route untuk user yang member
Route::group(['prefix' => '2', 'middleware' => ['auth','role:user']], function(){
    Route::get('/', function(){
        return redirect()->intended(route('home'));
    })->name('user.dashboard');

    Route::get('/booking/ps/2', 'BookingController@step2')->name('check.auth');
    Route::post('/booking/ps/3', 'BookingController@step3')->name('form.pesan2');
    Route::post('/booking/ps/4', 'BookingController@step4')->name('form.pesan');
    Route::post('/booking/ps/5', 'BookingController@step5')->name('form.step5');
    Route::get('/booking/ps/6', 'BookingController@step6')->name('form.step6');
    Route::post('/booking/ps/7', 'BookingController@step7')->name('form.step7');
    Route::post('/booking/ps/8', 'BookingController@showKonfirmasi')->name('form.konfirmasi');   
    Route::post('/booking/ps/9', 'BookingController@uploadBukti')->name('upload.bukti');
    Route::get('/booking/ps/9', 'BookingController@voucher')->name('voucher');
    
    Route::post('/booking/7', 'BookingController@showReview')->name('form.booking');
    Route::get('/profilKu', 'CustomerController@dashboard')->name('dashboard');
    Route::post('/booking/info/', 'CustomerController@showInfo')->name('booking.info');

    // kebaya 
    Route::get('/booking/kebaya/2', 'KebayaBookingController@step2')->name('kebaya.step2');
    Route::post('/booking/kebaya/2', 'KebayaBookingController@submitStep2')->name('kebaya.submit.step2');
    Route::get('/booking/kebaya/3', 'KebayaBookingController@step3')->name('kebaya.step3');
    Route::post('/booking/kebaya/3', 'KebayaBookingController@submitStep3')->name('kebaya.submit.step3');
    Route::get('/booking/kebaya/4', 'KebayaBookingController@step4')->name('kebaya.step4');
    Route::post('/booking/kebaya/4', 'KebayaBookingController@submitStep4')->name('kebaya.submit.step4');
    Route::get('/booking/kebaya/6', 'KebayaBookingController@step6')->name('kebaya.step6');
    Route::post('/booking/kebaya/7', 'KebayaBookingController@step7')->name('kebaya.step7');
    Route::post('/booking/kebaya/8', 'KebayaBookingController@step8')->name('kebaya.step8');
    Route::post('/booking/kebaya/9', 'KebayaBookingController@uploadBukti')->name('kebaya.upload.bukti');
    Route::get('/booking/kebaya/9', 'KebayaBookingController@step9')->name('kebaya.step9');
    Route::post('/booking/kebaya/info', 'CustomerController@showKebayaInfo')->name('kebaya.booking.info');
});
    Route::get('/booking/kebaya/1', 'KebayaBookingController@step1')->name('kebaya.step1');
    Route::get('/booking/ps/1', 'BookingController@step1')->name('ask.page');

// Role untuk user yang partner
Route::group(['prefix' => 'partner', 'middleware' => ['auth','role:partner']], function(){

    Route::get('/', 'partnerController@dashboard')->name('partner.dashboard');

    Route::get('/form/new', 'PartnerController@showDetailMitra')->name('partner.profile.form');
    Route::post('/form/new', 'PartnerController@submitDetailMitra')->name('partner.profile.form.submit');
    
    Route::get('/form/facilities', 'PartnerController@showFormFacilities')->name('partner.facilities.form');
    Route::post('/form/facilities', 'PartnerController@submitFormFacilities')->name('partner.facilities.form.submit');
    Route::get('/form/dayoff', 'PartnerController@showFormDayOff')->name('form.dayoff');
    Route::post('/form/dayoff', 'PartnerController@submitFormDayOff')->name('form.dayoff.submit');

    // fotostudio
    Route::get('/booking/ps/schedule', 'PartnerController@showBookingSchedule')->name('booking.schedule');
    Route::get('/booking/ps/history', 'PartnerController@showBookingHistory')->name('booking.history');
    Route::get('/booking/offline/1', 'PartnerController@showStep1')->name('form.offline');
    Route::get('/booking/offline/1/2', 'PartnerController@showStep2')->name('form.offline.step2');
    Route::post('/booking/offline/1/2', 'PartnerController@submitStep2')->name('form.offline.step2.submit');
    Route::post('/booking/offline/1/3', 'PartnerController@submitStep3')->name('form.offline.step3.submit');
    Route::post('/booking/offline/1/4', 'PartnerController@submitStep4')->name('form.offline.step4.submit');
    Route::post('/booking/offline', 'PartnerController@submitFormOffline')->name('form.offline.submit');

    Route::get('/profile', 'PartnerController@profile')->name('partner.profile');
    
    Route::get('/booking/detail', 'PartnerController@showDetailBooking')->name('detail.booking');

    Route::get('/portofolio', 'AlbumController@showAlbumPortofolio')->name('partner.portofolio');
    Route::post('/portofolio/upload', 'AlbumController@uploadAlbum')->name('partner.upload.portofolio');

    Route::post('/booking/completed', 'BookingController@orderCompleted')->name('order.completed');

    Route::post('/profile/edit', 'PartnerController@submitEditProfile')->name('partner.profile.form.edit');
    Route::post('/profile/fasilitas', 'AlbumController@updateFasilitas')->name('update.fasilitas');
    Route::post('/profile/tnc', 'PartnerController@updateTNC')->name('update.tnc');
    Route::get('/profile/tnc/delete', 'PartnerController@deleteTNC')->name('delete.tnc');
    Route::post('/profile/upload/logo', 'PartnerController@uploadLogo')->name('partner.upload.logo');
    Route::get('/booking/ps/finished', 'PartnerController@bookingFinished')->name('booking.finished');
    Route::get('/booking/ps/cancel', 'PartnerController@bookingCancel')->name('booking.cancel');



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

    // Kebaya
    Route::get('/item/add', 'KebayaController@showAddItem')->name('add.item');
    Route::post('/item/add', 'KebayaController@addItem')->name('submit.item');
    Route::get('/item/list', 'KebayaController@listItem')->name('list.item');
    Route::get('/item/delete', 'KebayaController@deleteItem')->name('delete.item');
    Route::get('/item/edit', 'KebayaController@showEditItem')->name('edit.item');
    Route::post('/item/edit', 'KebayaController@editItem')->name('submit.edit.item');
    Route::get('/booking/offline/4/1', 'KebayaController@showStep1')->name('kebaya.off-booking');
    Route::get('/booking/offline/4/2', 'KebayaController@showStep2')->name('kebaya.off-booking.step2');
    Route::post('/booking/offline/4/2', 'KebayaController@submitStep2')->name('kebaya.off-booking.step2.submit');
    Route::get('/booking/offline/4/3', 'KebayaController@showStep3')->name('kebaya.off-booking.step3');
    Route::post('/booking/offline/4/3', 'KebayaController@submitStep3')->name('kebaya.off-booking.step3.submit');
    Route::post('/booking/offline/4/4', 'KebayaController@submitStep4')->name('kebaya.off-booking.step4.submit');
    Route::get('/booking/schedule/4', 'KebayaController@showBookingSchedule')->name('kebaya.schedule');
    Route::get('/booking/history/4', 'KebayaController@showBookingHistory')->name('kebaya.history');
    Route::get('/booking/cancel', 'KebayaController@bookingCancel')->name('kebaya.booking.cancel');
    Route::get('/booking/finished', 'KebayaController@bookingFinished')->name('kebaya.booking.finished');
    Route::get('/booking/finished/online', 'KebayaController@bookingFinishedOnline')->name('kebaya.booking.finished.online');
    Route::post('/profile/panduan-ukuran/update', 'KebayaController@updatePU')->name('kebaya.update.pu');
    Route::get('/profile/panduan-ukuran/delete', 'KebayaController@deletePU')->name('kebaya.delete.pu');
});




//Route untuk studio foto
Route::get('/studio/detail', 'StudioController@studiodetail')->name('studio-detail');
Route::get('/studiolist', 'StudioController@studiolist')->name('studio-list');

//Route untuk partner
Route::get('/homepartner', 'PartnerController@homepartner')->name('partner-home');
Route::get('/userpartner', 'PartnerController@userpartner')->name('partner-user');
Route::get('/schedulepartner', 'PartnerController@schedulepartner')->name('partner-schedule');
Route::get('/testingpartner', 'HomeController@testingpartner')->name('testingpartner');

// Route Jadi Mitra
Route::get('/partner-ku/login', 'MitraAuth\RegisterController@showLoginForm')->name('mitra.login');
Route::get('/partner-ku/register', 'MitraAuth\RegisterController@showRegistrationForm')->name('mitra.daftar');
Route::post('/partner-ku/register', 'MitraAuth\RegisterController@register')->name('mitra.daftar.submit');
Route::get('/partner-ku', 'PartnerController@showJadiMitra')->name('jadi.mitra');


//Route Booking


//Route untuk testing saja
Route::get('/pageerror', 'PageController@pageerror')->name('page-error');

Route::get('/booking', 'BookingController@booking')->name('booking');
Route::get('/review', 'BookingController@review')->name('review');
Route::get('/bayar', 'BookingController@bayar')->name('bayar');
Route::get('/proses', 'BookingController@proses')->name('proses');


Route::get('/studioresult', 'CustomerController@studioresult')->name('studioresult');
Route::get('/pesan', 'CustomerController@pesan')->name('pesan');
Route::get('/dashboardadmin', 'CustomerController@dashboardadmin')->name('dashboardadmin');
Route::get('/privacy', 'CustomerController@privacy')->name('privacy');
Route::get('/termsandcondition', 'CustomerController@tnc')->name('termsandcondition');

Route::get('/json-regencies','CountryController@regencies');
Route::get('/json-districts', 'CountryController@districts');
Route::get('/json-village', 'CountryController@villages');

Route::get('/json-regencies1','BookingController@regencies');
Route::get('/json-districts1', 'BookingController@districts');
Route::get('/json-village1', 'BookingController@villages');
Route::get('/json-village2', 'BookingController@villages2');

