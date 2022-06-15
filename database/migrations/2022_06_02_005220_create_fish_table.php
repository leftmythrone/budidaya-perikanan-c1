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
        Schema::create('fish', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ikan');
            $table->string('foto_ikan')->nullable();
            $table->striing('bobot_ikan');
            $table->string('panjang_ikan');
            $table->string('keterangan_ikan');
            $table->integer('harga_ikan');
            $table->string('slug_ikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fish');
    }
};
