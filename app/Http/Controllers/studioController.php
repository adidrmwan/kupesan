<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studioController extends Controller
{
    public function studiodetail()
    {
        return view('foto-studio.studiodetail');
    }

    public function studiolist()
    {
        return view('foto-studio.studiolist');
    }

}
