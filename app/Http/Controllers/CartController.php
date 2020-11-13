<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function remove($id)
    {
        // echo "ok";
        // die;
        DB::table('carts')->where('cart_id', $id)->delete();

        return redirect()->back;
    }

    public function list()
    {
        $cart = DB::table('carts')
            ->join('drugs', 'carts.cart_drug_id', '=', 'drugs.drug_id')
            ->where('cart_user_id', Session::get('user_id'))
            ->select('carts.*', 'drugs.drug_id', 'drugs.drug_name', 'drugs.drug_image')
            ->get();

        return view('cart/cart', ['cart' => $cart]);
    }

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
