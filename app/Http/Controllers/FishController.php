<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Fish;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/perikanan/perikanan', [
            // Judul Page
            "title" => "Nishikigoi",

            // Pemanggil
            "fish" => Fish::latest('id')->get(), 
            "number" => 1,

            // Looping variable
            "start" => 0,
            "end" => 10
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create(Request $request)
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

            // Data search ikan
            'slug_ikan' => $request->slug    
        ]);

        return view('/pages/perikanan/perikanan', [
            
            // Judul Page
            "title" => "Nishikigoi",

            // Pemanggil
            "fish" => Fish::latest('id')->get(), 
            "number" => 1,

            // Looping variable
            "start" => 0,
            "end" => 10
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
