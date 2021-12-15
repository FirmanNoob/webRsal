<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function katasambutan()
    {
        return view('front.katasambutan');
    }
    public function visi()
    {
        return view('front.visi');
    }
}
