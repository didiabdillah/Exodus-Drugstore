<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{
    public function index()
    {
        $delivery = DB::table('delivery_services')->get();

        return view('admin/delivery', compact('delivery'));
    }

    public function insert()
    {
        return view('admin/insert_delivery');
    }

    public function store(Request $request)
    {
        $request->validate([
            'delivery_name'  => 'required',
            'service_price'  => 'required',
            'service_name'  => 'required'
        ]);

        $data = [
            'delivery_name' => $request->delivery_name,
            'service_price' => $request->service_price,
            'service_name' => $request->service_name
        ];

        DB::table('delivery_services')->insert($data);

        return redirect('/delivery');
    }
}
