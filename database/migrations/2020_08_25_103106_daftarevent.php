<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Daftarevent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('daftarevent', function (Blueprint $table) {
            $table->increments('idPendaftaran');
            $table->string('emailPendaftar');
            $table->string('namaPendaftar');
            $table->string('namaEvent');
            $table->timestamp('created_at')->nullable();
            $table->integer('absensi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('daftarevent');
    }
}
