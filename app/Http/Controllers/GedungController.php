<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use Illuminate\Http\Request;
use DB;
class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $data = DB::table('gedungs')->get();

         return view('gedung.index', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gedung.create');
    }

    
    public function validateForm($req){
        $req->validate([ 
            'nama_gedung'=>'required',
            'deskripsi_gedung'=>'required',
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
        
        $gedung = DB::table('gedungs')->insert($input);        
        return redirect()->route('gedung.index');
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function show(gedung $gedung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function edit(gedung $gedung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gedung $gedung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function destroy(gedung $gedung)
    {
        //
    }
}
