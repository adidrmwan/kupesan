<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\PSPkg;
use Illuminate\Support\Facades\Input;
use App\Jam;
use App\Partner;
use App\PartnerDurasi;
use App\Booking;
use Carbon\Carbon;
use App\BookingCheck;
use File;
use Image;
use Mail;
use App\Provinces;
use App\Regencies;
use App\Districts;
use App\Villages;
use App\KebayaProduct;
use App\KebayaUkuran;
use App\KebayaCheck;
use App\KebayaBooking;
use App\KebayaBookingAddress;
use App\KebayaBiayaSewa;
use DateTime;
class KebayaBookingController extends Controller
{

    public function step1(Request $request) {

        $package_id = $request->package_id;

        $package = KebayaProduct::where('id', $package_id)->get();
        $package2 = KebayaProduct::find($package_id);

        $partner = Partner::where('user_id', $package2->partner_id)->first();
        $partner_id = $partner->user_id;

        if (Auth::user()) {
            return redirect()->intended(route('kebaya.step2', ['package_id' => $package_id]));
        }

        $biayaSewa = KebayaBiayaSewa::where('fk_package_id', $package2->id)->get();
        return view('online-booking.kebaya.step1', ['package' => $package, 'pid' => $package_id, 'partner_id' => $partner_id], compact('package', 'partner', 'biayaSewa'));
 
    }

    public function step2(Request $request) {

        $package_id = $request->package_id;

        $package = KebayaProduct::where('id', $package_id)->get();
        $package2 = KebayaProduct::find($package_id);

        $partner = Partner::where('user_id', $package2->partner_id)->first();
        $partner_id = $partner->user_id;

        $pu = KebayaUkuran::where('package_id', $package_id)->get();

        $booking_check = KebayaCheck::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking_check.package_id')->where('kebaya_booking_check.package_id', $package_id)->where('kebaya_booking_check.kuantitas', '=', $package2->quantity)->select('booking_date as disableDates')->get();
        $disableDates = array_column($booking_check->toArray(), 'disableDates');
        $biayaSewa = KebayaBiayaSewa::where('fk_package_id', $package2->id)->get();

        if(empty($request->booking_date)) {
            return view('online-booking.kebaya.step2', compact('package','package_id','partner_id','partner', 'pu', 'disableDates', 'biayaSewa'));
        }
 
    }

    public function submitStep2(Request $request)
    {
        $package_id = $request->package_id;
        $start_date = $request->start_date;
        $time = '00:00:00';
        $start_date = date('Y-m-d H:i:s', strtotime("$start_date $time"));

        $package = KebayaProduct::find($package_id);

        $partner = Partner::where('user_id', $package->partner_id)->first();
        $partner_id = $partner->user_id;

        if(empty($booking_id)) {
            $booking = new KebayaBooking();
            $booking->user_id = Auth::user()->id;
            $booking->package_id = $package_id;
            $booking->partner_id = $package->partner_id;
            $booking->start_date = $start_date;
            $booking->booking_status = 'cek_ketersediaan_online';
            $booking->save();
            $booking_id = $booking->booking_id;
        }
        
        return redirect()->intended(route('kebaya.step2a', ['bid' => $booking_id]));
        
    }

    public function step2a(Request $request) 
    {
        $booking_id = $request->bid;
        $booking = KebayaBooking::find($booking_id);

        $package_id = $booking->package_id;
        $partner_id = $booking->partner_id;

        $package = KebayaProduct::where('id', $package_id)->get();
        $package2 = KebayaProduct::find($package_id);
        $partner = Partner::where('user_id', $partner_id)->first();
        $pu = KebayaUkuran::where('package_id', $package_id)->get();
        $durasiSewa = KebayaBiayaSewa::where('fk_package_id', $package_id)->get();
        $tanggalPenerimaan = $booking->start_date;

        $booking_check = KebayaCheck::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking_check.package_id')->where('kebaya_booking_check.package_id', $package_id)->where('kebaya_booking_check.kuantitas', '=', $package2->quantity)->select('booking_date as disableDates')->get();
        $disableDates = array_column($booking_check->toArray(), 'disableDates');
        $biayaSewa = KebayaBiayaSewa::where('fk_package_id', $package2->id)->get();

        return view('online-booking.kebaya.step2a', compact('package','package_id','partner_id','partner', 'pu', 'disableDates', 'durasiSewa', 'tanggalPenerimaan', 'booking_id', 'biayaSewa'));
    }

