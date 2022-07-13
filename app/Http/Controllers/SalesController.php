<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Income;
use \App\Models\Expense;
use \App\Models\Temporarry;


class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('/pages/company/penjualan/penjualan', [
            // Judul Page
            "title" => "Data Penjualan",

            // Pemanggil
            "incomes" => Income::latest('id')->get(),
            
            "expenses" => Expense::latest('id')->get(),
            
            "edits" => Temporarry::first()->get(),  

            
            "number" => 1,

            // Looping variable
            "end" => 0,

            "js" => 0

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function increate()
    {
        return view('/pages/company/penjualan/penjualan', [
            // Judul Page
            "title" => "Data Penjualan",

            // Pemanggil
            "incomes" => Income::latest('id')->get(),
            
            "expenses" => Expense::latest('id')->get(), 
            
            "edits" => Temporarry::first()->get(),  

            
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
    public function instore(Request $request)
    {
        DB::table('incomes')->insert([
            // Data nama ikan
            'deskripsi_pemasukan'=>$request->deskripsi,

            // Data foto ikan
            'tanggal_pemasukan' => $request->tanggal,

            // Data bobot ikan
            'nominal_pemasukan' => $request->nominal,

            // Data panjang ikan
            'slug_pemasukan' => $request->slug,    
        ]);

        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inshow($id)
    {
        return view('/pages/company/penjualan/penjualan', [
            // Judul Page
            "title" => "Data Penjualan",

            // Pemanggil
            "incomes" => Income::latest('id')->get(),
            
            "expenses" => Expense::latest('id')->get(),  
            
            "number" => 1,

            // Looping variable
            "end" => 0

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inedit($slug_pemasukan)
    {

        $edits = DB::table('incomes')->where('slug_pemasukan',$slug_pemasukan)->get();

        return view('/pages/company/penjualan/penjualan', [
            // Judul Page
            "title" => "Data Penjualan",

            // Pemanggil
            "incomes" => Income::latest('id')->get(),
            
            "expenses" => Expense::latest('id')->get(),
            
            "inedits" => $edits,
            
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
    public function inupdate(Request $request, $slug_pemasukan)
    {
        DB::table('incomes')->where('slug_pemasukan', $slug_pemasukan)->update([
            // Data nama ikan
            'deskripsi_pemasukan'=>$request->deskripsi,

            // Data foto ikan
            'tanggal_pemasukan' => $request->tanggal,

            // Data bobot ikan
            'nominal_pemasukan' => $request->nominal,

            // Data panjang ikan
            'slug_pemasukan' => $request->slug,    
        ]);

        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function indestroy($slug_pemasukan)
    {
        DB::table('incomes')->where('slug_pemasukan',$slug_pemasukan)->delete();
    
        return redirect('/penjualan');
    }










    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function excreate()
    {
        return view('/pages/company/penjualan/penjualan', [
            // Judul Page
            "title" => "Data Penjualan",

            // Pemanggil
            "incomes" => Income::latest('id')->get(),
            
            "expenses" => Expense::latest('id')->get(),  
            
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
    public function exstore(Request $request)
    {
        DB::table('expenses')->insert([
            // Data nama ikan
            'deskripsi_pengeluaran'=>$request->deskripsi,

            // Data foto ikan
            'tanggal_pengeluaran' => $request->tanggal,

            // Data bobot ikan
            'nominal_pengeluaran' => $request->nominal,

            // Data panjang ikan
            'slug_pengeluaran' => $request->slug,    
        ]);

        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function exshow($id)
    {
        return view('/pages/company/penjualan/penjualan', [
            // Judul Page
            "title" => "Data Penjualan",

            // Pemanggil
            "incomes" => Income::latest('id')->get(),
            
            "expenses" => Expense::latest('id')->get(),  
            
            "number" => 1,

            // Looping variable
            "end" => 0

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function exedit($slug_pengeluaran)
    {

        $edits = DB::table('expenses')->where('slug_pengeluaran',$slug_pengeluaran)->get();

        return view('/pages/company/penjualan/penjualan', [
            // Judul Page
            "title" => "Data Penjualan",

            // Pemanggil
            "incomes" => Income::latest('id')->get(),
            
            "expenses" => Expense::latest('id')->get(),
            
            "exedits" => $edits,
            
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
    public function exupdate(Request $request, $slug_pengeluaran)
    {
        DB::table('expenses')->where('slug_pengeluaran', $slug_pengeluaran)->update([
            // Data nama ikan
            'deskripsi_pengeluaran'=>$request->deskripsi,

            // Data foto ikan
            'tanggal_pengeluaran' => $request->tanggal,

            // Data bobot ikan
            'nominal_pengeluaran' => $request->nominal,

            // Data panjang ikan
            'slug_pengeluaran' => $request->slug,    
        ]);

        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function exdestroy($slug_pengeluaran)
    {
        DB::table('expenses')->where('slug_pengeluaran',$slug_pengeluaran)->delete();
    
        return redirect('/penjualan');
    }






































    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customer_index()
    {

        return view('/pages/customer/ecommerce/ecommerce', [
            // Judul Page
            "title" => "Data Penjualan",

            // Pemanggil
            "incomes" => Income::latest('id')->get(),
            
            "expenses" => Expense::latest('id')->get(),  
            
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
    public function customer_create()
    {
        return view('/pages/company/penjualan/penjualan', [
            // Judul Page
            "title" => "Data Penjualan",

            // Pemanggil
            "incomes" => Income::latest('id')->get(),
            
            "expenses" => Expense::latest('id')->get(),  
            
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
    public function customer_store(Request $request)
    {
        DB::table('incomes')->insert([
            // Data nama ikan
            'deskripsi_pemasukan'=>$request->deskripsi,

            // Data foto ikan
            'tanggal_pemasukan' => $request->tanggal,

            // Data bobot ikan
            'nominal_pemasukan' => $request->nominal,

            // Data panjang ikan
            'slug_pemasukan' => $request->slug,    
        ]);

        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customer_show($id)
    {
        return view('/pages/company/penjualan/penjualan', [
            // Judul Page
            "title" => "Data Penjualan",

            // Pemanggil
            "incomes" => Income::latest('id')->get(),
            
            "expenses" => Expense::latest('id')->get(),  
            
            "number" => 1,

            // Looping variable
            "end" => 0

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customer_edit($slug_pemasukan)
    {

        $edits = DB::table('incomes')->where('slug_pemasukan',$slug_pemasukan)->get();

        return view('/pages/company/penjualan/penjualan', [
            // Judul Page
            "title" => "Data Penjualan",

            // Pemanggil
            "incomes" => Income::latest('id')->get(),
            
            "expenses" => Expense::latest('id')->get(),
            
            "inedits" => $edits,
            
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
    public function customer_update(Request $request, $slug_pemasukan)
    {
        DB::table('incomes')->where('slug_pemasukan', $slug_pemasukan)->update([
            // Data nama ikan
            'deskripsi_pemasukan'=>$request->deskripsi,

            // Data foto ikan
            'tanggal_pemasukan' => $request->tanggal,

            // Data bobot ikan
            'nominal_pemasukan' => $request->nominal,

            // Data panjang ikan
            'slug_pemasukan' => $request->slug,    
        ]);

        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customer_destroy($slug_pemasukan)
    {
        DB::table('incomes')->where('slug_pemasukan',$slug_pemasukan)->delete();
    
        return redirect('/penjualan');
    }


}