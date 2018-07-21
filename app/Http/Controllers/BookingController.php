<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking()
    {
        return view('payment.booking');
    }
    public function review()
    {
        return view('payment.review');
    }
    public function bayar()
    {
        return view('payment.bayar');
    }
    public function proses()
    {
        return view('payment.proses');
    }
}
