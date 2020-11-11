<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
        $request->validate([
            'drug_name'  => 'required',
            'drug_price'  => 'required',
            'drug_stock'  => 'required',
            'drug_desc'  => 'required',
            'drug_image'  => 'required'
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('drug_image');

        //Lokasi Foto 
        $destination = "assets/img/etalase/";

        $data = [
            'drug_name' => $request->drug_name,
            'drug_price' => $request->drug_price,
            'drug_stock' => $request->drug_stock,
            'drug_description' => $request->drug_desc,
            'drug_image' => $file->getClientOriginalName()
        ];

        $file->move($destination, $file->getClientOriginalName());
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
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('drug_image');

        //Lokasi Foto 
        $destination = "assets/img/etalase/";

        $gambarOld =  DB::table('drugs')->where('drug_id', $id)->first();
        $image_path = public_path("assets/img/etalase/" . $gambarOld->drug_image);

        //Inisiasi Data Gambar
        if ($file != NULL) {
            $gambar = $file->getClientOriginalName();
            File::delete($image_path);
            $file->move($destination, $file->getClientOriginalName());
        } else {
            $gambar = $gambarOld->drug_image;
        }

        $data = [
            'drug_name' => $request->drug_name,
            'drug_price' => $request->drug_price,
            'drug_stock' => $request->drug_stock,
            'drug_description' => $request->drug_desc,
            'drug_image' => $gambar
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
        $gambarOld =  DB::table('drugs')->where('drug_id', $id)->first();
        $image_path = public_path("assets/img/etalase/" . $gambarOld->drug_image);

        DB::table('drugs')->where('drug_id', $id)->delete();
        File::delete($image_path);

        return redirect('/drug');
    }
}
