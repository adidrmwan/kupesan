<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudioController extends Controller
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
