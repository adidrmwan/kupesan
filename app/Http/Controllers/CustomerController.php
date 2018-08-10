<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Booking;
class CustomerController extends Controller
{
    public function dashboard()
    {
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->select('first_name', 'last_name', 'email', 'phone_number')->get();
        // dd($user);

        $pesanan = Booking::where('booking.user_id', $user_id)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, booking_total as total'))
                    ->where('booking.booking_status', '=', 'on_pembayaran')
                    ->get();
        $pesanan_paid = Booking::where('booking.user_id', $user_id)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, booking_total as total'))
                    ->where('booking.booking_status', '=', 'paid')
                    ->get();

        $pesanan_confirmed = Booking::where('booking.user_id', $user_id)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them, booking_total as total'))
                    ->where('booking.booking_status', '=', 'confirmed')
                    ->get();

        $riwayat = Booking::where('booking.user_id', $user_id)
                    ->join('ps_package','booking.package_id','=', 'ps_package.id')
                    ->select(DB::raw('booking.*, ps_package.pkg_name_them, ps_package.pkg_category_them,  booking_total as total'))
                    ->where('booking.booking_status', '=', 'done')
                    ->get();
        // dd($pesanan);
        return view('user.dashboard', ['user' => $user, 'pesanan' => $pesanan, 'pesanan_paid' => $pesanan_paid, 'pesanan_confirmed' => $pesanan_confirmed, 'riwayat' => $riwayat]);
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
    
<<<<<<< HEAD
    
=======
    public function resultstudio()
    {
        return view('resultstudio');
    }
    public function notfound()
    {
        return view('notfound');
    }
>>>>>>> 0a1b373f2ccff741f43d732edafb3dd921950e10
}
