<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Partner;
use App\PSPkg;
use App\User;
use App\Booking;
use App\Provinces;
use App\Regencies;
use App\Districts;
use App\Villages;
use App\KebayaBooking;
use App\KebayaProduct;
use App\PartnerDurasi;
class CustomerController extends Controller
{
    public function dashboard()
    {
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->select('first_name', 'last_name', 'email', 'phone_number')->get();
        // dd($user);

        $pesanan_unapprove = Booking::where('booking.user_id', $user_id)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, booking_total as total'))
                    ->where('booking.booking_status', '=', 'un_approved')
                    ->get();
        $kebaya_unapproved = KebayaBooking::where('kebaya_booking.user_id', $user_id)
                    ->join('kebaya_product','kebaya_booking.package_id','=', 'kebaya_product.id')
                    ->join('kebaya_booking_address', 'kebaya_booking_address.booking_id', '=', 'kebaya_booking.booking_id')
                    ->where('kebaya_booking.booking_status', '=', 'un_approved')
                    ->get();
        $pesanan_approved = Booking::where('booking.user_id', $user_id)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, booking_total as total'))
                    ->where('booking.booking_status', '=', 'approved')
                    ->get();
        $kebaya_approved = KebayaBooking::where('kebaya_booking.user_id', $user_id)
                    ->join('kebaya_product','kebaya_booking.package_id','=', 'kebaya_product.id')
                    ->join('kebaya_booking_address', 'kebaya_booking_address.booking_id', '=', 'kebaya_booking.booking_id')
                    ->where('kebaya_booking.booking_status', '=', 'approved')
                    ->get();

        $pesanan_pembayaran = Booking::where('booking.user_id', $user_id)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, booking_total as total'))
                    ->where('booking.booking_status', '=', 'on_pembayaran')
                    ->get();
        $kebaya_pembayaran = KebayaBooking::where('kebaya_booking.user_id', $user_id)
                    ->join('kebaya_product','kebaya_booking.package_id','=', 'kebaya_product.id')
                    ->join('kebaya_booking_address', 'kebaya_booking_address.booking_id', '=', 'kebaya_booking.booking_id')
                    ->where('kebaya_booking.booking_status', '=', 'on_pembayaran')
                    ->get();

        $pesanan_paid = Booking::where('booking.user_id', $user_id)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, booking_total as total'))
                    ->where('booking.booking_status', '=', 'paid')
                    ->get();
        $kebaya_paid = KebayaBooking::where('kebaya_booking.user_id', $user_id)
                    ->join('kebaya_product','kebaya_booking.package_id','=', 'kebaya_product.id')
                    ->join('kebaya_booking_address', 'kebaya_booking_address.booking_id', '=', 'kebaya_booking.booking_id')
                    ->where('kebaya_booking.booking_status', '=', 'paid')
                    ->get();

        $pesanan_confirmed = Booking::where('booking.user_id', $user_id)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, booking_total as total'))
                    ->where('booking.booking_status', '=', 'confirmed')
                    ->get();
        $kebaya_confirmed = KebayaBooking::where('kebaya_booking.user_id', $user_id)
                    ->join('kebaya_product','kebaya_booking.package_id','=', 'kebaya_product.id')
                    ->join('kebaya_booking_address', 'kebaya_booking_address.booking_id', '=', 'kebaya_booking.booking_id')
                    ->where('kebaya_booking.booking_status', '=', 'confirmed')
                    ->get();

        $riwayat = Booking::where('booking.user_id', $user_id)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them,  booking_total as total'))
                    ->where('booking.booking_status', '=', 'done')
                    ->get();
        $kebaya_riwayat = KebayaBooking::where('kebaya_booking.user_id', $user_id)
                    ->join('kebaya_product','kebaya_booking.package_id','=', 'kebaya_product.id')
                    ->join('kebaya_booking_address', 'kebaya_booking_address.booking_id', '=', 'kebaya_booking.booking_id')
                    ->where('kebaya_booking.booking_status', '=', 'done')
                    ->get();

        $biayaKirim = '10000';
        return view('user.dashboard', ['user' => $user, 'pesanan_pembayaran' => $pesanan_pembayaran, 'pesanan_paid' => $pesanan_paid, 'pesanan_confirmed' => $pesanan_confirmed, 'riwayat' => $riwayat], compact('pesanan_unapprove', 'pesanan_approved', 'kebaya_unapproved', 'kebaya_approved', 'kebaya_pembayaran', 'kebaya_paid', 'kebaya_confirmed', 'kebaya_riwayat', 'biayaKirim'));
    }

    public function showInfo(Request $request) {

        $package_id = $request->package_id;
        // dd($request);
        $package = PSPkg::where('id', $package_id)->get();
        $id = PSPkg::where('id', $package_id)->first();

        $partner = Partner::where('user_id', $id->user_id)->first();
        $provinsi = Provinces::where('id', $partner->pr_prov)->first();
        $kota = Regencies::where('id', $partner->pr_kota)->first();
        $kecamatan = Districts::where('id', $partner->pr_kec)->first();
        $fasilitas = DB::table('facilities_partner')->where('user_id', $partner->user_id)->select('*')->first();
        $durasiPaket = PartnerDurasi::where('package_id', $id->id)->get();

        return view('online-booking.fotostudio.step5', ['package' => $package, 'pid' => $package_id, 'partner_id' => $partner->user_id], compact('package', 'partner', 'provinsi', 'kota', 'kecamatan', 'fasilitas', 'durasiPaket'));
 
    }

    public function showKebayaInfo(Request $request) {

        $package_id = $request->package_id;
        // dd($request);
        $package = KebayaProduct::where('id', $package_id)->get();
        $id = KebayaProduct::where('id', $package_id)->first();

        $partner = Partner::where('user_id', $id->partner_id)->first();

        return view('online-booking.kebaya.step5', ['package' => $package, 'pid' => $package_id, 'partner_id' => $partner->user_id], compact('package', 'partner'));
 
    }

    public function studioresult()
    {
        return view('daftar.studioresult');
    }
    public function pesan()
    {
        return view('pesan.pesan');
    }
    public function dashboardadmin()
    {
        return view('superadmin.dashboard-admin');
    }
    public function forgotpassword()
    {
        return view('forgotpassword');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function tnc()
    {
        return view('tnc');
    }

    public function resultstudio()
    {
        return view('resultstudio');
    }
    public function notfound()
    {
        return view('notfound');
    }
}
