<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onrs', function (Blueprint $table) {
            $table->increments('onr_id');
            $table->integer('pelaku_id');
            $table->string('kategori');
            $table->string('nama_barang');
            $table->text('deskripsi',200);
            $table->integer('harga');
            $table->integer('jumlah');
            $table->string('waktu');
            $table->string('kota_barang');
            $table->string('kota_onr');
            $table->string('onr');
            $table->binary('onr_foto');

            $table->foreign('pelaku_id')->references('user_id')->on('users');
            $table->foreign('kategori')->references('kategori_id')->on('kategoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onrs');
    }
}
