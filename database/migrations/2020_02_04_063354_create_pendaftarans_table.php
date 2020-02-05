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
            $table->string('jeniskelamin');
            $table->string('tempatlahir');
            $table->string('tanggallahir');
            $table->string('nomortelpon');
            $table->string('email');
            $table->string('provinsi');
            $table->string('kab/kota');
            $table->string('kecamatan');
            $table->string('desa/kelurahan');
            $table->string('alamat');
            $table->string('kodepos');
            $table->string('namalengkapayah/ibu');
            $table->string('pekerjaanayah/ibu');
            $table->string('notelprumah');
            $table->string('notelphp');
            $table->string('alamatrumah');

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
