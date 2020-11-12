<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        return view('landing/index');
    }

    public function about()
    {
        return view('landing/tentang');
    }

    public function etalase()
    {
        $etalase = DB::table('drugs')->paginate(9);
        return view('landing/etalase', ['etalase' => $etalase]);
    }

    public function detail($id)
    {
        $etalase = DB::table('drugs')->where('drug_id', $id)->first();

        return view('landing/detail_product', ['etalase' => $etalase]);
    }
}
