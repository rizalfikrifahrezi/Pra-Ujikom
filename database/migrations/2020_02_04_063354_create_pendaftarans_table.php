<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pilihangkatan');
            $table->string('namalengkap');
            $table->string('tempatlahir');
            $table->string('tanggallahir');
            $table->string('nomortelpon');
            $table->string('email');
            $table->string('provinsi');
            $table->string('kabkota');
            $table->string('kecamatan');
            $table->string('desakelurahan');
            $table->string('alamatlengkap');
            $table->string('kodepos');
            $table->string('namalengkapayah');
            $table->string('namalengkapibu');
            $table->string('pekerjaanayah');
            $table->string('pekerjaanibu');
            $table->string('notelprumah');
            $table->string('notelphp');

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
        Schema::dropIfExists('pendaftarans');
    }
}
