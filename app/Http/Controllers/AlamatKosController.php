<?php

namespace App\Http\Controllers;

use App\Models\AlamatKos;
use Illuminate\Http\Request;
use DB;
class AlamatKosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('alamat_kos')->get();

         return view('alamat_kos.index', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alamat_kos.create');
    }

    public function validateForm($req){
        $req->validate([ 
            'provinsi'=>'required',
            'kecamatan'=>'required',
            'kabupaten_kota'=>'required',
            'kode_pos'=>'required',
            'jln_gang'=>'required',
            'lat_long'=>'required',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
       $this->validateForm($request);
        $input = $request->except(['_token']);
        
        $alamat_kos = DB::table('alamat_kos')->insert($input);        
        return redirect()->route('alamat_kos.index');
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlamatKos  $alamatKos
     * @return \Illuminate\Http\Response
     */
    public function show(AlamatKos $alamatKos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlamatKos  $alamatKos
     * @return \Illuminate\Http\Response
     */
    public function edit(AlamatKos $alamatKos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlamatKos  $alamatKos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlamatKos $alamatKos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlamatKos  $alamatKos
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlamatKos $alamatKos)
    {
        //
    }
}
