<?php

namespace App\Http\Controllers;

use App\Models\SuperAdminKos;
use Illuminate\Http\Request;
use DB;
class SuperAdminKosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('super_admin_kos')->get();

        return view('super_admin_kos.index', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('super_admin_kos.create');
    }

    public function validateForm($req){
        $req->validate([ 
            'username'=>'required',
            'password'=>'required',
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
        
        $super_Admin_Kos = DB::table('super_admin_kos')->insert($input);        
        return redirect()->route('super_admin_kos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuperAdminKos  $superAdminKos
     * @return \Illuminate\Http\Response
     */
    public function show(SuperAdminKos $superAdminKos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuperAdminKos  $superAdminKos
     * @return \Illuminate\Http\Response
     */
    public function edit(SuperAdminKos $superAdminKos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuperAdminKos  $superAdminKos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuperAdminKos $superAdminKos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuperAdminKos  $superAdminKos
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuperAdminKos $superAdminKos)
    {
        //
    }
}
