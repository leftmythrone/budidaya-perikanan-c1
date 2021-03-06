<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Fish;
use \App\Models\Temporarry;


class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fishs = DB::table('fish')
        ->select('fish.*')
        ->orderBy('id','DESC')
        ->get();

        return view('/pages/company/perikanan/perikanan', [
            // Judul Page
            "title" => "Data Ikan",

            // Pemanggil
            "fish" => $fishs, 
            "number" => 1,
            "edits" => Temporarry::first()->get(), 

            // Looping variable
            "start" => 0,
            "end" => 10,

            // JavaScript
            "js" => 0
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create(Request $request)
    {

        return view('/pages/company/perikanan/perikanan', [
            
            // Judul Page
            "title" => "Data Ikan",

            // Pemanggil
            "fish" => Fish::latest('id')->get(), 
            "number" => 1,
            "edits" => Temporarry::first()->get(), 

            // Looping variable
            "start" => 0,
            "end" => 10,

            // JavaScript
            "js" => 1
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
        DB::table('fish')->insert([
            // Data nama ikan
            'nama_ikan'=>$request->name,

            // Data foto ikan
            'foto_ikan' => $request->image,

            // Data bobot ikan
            'bobot_ikan' => $request->weight,

            // Data panjang ikan
            'panjang_ikan' => $request->length,

            // Data keterangan spesifik ikan
            'keterangan_ikan' => $request->description,

            // Data harga ikan
            'harga_ikan' => $request->price,

            // Data harga ikan
            'tanggal_ikan' => $request->tanggal,

            // Data search ikan
            'slug_ikan' => $request->slug    
        ]);

        return redirect('/perikanan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  Untuk Melihat Data
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

    //  UNTUK MENCARI DATA AGAR UNTUK EDIT
    public function edit($slug_ikan)
    {
        $fish = DB::table('fish')->where('slug_ikan',$slug_ikan)->get();

        return view('/pages/company/perikanan/perikanan', [
            
            // Judul Page
            "title" => "Data Ikan",

            // Pemanggil
            "fish" => Fish::latest('id')->get(),
            
            "edits" => $fish, 
            
            "number" => 1,

            // Looping variable
            "start" => 0,
            "end" => 10,

            // JavaScript
            "js" => 2
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug_ikan)
    {
        DB::table('fish')->where('slug_ikan', $slug_ikan)->update([
            'nama_ikan'=>$request->name,
            'foto_ikan'=>$request->image,
            'bobot_ikan'=>$request->weight,
            'panjang_ikan'=>$request->length,
            'keterangan_ikan'=>$request->description,
            'harga_ikan'=>$request->price,
            'slug_ikan'=>$request->slug,
		]);

        

        return redirect('/perikanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug_ikan)
    {
        
        DB::table('fish')->where('slug_ikan',$slug_ikan)->delete();
    
        return redirect('/perikanan');

    }
}
