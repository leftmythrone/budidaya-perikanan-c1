<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Schedule;
use \App\Models\ScheduleCategory;
use \App\Models\Stock;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = DB::table('schedules')
        ->join('schedule_categories', 'schedule_categories.id', '=', 'schedule_category_id')
        ->select('schedules.*', 'schedule_categories.jenis_jadwal')
        ->orderBy('schedules.created_at','DESC')
        ->get();

        return view('/pages/company/jadwal/jadwal', [
            // Judul Page
            "title" => "Penjadwalan",

            // Pemanggil
            "schedules" => $schedules,  
            "schecats" => ScheduleCategory::latest('id')->get(),  
            
            "stocks" => Stock::latest('id')->get(),  
            "number" => 1,

            // Looping variable
            "end" => 0
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('schedules')->insert([
            // Data nama ikan
            'absen_jadwal'=>$request->name,

            // Data foto ikan
            'keterangan_jadwal' => $request->deskripsi,

            // Data bobot ikan
            'tanggal_jadwal' => $request->tanggal,

            // Data foreign ID
            'schedule_category_id' => $request->kategori,

            // Data slug jadwal
            'slug_jadwal' => $request->slug,   
        ]);

        return redirect('/penjadwalan');
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
