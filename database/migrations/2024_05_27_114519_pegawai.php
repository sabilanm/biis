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
        //
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');
            $table->string('nama_pegawai');
            $table->string('alamat');
            $table->enum('jkel',['Laki-Laki','Perempuan']);
            $table->enum('jenis',['Tetap','Kontrak']);
            $table->enum('unit',['IT','Management']);
            $table->date('tgl_lahir');
            $table->string('no_tlp');
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
        //
    }
};
