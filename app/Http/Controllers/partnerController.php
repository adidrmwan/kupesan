<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class partnerController extends Controller
{
    public function homepartner()
    {
        return view('partner.home');
    }
    public function userpartner()
    {
        return view('partner.user');
    }
}
