<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Temporarry;
use \App\Models\Stock;


class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/company/stok/stok', [
            // Judul Page
            "title" => "Data Stock",

            // Pemanggil
            "stocks" => Stock::latest('created_at')->get(),  
            
            "number" => 1,

            // Looping variable
            "end" => 0,

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
        return view('/pages/company/stok/stok', [
            // Judul Page
            "title" => "Data Stock",

            // Pemanggil
            "stocks" => Stock::latest('created_at')->get(),  
            
            "number" => 1,

            // Looping variable
            "end" => 0
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
        DB::table('users')->insert([
            // Data nama ikan
            'nama_depan_pengguna'=>$request->depan,

            // Data foto ikan
            'nama_belakang_pengguna' => $request->belakang,

            // Data username ikan
            'username' => $request->username,

            // Data foreign ID
            'nomor_pengguna' => $request->nomor,

            // Data slug jadwal
            'alamat_pengguna' => $request->alamat,        
            
            // Data slug jadwal
            'password' => $request->password,

            // Data slug jadwal
            'slug_pengguna' => $request->slug,   

            // Data slug jadwal
            'role_id' => $request->peran,
        ]);

        return redirect('/stok');
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
    public function edit($slug_pengguna)
    {
        return view('/pages/company/stok/stok', [
            // Judul Page
            "title" => "Data Stock",

            // Pemanggil
            "stocks" => Stock::latest('created_at')->get(),  
            
            "number" => 1,

            // Looping variable
            "end" => 0
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug_pengguna)
    {
        DB::table('users')->where('slug_pengguna', $slug_pengguna)->update([
            // Data nama ikan
            'nama_depan_pengguna'=>$request->depan,

            // Data foto ikan
            'nama_belakang_pengguna' => $request->belakang,

            // Data username ikan
            'username' => $request->username,

            // Data foreign ID
            'nomor_pengguna' => $request->nomor,

            // Data slug jadwal
            'alamat_pengguna' => $request->alamat,        
            
            // Data slug jadwal
            'password' => $request->password,

            // Data slug jadwal
            'slug_pengguna' => $request->slug,   

            // Data slug jadwal
            'role_id' => $request->peran,
        ]);

        return redirect('/stok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug_pengguna)
    {
        DB::table('users')->where('slug_pengguna',$slug_pengguna)->delete();
    
        return redirect('/stok');
    }
}
