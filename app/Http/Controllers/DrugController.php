<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drugs = DB::table('drugs')->get();

        return view('admin/obat', ['drugs' => $drugs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/insert_obat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'drug_name' => $request->drug_name,
            'drug_price' => $request->drug_price,
            'drug_stock' => $request->drug_stock,
            'drug_description' => $request->drug_desc,
            'drug_image' => 'test.jpeg'
        ];

        DB::table('drugs')->insert($data);

        return redirect('/drug');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drug = DB::table('drugs')->where('drug_id', $id)->first();

        return view('admin/edit_obat', ['drug' => $drug]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'drug_name' => $request->drug_name,
            'drug_price' => $request->drug_price,
            'drug_stock' => $request->drug_stock,
            'drug_description' => $request->drug_desc,
            'drug_image' => 'test.jpeg'
        ];

        DB::table('drugs')
            ->where('drug_id', $id)
            ->update($data);

        return redirect('/drug');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('drugs')->where('drug_id', $id)->delete();

        return redirect('/drug');
    }
}