    public function submitStep2a(Request $request){
        $booking_id = $request->booking_id;
        $durasi_paket = explode(',', $request->durasi_paket, 2); 
        $durasi_sewa = $durasi_paket[0];

        $booking = KebayaBooking::find($booking_id);
        $package_id = $booking->package_id;
        $start_date = $booking->start_date;
        $end_date = $start_date->addDays($durasi_sewa-1);
        $edate = date('Y-m-d', strtotime("$end_date"));
        $endtime = '23:59:59';
        $end_date = date('Y-m-d H:i:s', strtotime("$edate $endtime"));
        $booking->end_date = $end_date;
        $booking->save();

        for ($i=0; $i < $durasi_sewa; $i++) { 
            $booking_date = $booking->start_date->addDays($i);
            $cek_booking_sdate = KebayaCheck::where('package_id', $package_id)->where('booking_date', $booking_date)->first();
            if (empty($cek_booking_sdate)) {
                $booking_check = new KebayaCheck();
                $booking_check->package_id = $package_id;
                $booking_check->booking_date = $booking_date;
                $booking_check->save();
            }
        }
            return redirect()->intended(route('kebaya.step3', ['bid' => $booking_id]));
    }

    public function step3(Request $request)
    {
        $booking_id = $request->bid;
        $booking = KebayaBooking::find($booking_id);
        $package_id = $booking->package_id;
        $package = KebayaProduct::where('id', $package_id)->get();
        $package2 = KebayaProduct::where('id', $package_id)->first();
        $partner = Partner::where('user_id', $package2->partner_id)->first();
        $partner_id = $package2->partner_id;

        $provinces = Provinces::where('name', 'JAWA TIMUR')->get();
        $pu = KebayaUkuran::where('package_id', $package_id)->get();

        $booking_start_date = date('Y-m-d', strtotime("$booking->start_date"));
        $booking_end_date = date('Y-m-d', strtotime("$booking->end_date"));

        $kebaya_booking_check = KebayaCheck::where('package_id', $package_id)->whereBetween('booking_date', [$booking_start_date, $booking_end_date])->get(['kuantitas']);

        $kuantitas = '0';
        // cek berapa banyak busana yang sudah terbooking pada tanggal yang dipilih, ambil yang paling maks
        foreach ($kebaya_booking_check as $key => $value) {
            if ($value->kuantitas > $kuantitas) {
                    $kuantitas = $value->kuantitas;
                }    
        }
        $quantity2 = $package2->quantity - $kuantitas;
        $provinsi = Provinces::where('id', $partner->pr_prov)->first();
        $kota = Regencies::where('id', $partner->pr_kota)->first();
        $kecamatan = Districts::where('id', $partner->pr_kec)->first();
        $biayaSewa = KebayaBiayaSewa::where('fk_package_id', $package2->id)->get();

        if ($quantity2 == '0') {
            return redirect()->route('kebaya.step2', ['package_id' => $package_id])->with('warning', 'Stok kebaya sudah tidak tersedia.');
        }

        return view('online-booking.kebaya.step3', compact('partner', 'quantity2', 'partner_id', 'package_id', 'package', 'package2', 'booking', 'booking_id', 'pu', 'provinces', 'provinsi', 'kota', 'kecamatan', 'biayaSewa'));    

    }

