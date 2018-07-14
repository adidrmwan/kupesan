<?php

namespace App\Http\Controllers\Mitra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MitraController extends Controller
{
    public function index()
    {
        return view('mitra.jadi-mitra');
    }

}
