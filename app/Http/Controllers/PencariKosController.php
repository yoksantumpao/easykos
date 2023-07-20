<?php

namespace App\Http\Controllers;

use App\Models\pencari_kos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\view\View;
use DB;
class PencariKosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('pencari_kos')->get();

        return view('pencari_kos.index', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = DB::table('pencari_kos')->get();
        return view ('pencari_kos.create');
    }

    public function validateForm($req){
        $req->validate([ 
            'nama'=>'required',
            'email'=>'required',
            'no_telp'=>'required',
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
        //
        $this->validateForm($request);
        $input = $request->except(['_token']);
        
        $data = DB::table('pencari_kos')->insert($input);        
        return redirect()->route('pencari_kos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pencari_kos  $pencari_kos
     * @return \Illuminate\Http\Response
     */
    public function show(Pencari_kos $pencari_kos) 
    {
        //
        $data = DB::table('pencari_kos')->get();
        return view('pencari_kos.show',['pencari_kos' => $pencari_kos]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pencari_kos  $pencari_kos
     * @return \Illuminate\Http\Response
     */
    public function edit(Pencari_kos $pencari_kos)
    {
        //$pencari_kos = pencari_kos::findOrFail($id);     
       
        return view('pencari_kos.edit',['pencari_kos' => $pencari_kos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pencari_kos  $pencari_kos
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request) {
    public function update($id, Request $request) {
        // dd($request);
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'password' => 'required',
        ]);

        if ( $validator->passes() ) {
            // Save data here
            //  dd('test');
            //  $pencari_kos->name = $request->name;
            //  $pencari_kos->email = $request->email;
            //  $pencari_kos->no_telp = $request->no_telp;
            //  $pencari_kos->password = $request->password;
            //  $pencari_kos->save();

            // $pencari_kos->fill($request->post())->save();
            $input = $request->except(['_token', '_method']);
            $update = DB::table('pencari_kos')->where('id', $id)->update($input); 
    }
    return redirect()->route('pencari_kos.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pencari_kos  $pencari_kos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $pencari_kos->delete();
        $delete = DB::table('pencari_kos')->where('id', $id)->delete();

        return redirect()->route('pencari_kos.index');
    }
}
