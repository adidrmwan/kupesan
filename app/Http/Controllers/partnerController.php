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
    public function addpackagepartner()
    {
        return view('partner.add-package');
    }
    public function editpackagepartner()
    {
        return view('partner.edit-package');
    }
    public function schedulepartner()
    {
        return view('partner.schedule');
    }
    public function testingpartner()
    {
        return view('testing');
    }
}
