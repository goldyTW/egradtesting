<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesansertifikatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesansertifikat', function (Blueprint $table) {
            $table->increments('idSertifikat');
            $table->string('emailPendaftar');
            $table->string('namaPendaftar');
            $table->string('namaEvent');
            $table->string('metode');
            $table->string('noHP')->nullable();
            $table->string('rekening')->nullable();
            $table->string('namaBank')->nullable();
            $table->string('waktuTransfer')->nullable();
            $table->timestamp('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesansertifikat');
    }
}
