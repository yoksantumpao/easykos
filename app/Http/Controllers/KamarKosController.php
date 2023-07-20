<?php

namespace App\Http\Controllers;

use App\Models\KamarKos;
use Illuminate\Http\Request;
use DB;
class KamarKosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $data = DB::table('kamar_kos')->get();

         return view('kamar_kos.index', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('kamar_kos.create');
    }

    
    public function validateForm($req){
        $req->validate([ 
            'nomor_kamar'=>'required',
            'jenis_kamar'=>'required',
            'harga_kamar'=>'required',
            'ukuran_kamar'=>'required',
            'jumlah_kamar'=>'required',
            'fasilitas_kamar'=>'required',
            'foto_kamar'=>'required',
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
       $this->validateForm($request);
        $input = $request->except(['_token']);
        
        $kamar_kos = DB::table('kamar_kos')->insert($input);        
        return redirect()->route('kamar_kos.index');
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KamarKos  $kamarKos
     * @return \Illuminate\Http\Response
     */
    public function show(KamarKos $kamarKos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KamarKos  $kamarKos
     * @return \Illuminate\Http\Response
     */
    public function edit(KamarKos $kamarKos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KamarKos  $kamarKos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KamarKos $kamarKos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KamarKos  $kamarKos
     * @return \Illuminate\Http\Response
     */
    public function destroy(KamarKos $kamarKos)
    {
        //
    }
}
