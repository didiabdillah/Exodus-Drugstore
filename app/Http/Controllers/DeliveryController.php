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
}
