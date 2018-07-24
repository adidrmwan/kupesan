<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
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
}
