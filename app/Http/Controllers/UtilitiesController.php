<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use \App\Models\Fish;
use \App\Models\Schedule;
use \App\Models\Transaction;
use \App\Models\Report;
use \App\Models\History;
use \App\Models\Stock;
use \App\Models\User;
use \App\Models\Role;




class UtilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/utilities/login', [
            "title" => "Login",
        ]);
    }

    public function authenticate(Request $request)
    {
        // $credentials = 
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('dashboard/admin');
        }

        return back()->with('loginError', 'Login failed!');

        // dd('Berhasil Login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect('/');
    }

/// if(Auth::attempt($credentials)) 
// iku maksud e yak opo sing auth::attemp ??

// iku ngecek apabila akun udah masuk didalam Auth:( autentikasi) maka lakukan ini
    public function register()
    {
        return view('/pages/utilities/register', [
            "title" => "Login",
            "roles" => Role::latest('created_at')->get(),  
        ]);
    }

    public function registore(Request $request)
    {
        // return request()->all();
        $validatedData = $request->validate([
            'nama_depan_pengguna' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'slug_pengguna' => 'required|max:255',
            'password_pengguna' => 'required|min:5|max:255',
            'role_id' => 'required'

        ]);

        // $validatedData['paebssword'] = bcrypt($validatedData['passsword']);

        $validatedData['password_pengguna'] = Hash::make($validatedData['password_pengguna']);

        // $request->session()->flash('Success', 'Regist success');

        User::create($validatedData);

        // dd($validatedData);

        return redirect('/');

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
