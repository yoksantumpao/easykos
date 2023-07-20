<?php

namespace App\Http\Controllers;

use App\Models\FotoKos;
use Illuminate\Http\Request;
use DB;
class FotoKosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('foto_kos')->get();

         return view('foto_kos.index', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('foto_kos.create');
    }

    public function validateForm($req){
        $req->validate([ 
            'nama_foto'=>'required',
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
        
        $foto_kos = DB::table('foto_kos')->insert($input);        
        return redirect()->route('foto_kos.index');
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FotoKos  $fotoKos
     * @return \Illuminate\Http\Response
     */
    public function show(FotoKos $fotoKos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FotoKos  $fotoKos
     * @return \Illuminate\Http\Response
     */
    public function edit(FotoKos $fotoKos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FotoKos  $fotoKos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FotoKos $fotoKos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FotoKos  $fotoKos
     * @return \Illuminate\Http\Response
     */
    public function destroy(FotoKos $fotoKos)
    {
        //
    }
}
