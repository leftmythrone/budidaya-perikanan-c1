<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan_pengguna')->nullable();
            $table->string('nama_belakang_pengguna')->nullable();
            $table->string('username')->unique();
            $table->string('nomor_pengguna')->nullable();
            $table->string('alamat_pengguna')->nullable();
            $table->string('password');
            $table->string('slug_pengguna')->unique();
            $table->foreignId('role_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
