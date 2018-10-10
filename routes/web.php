<?php
Auth::routes();
Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');

Route::get('/home', 'SearchController@home')->name('home');
Route::group(['prefix' => 'partner-ku'], function(){
    Route::get('', 'PartnerController@showJadiMitra')->name('jadi.mitra');
    Route::get('login', 'MitraAuth\RegisterController@showLoginForm')->name('mitra.login');
    Route::get('register', 'MitraAuth\RegisterController@showRegistrationForm')->name('mitra.daftar');
    Route::post('register', 'MitraAuth\RegisterController@register')->name('mitra.daftar.submit');
    Route::get('password/reset', 'MitraAuth\ForgotPasswordController@showLinkRequestForm')->name('mitra.password.request');
    Route::post('password/email', 'MitraAuth\ForgotPasswordController@sendResetLinkEmail')->name('mitra.password.email');
    Route::get('password/reset/{token}', 'MitraAuth\ResetPasswordController@showResetForm')->name('mitra.password.reset.token');
    Route::post('password/reset', 'MitraAuth\ResetPasswordController@reset')->name('mitra.password.reset');
});
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/', function () {
    if(Auth::check()) {    
        $user = Auth::user();
        $userrole = DB::table('role_user')
                    ->where('user_id', $user->id)
                    ->select('role_id')
                    ->first();
        if ( $userrole->role_id == '1' ) {
               return redirect()->route('admin.dashboard');
        } elseif ( $userrole->role_id == '2' ) {
               return redirect()->route('user.dashboard');
        } elseif ( $userrole->role_id == '3' ) {
               return redirect()->route('partner.dashboard');
        }  
    }
    return redirect()->intended(route('home'));      
})->name('index');

//Detail Partner (Button View More)
Route::get('detail/partner/fotostudio', 'StudioController@detailFotostudio')->name('detail.fotostudio');
Route::get('detail/partner/kebaya', 'StudioController@detailKebaya')->name('detail.kebaya');

//Search at Home by tag & kota
Route::post('/search/fotostudio', 'SearchController@searchFotostudio')->name('search.fotostudio');
Route::post('/search/kebaya', 'SearchController@searchKebaya')->name('search.kebaya');

//Search at navigation box
Route::post('/search', 'SearchController@searchData')->name('search.data');

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
Route::get('/partner/dashboard/{token}', 'PartnerController@bookingActivation');
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
    Route::get('/profil-KU', 'CustomerController@dashboard')->name('dashboard');
    Route::post('/booking/info/', 'CustomerController@showInfo')->name('booking.info');

    // kebaya 
    Route::get('/booking/kebaya/2', 'KebayaBookingController@step2')->name('kebaya.step2');
    Route::post('/booking/kebaya/2', 'KebayaBookingController@submitStep2')->name('kebaya.submit.step2');
    Route::get('/booking/kebaya/2a', 'KebayaBookingController@step2a')->name('kebaya.step2a');
    Route::post('/booking/kebaya/2a', 'KebayaBookingController@submitStep2a')->name('kebaya.submit.step2a');
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

    Route::get('/profile/ps', 'PartnerController@profile')->name('partner.profile');
    
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

    // fotostudio paket
    Route::get('/ps/package/add', 'PackageController@showAddPackage')->name('partner.addpackage');
    Route::post('/ps/package/add', 'PackageController@addPackage')->name('partner.addpackage.submit');
    Route::get('/ps/package/list', 'PackageController@listPackage')->name('partner.listpackage');
    Route::post('/ps/package/edit', 'PackageController@showEditPackage')->name('partner.editpackage');
    Route::post('/ps/package/update', 'PackageController@editPackage')->name('partner.editpackage.submit');
    Route::post('/ps/package/delete', 'PackageController@deletePackage')->name('partner.deletepackage');
    Route::get('/ps/package/update/{$id}', 'PartnerController@UpdatePackagePartner')->name('partner-updatepackage-button');
    Route::get('/ps/package/duration/delete', 'PackageController@deleteDurasi')->name('durasi.delete');

    // Kebaya
    Route::resource('kebaya-package', 'KebayaPackageController');
    Route::get('kebaya-package/biaya/delete', 'KebayaPackageController@deleteBiayaSewa')->name('kebaya.delete.biaya');
    Route::get('/kebaya-package/action/non-active', 'KebayaPackageController@setNonActive')->name('set.nonactive');
    Route::get('/kebaya-package/action/active', 'KebayaPackageController@setActive')->name('set.active');

    Route::get('/profile/4', 'KebayaController@profile')->name('kebaya.profile');
    Route::post('/profile/4', 'KebayaController@submitEditProfile')->name('kebaya.profile.submit');
    Route::post('/profile/tnc/4', 'KebayaController@updateTNC')->name('kebaya.tnc.submit');
    Route::get('/profile/tnc/delete', 'KebayaController@deleteTNC')->name('kebaya.delete.tnc');
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

// Route Jadi Mitra

//Clear Cache facade value:
// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('cache:clear');
//     return '<h1>Cache facade value cleared</h1>';
// });

//Reoptimized class loader:
// Route::get('/optimize', function() {
//     $exitCode = Artisan::call('optimize');
//     return '<h1>Reoptimized class loader</h1>';
// });

//Route cache:
// Route::get('/route-cache', function() {
//     $exitCode = Artisan::call('route:cache');
//     return '<h1>Routes cached</h1>';
// });

//Clear Route cache:

// Route::get('/route-clear', function() {
//     $exitCode = Artisan::call('route:clear');
//     return '<h1>Route cache cleared</h1>';
// });

//Clear View cache:
// Route::get('/view-clear', function() {
//     $exitCode = Artisan::call('view:clear');
//     return '<h1>View cache cleared</h1>';
// });

//Clear Config cache:
// Route::get('/config-cache', function() {
//     $exitCode = Artisan::call('config:cache');
//     return '<h1>Clear Config cleared</h1>';
// });

Route::get('/pageerror', 'PageController@pageerror')->name('page-error');

Route::get('/tnc', 'CustomerController@tnc')->name('term');
Route::get('/privacy', 'CustomerController@privacy')->name('privacy');

Route::get('/json-regencies','CountryController@regencies');
Route::get('/json-districts', 'CountryController@districts');
Route::get('/json-village', 'CountryController@villages');

Route::get('/json-regencies1','BookingController@regencies');
Route::get('/json-districts1', 'BookingController@districts');
Route::get('/json-village1', 'BookingController@villages');
Route::get('/json-village2', 'BookingController@villages2');

Route::get('/json-regencies3', 'KebayaBookingController@regencies3');