    public function submitStep3(Request $request)
    {
        $quantity = $request->quantity;
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->first_name.' '.Auth::user()->last_name;
        $user_email = Auth::user()->email;
        $user_nohp = Auth::user()->phone_number;

        $booking_id = $request->booking_id;
        $booking = KebayaBooking::find($booking_id);

        $package_id = $booking->package_id;
        $package = KebayaProduct::where('id', $package_id)->get();
        $package2 = KebayaProduct::where('id', $package_id)->first();
        $partner = Partner::where('user_id', $package2->partner_id)->first();
        $provinsi = Provinces::where('id', $partner->pr_prov)->first();
        $kota = Regencies::where('id', $partner->pr_kota)->first();
        $kecamatan = Districts::where('id', $partner->pr_kec)->first();

        $booking_start_date = date('Y-m-d', strtotime("$booking->start_date"));
        $booking_end_date = date('Y-m-d', strtotime("$booking->end_date"));
        
        $fdate = $booking->start_date;
        $tdate = $booking->end_date;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $total = $package2->price * $quantity;
        $deposit = $package2->deposit;
        $max_quantity = $package2->quantity;

        $kebaya_booking_check = KebayaCheck::where('package_id', $package_id)->whereBetween('booking_date', [$booking_start_date, $booking_end_date])->get();

        if(empty($booking->user_name)) {

            foreach ($kebaya_booking_check as $key => $value) {
                if (($quantity + $value->kuantitas) <= $max_quantity) {
                    $booking_check = KebayaCheck::find($value->id);
                    $booking_check->kuantitas = $booking_check->kuantitas + $quantity;
                    $booking_check->save();
                } else {
                    return redirect()->route('kebaya.step2', ['package_id' => $package_id])->with('warning', 'Stok kebaya sudah tidak tersedia.');
                }

            }

            $booking->user_name = $user_name;
            $booking->user_nohp = $user_nohp;
            $booking->user_email = $user_email;
            $booking->quantity = $quantity;
            $booking->booking_price = $package2->price;
            $booking->booking_total = $total;
            $booking->deposit = $deposit;
            $booking->partner_name = $package2->partner_name;
            $booking->alamat = $request->alamat;
            $booking->save();

            if($request->lokasiAmbil == 'partnerku') {
                $alamat_booking = new KebayaBookingAddress();
                $alamat_booking->user_id = $booking->user_id;
                $alamat_booking->booking_id = $booking->booking_id;
                $alamat_booking->pr_addr = $partner->pr_addr;
                $alamat_booking->pr_prov = $partner->pr_prov;
                $alamat_booking->pr_kota = $partner->pr_kota;
                $alamat_booking->pr_kel = $partner->pr_kel;
                $alamat_booking->pr_kec = $partner->pr_kec;
                $alamat_booking->pr_postal_code = $partner->pr_postal_code;
                $alamat_booking->flag = $request->lokasiAmbil;
                $alamat_booking->save();
            } elseif ($request->lokasiAmbil == 'userku') {
                $alamat_booking = new KebayaBookingAddress();
                $alamat_booking->user_id = $booking->user_id;
                $alamat_booking->booking_id = $booking->booking_id;
                $alamat_booking->pr_addr = $request->pr_addr;
                $alamat_booking->pr_prov = $request->pr_prov;
                $alamat_booking->pr_kota = $request->pr_kota;
                $alamat_booking->pr_kel = $request->pr_kel;
                $alamat_booking->pr_kec = $request->pr_kec;
                $alamat_booking->pr_postal_code = $request->pr_postal_code;
                $alamat_booking->flag = $request->lokasiAmbil;
                $alamat_booking->save();
            }

        }

        $detail_pesanan = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                            ->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')
                            ->where('booking_id', $request->booking_id)
                            ->select('kebaya_category.category_name', 'kebaya_product.*', 'kebaya_booking.*', 'kebaya_booking.quantity as kuantitas')
                            ->get();

        $alamat_kirim = KebayaBookingAddress::where('booking_id', $booking_id)
                            ->where('user_id', $user_id)->first();
        $provinsi_alamat = Provinces::where('id', $alamat_kirim->pr_prov)->first();
        $kota_alamat = Regencies::where('id', $alamat_kirim->pr_kota)->first();
        $kecamatan_alamat = Districts::where('id', $alamat_kirim->pr_kec)->first();

        $biayaKirim = '10000';
        $biayaSewa = KebayaBiayaSewa::where('fk_package_id', $package2->id)->get();

        return view('online-booking.kebaya.step4', ['partner' => $partner], compact('package_id', 'package', 'booking', 'booking_id', 'detail_pesanan', 'provinsi', 'kota', 'kecamatan', 'alamat_kirim', 'provinsi_alamat', 'kota_alamat', 'kecamatan_alamat', 'biayaKirim', 'biayaSewa')); 
    }

