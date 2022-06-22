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
            $table->string('nama_depan_pengguna');
            $table->string('nama_belakang_pengguna');
            $table->string('email_pengguna')->unique();
            $table->string('nomor_pengguna');
            $table->string('alamat_pengguna');
            $table->string('password_pengguna');
            $table->string('slug_pengguna');
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
