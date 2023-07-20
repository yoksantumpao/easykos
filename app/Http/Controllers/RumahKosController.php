<?php

namespace App\Http\Controllers;

use App\Models\RumahKos;
use Illuminate\Http\Request;
use DB;
class RumahKosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('rumah_kos')->get();

        return view('rumah_kos.index', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rumah_kos.create');
       
    }

    public function validateForm($req){
        $req->validate([ 
            'nama_rumah_kos'=>'required',
            'deskripsi_rumah_kos'=>'required',
            'jenis_rumah_kos'=>'required',
            'fasilitas'=>'required',
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
        
        $rumah_kos = DB::table('rumah_kos')->insert($input);        
        return redirect()->route('rumah_kos.index');
    }    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RumahKos  $rumahKos
     * @return \Illuminate\Http\Response
     */
    public function show(RumahKos $rumahKos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RumahKos  $rumahKos
     * @return \Illuminate\Http\Response
     */
    public function edit(RumahKos $rumahKos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RumahKos  $rumahKos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RumahKos $rumahKos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RumahKos  $rumahKos
     * @return \Illuminate\Http\Response
     */
    public function destroy(RumahKos $rumahKos)
    {
        //
    }
}
