<?php

namespace App\Http\Controllers;

use App\Models\PenghuniKos;
use Illuminate\Http\Request;
use DB;
class PenghuniKosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('penghuni_kos')->get();

        return view('penghuni_kos.index', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('penghuni_kos.create');
    }

    public function validateForm($req){
        $req->validate([ 
            'nama_penghuni'=>'required',
            'email_penghuni'=>'required',
            'no_wa'=>'required',
            'no_telp'=>'required',
            'pekerjaan'=>'required',
            'nik'=>'required',
            'ktp'=>'required',
            'foto_profile'=>'required',
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
        
        $penghuni_kos = DB::table('penghuni_kos')->insert($input);        
        return redirect()->route('penghuni_kos.index');
    }    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PenghuniKos  $penghuniKos
     * @return \Illuminate\Http\Response
     */
    public function show(PenghuniKos $penghuniKos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenghuniKos  $penghuniKos
     * @return \Illuminate\Http\Response
     */
    public function edit(PenghuniKos $penghuniKos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PenghuniKos  $penghuniKos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PenghuniKos $penghuniKos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenghuniKos  $penghuniKos
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenghuniKos $penghuniKos)
    {
        //
    }
}
