<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('siswa_id');
            $table->string('nama_siswa');
            $table->string('jk');
            $table->integer('usia');
            $table->text('alamat');
            $table->string('email');
            $table->string('no_telp');
            $table->string('bukti_bayar')->nullable();
            $table->string('siswa_pic');
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
        Schema::dropIfExists('siswa');
    }
}
