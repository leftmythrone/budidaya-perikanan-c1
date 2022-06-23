<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\User;
use \App\Models\Role;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')
        ->join('roles', 'roles.id', '=', 'role_id')
        ->select('users.*', 'roles.jenis_peran')
        ->orderBy('users.created_at','DESC')
        ->get();

        return view('/pages/company/pengguna/pengguna', [
            // Judul Page
            "title" => "Pengguna",

            // Pemanggil
            "users" => $user,  
            "roles" => Role::latest('created_at')->get(),  
            
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
        DB::table('users')->insert([
            // Data nama ikan
            'nama_depan_pengguna'=>$request->depan,

            // Data foto ikan
            'nama_belakang_pengguna' => $request->belakang,

            // Data bobot ikan
            'email_pengguna' => $request->email,

            // Data foreign ID
            'nomor_pengguna' => $request->nomor,

            // Data slug jadwal
            'alamat_pengguna' => $request->alamat,
            
            // Data slug jadwal
            'role_id' => $request->peran,        
            
            // Data slug jadwal
            'password_pengguna' => $request->password,

            // Data slug jadwal
            'slug_pengguna' => $request->slug,   
        ]);

        return redirect('/pengguna');
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
        $users = DB::table('users')->where('slug_pengguna',$slug_pengguna)->get();

            return view('/pages/company/pengguna/pengguna', [
                // Judul Page
                "title" => "Pengguna",
    
                // Pemanggil
                "users" => User::latest('created_at')->get(),  
                "roles" => Role::latest('id')->get(),  
                
                "number" => 1,

                "edits" => $users, 
    
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

            // Data bobot ikan
            'email_pengguna' => $request->email,

            // Data foreign ID
            'nomor_pengguna' => $request->nomor,

            // Data slug jadwal
            'alamat_pengguna' => $request->alamat,
            
            // Data slug jadwal
            'role_id' => $request->peran,        
            
            // Data slug jadwal
            'password_pengguna' => $request->password,

            // Data slug jadwal
            'slug_pengguna' => $request->slug,   
        ]);

        return redirect('/pengguna');
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
    
        return redirect('/pengguna');
    }
}
