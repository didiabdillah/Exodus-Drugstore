<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing/index');
    }

    public function about()
    {
        return view('landing/tentang');
    }

    public function etalase()
    {
        return view('landing/etalase');
    }

    public function detail($id)
    {
        return view('landing/detail_product');
    }
}
