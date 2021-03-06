<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use PDF;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use \App\Models\Temporarry;
use \App\Models\Schedule;
use \App\Models\Stock;
use \App\Models\Expense;
use \App\Models\Income;
use \App\Models\History;
use \App\Models\Role;
use \App\Models\User;
use \App\Models\ScheduleCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(2)->create();
        
        \App\Models\Fish::factory(10)->create();
        \App\Models\Stock::factory(1)->create();
        \App\Models\Schedule::factory(4)->create();
        \App\Models\Income::factory(10)->create();
        \App\Models\Expense::factory(10)->create();
        \App\Models\History::factory(5)->create();

        User::create([
            'nama_depan_pengguna' => 'Admin',
            'nama_belakang_pengguna' => 'Berdosa',
            'username' => 'admin',
            'nomor_pengguna' => '089696969696',
            'alamat_pengguna' => 'Jl. Kedung Baruk 69',
            'password' => Hash::make('1'),
            'slug_pengguna' => uniqid('gfg', true),
            'role_id' => 1,
        ]);

        User::create([
            'nama_depan_pengguna' => 'Karyawan',
            'nama_belakang_pengguna' => 'Budak',
            'username' => 'karyawan',
            'nomor_pengguna' => '031775423121',
            'alamat_pengguna' => 'Jl. Kedung Baruk 69',
            'password' => Hash::make('1'),
            'slug_pengguna' => uniqid('gfg', true),
            'role_id' => 2,
        ]);

        User::create([
            'nama_depan_pengguna' => 'Customer',
            'nama_belakang_pengguna' => 'Budak',
            'username' => 'customer',
            'nomor_pengguna' => '023823721212',
            'alamat_pengguna' => 'Jl. Kedung Baruk 69',
            'password' => Hash::make('1'),
            'slug_pengguna' => uniqid('gfg', true),
            'role_id' => 3,
        ]);

        Temporarry::create([
            '404' => 'No Data',
        ]);

        ScheduleCategory::create([
            'jenis_jadwal' => 'Pembersihan',
        ]);

        ScheduleCategory::create([
            'jenis_jadwal' => 'Pangan',
        ]);

        ScheduleCategory::create([
            'jenis_jadwal' => 'Pemijahan',
        ]);


        Role::create([
            'jenis_peran' => 'Admin',
        ]);

        Role::create([
            'jenis_peran' => 'Employee',
        ]);
        
        Role::create([
            'jenis_peran' => 'Customer',
        ]);
        
    }
}
