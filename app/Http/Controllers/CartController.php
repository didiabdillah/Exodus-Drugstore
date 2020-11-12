<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $qty = DB::table('carts')->where(['cart_user_id' => $request->session()->get('user_id'), 'cart_drug_id' => $request->drug_id])->first();

        if ($qty) {
            $qty = $qty->cart_drug_qty + $request->qty;
        } else {
            $qty = $request->qty;
        }

        $data = [
            'cart_user_id' => $request->session()->get('user_id'),
            'cart_drug_id' => $request->drug_id,
            'cart_drug_price' => $request->drug_price,
            'cart_drug_qty' => $qty,
            'cart_status' => "pending"
        ];

        $where = [
            'cart_user_id' => $request->session()->get('user_id'),
            'cart_drug_id' => $request->drug_id
        ];

        DB::table('carts')
            ->updateOrInsert(
                $where,
                $data
            );

        return redirect()->back();
    }
}
