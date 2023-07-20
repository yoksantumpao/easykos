<?php

namespace App\Http\Controllers;

use App\Models\PemilikKos;
use Illuminate\Http\Request;
use DB;
class PemilikKosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('pemilik_kos')->get();

        return view('pemilik_kos.index', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pemilik_kos.create');
    }

    public function validateForm($req){
        $req->validate([ 
            'nama_pemilik'=>'required',
            'email_pemilik'=>'required',
            'no_telp'=>'required',
            'nama_bank'=>'required',
            'no_rekening'=>'required',
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
        // dd($request);
       $this->validateForm($request);
        $input = $request->except(['_token']);
        
        $pemilik_kos = DB::table('pemilik_kos')->insert($input);        
        return redirect()->route('pemilik_kos.index');
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PemilikKos  $pemilikKos
     * @return \Illuminate\Http\Response
     */
    public function show(PemilikKos $pemilikKos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PemilikKos  $pemilikKos
     * @return \Illuminate\Http\Response
     */
    public function edit(PemilikKos $pemilikKos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PemilikKos  $pemilikKos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PemilikKos $pemilikKos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PemilikKos  $pemilikKos
     * @return \Illuminate\Http\Response
     */
    public function destroy(PemilikKos $pemilikKos)
    {
        //
    }
}