    public function submitStep4(Request $request)
    {
        $booking = KebayaBooking::find($request->booking_id);
        $partner = Partner::where('user_id', $booking->partner_id)->first();
        $package = KebayaProduct::where('id', $booking->package_id)->get();
        $package2 = KebayaProduct::where('id', $booking->package_id)->first();
        
        if ($booking->booking_status == 'cek_ketersediaan_online' || $booking->booking_status == 'un_approved') {
            $book = KebayaBooking::where('booking_id', $booking->booking_id)->select('booking_id')->first()->toArray();
            $user = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                    ->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')
                    ->join('kebaya_booking_address', 'kebaya_booking_address.booking_id', '=', 'kebaya_booking.booking_id')
                    ->join('partner', 'kebaya_booking.partner_id', '=', 'partner.user_id')
                    ->join('users', 'users.id', '=', 'partner.user_id')
                    ->select('kebaya_category.category_name', 'kebaya_product.*', 'kebaya_booking.*', 'kebaya_booking.quantity as kuantitas', 'partner.pr_name', 'users.email', 'users.id',  'users.first_name', 'users.last_name', 'kebaya_booking_address.flag')
                    ->where('kebaya_booking.booking_id', $booking->booking_id)->first()->toArray();
            if($booking->booking_status != 'un_approved') {
                $user['link'] = str_random(35);
                DB::table('booking_activations_kebaya')->insert(['id_user'=>$user['id'], 'booking_id'=>$book['booking_id'], 'token'=>$user['link']]);
                Mail::send('emails.booking-notification.kebaya', $user, function($message) use ($user){
                  $message->to($user['email']);
                  $message->subject('Kupesan.id | Notifikasi Pesanan Pelanggan');
                });
                if ($booking->booking_status == 'cek_ketersediaan_online') {
                    $booking->booking_status = 'un_approved';
                    $booking->save();
                }
            }
        } else {
            return redirect()->route('dashboard');
        }

        $biayaSewa = KebayaBiayaSewa::where('fk_package_id', $package2->id)->get();
        

        return view('online-booking.kebaya.step5', compact('partner', 'package', 'biayaSewa'));
    }

    public function step6(Request $request)
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $booking = KebayaBooking::find($request->bid);
            $package_id = $booking->package_id;
            $partner_id = $booking->partner_id;
            $bid = $booking->booking_id;

            $package = KebayaProduct::where('id', $package_id)->get();
            $partner = Partner::where('user_id', $partner_id)->first();
            $provinsi = Provinces::where('id', $partner->pr_prov)->first();
            $kota = Regencies::where('id', $partner->pr_kota)->first();
            $kecamatan = Districts::where('id', $partner->pr_kec)->first();

            $review = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                ->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')
                ->select('kebaya_category.category_name', 'kebaya_product.*', 'kebaya_booking.*', 'kebaya_booking.quantity as kuantitas')
                ->where('booking_id', $bid)->get();

            $alamat_kirim = KebayaBookingAddress::where('booking_id', $bid)
                            ->where('user_id', $user_id)->first();
            $provinsi_alamat = Provinces::where('id', $alamat_kirim->pr_prov)->first();
            $kota_alamat = Regencies::where('id', $alamat_kirim->pr_kota)->first();
            $kecamatan_alamat = Districts::where('id', $alamat_kirim->pr_kec)->first();

