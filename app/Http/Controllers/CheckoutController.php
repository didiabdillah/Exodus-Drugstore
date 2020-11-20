<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $data = DB::table('carts')
            ->join('drugs', 'carts.cart_drug_id', '=', 'drugs.drug_id')
            ->where('cart_user_id', Session::get('user_id'))
            ->select('carts.*', 'drugs.drug_id', 'drugs.drug_name', 'drugs.drug_image')
            ->get();

        $user = DB::table('users')
            ->where('user_id', Session::get('user_id'))
            ->first();

        return view('checkout/checkout', ['data' => $data, 'user' => $user]);
    }
}
