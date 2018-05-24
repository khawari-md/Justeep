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
            $table->integer('kategori_id');
            $table->string('nama_barang');
            $table->text('deskripsi',200);
            $table->integer('harga');
            $table->integer('jumlah');
            $table->string('waktu');
            $table->string('kota');
            $table->string('onr');
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