            $biayaKirim = '10000';
            $biayaSewa = KebayaBiayaSewa::where('fk_package_id', $package_id)->get();
            return view('online-booking.kebaya.step6', compact('bid', 'review', 'package','partner', 'provinsi', 'kota', 'kecamatan', 'alamat_kirim', 'provinsi_alamat', 'kota_alamat', 'kecamatan_alamat', 'biayaKirim', 'biayaSewa'));
        }

        return redirect()->route('index');
    }

    public function step7(Request $request)
    {   
        $mytime = Carbon::now();
        $waktu = $mytime->toDateTimeString();        
        $bid = $request->bid;
        $booking = KebayaBooking::find($request->bid);

        if(!empty($booking->upload_bukti_at)) {
            return redirect()->intended(route('kebaya.step9', ['bid' => $bid])); 
        }

        if(empty($booking->booking_at)) {
            $booking_at = date("Y-m-d H:i:s", strtotime("+1 hours"));
            $booking->booking_at = $booking_at;
            $booking->save();
        }
        
        if($waktu >= $booking->booking_at) {
            $booking->booking_status = 'booking-failed';
            $booking->save();
            return view('online-booking.kebaya.failed');
        }

        $booking->booking_status = 'on_pembayaran';
        $booking->save();
        $deadline = $booking->booking_at;

        $review = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')
                ->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')
                ->select('kebaya_category.category_name', 'kebaya_product.*', 'kebaya_booking.*', 'kebaya_booking.quantity as kuantitas')
                ->where('booking_id', $bid)->get();

        return view('online-booking.kebaya.step7', compact('review', 'bid', 'deadline'));
    }

    public function step8(Request $request)
    {   
        $bid = $request->bid;
        $booking = KebayaBooking::find($bid);
        if(!empty($booking->upload_bukti_at)) {
            return redirect()->intended(route('kebaya.step9', ['bid' => $bid])); 
        }
        return view('online-booking.kebaya.step8', compact('bid'));
    }

    public function uploadBukti(Request $request)
    {   

        $mytime = Carbon::now();
        $time = $mytime->toDateTimeString();    
        $bid = $request->bid;
        $booking = KebayaBooking::find($bid);
        if(empty($booking->upload_bukti_at)) {
            $booking->bukti_transfer = 'Kebaya_' . $booking->booking_date . '_' . $booking->booking_id . '_' . $booking->user_id. '_' . $booking->booking_total;
            $booking->upload_bukti_at = $time;
            $booking->booking_status = 'paid';
            $booking->save();
        }

        if ($request->hasFile('bukti_pembayaran')) {
            $foto_new = $booking->bukti_transfer;
            if( File::exists(public_path('/bukti_pembayaran/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/bukti_pembayaran/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/bukti_pembayaran/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/bukti_pembayaran/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/bukti_pembayaran/' . $foto_new .'.png' ))){
                File::delete(public_path('/bukti_pembayaran/' . $foto_new .'.png' ));
            }

            $foto = $request->file('bukti_pembayaran');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/bukti_pembayaran/' . $foto_name ) );
            $booking = KebayaBooking::find($bid);
            $booking->save();
        }    
        
        
        return redirect()->intended(route('kebaya.step9', ['bid' => $bid])); 
    }

    public function step9(Request $request)
    { 
        $bid = $request->bid;
        $review = KebayaBooking::join('kebaya_product', 'kebaya_product.id', '=', 'kebaya_booking.package_id')->join('kebaya_category', 'kebaya_category.id', '=', 'kebaya_product.category')->where('booking_id', $bid)->get();

        return view('online-booking.kebaya.step9', ['review' => $review]);
    }

    public function regencies3()
    {
        $durasiPaket = Input::get('durasiPaket');
        $tanggalPenerimaan = Input::get('tanggalPenerimaan');
        // $tanggalPengembalian = $tanggalPenerimaan->addDays($durasiPaket-1);
        $regencies = Jam::all();

        return response()->json($regencies);
    }

}
