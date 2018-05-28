<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('transaksi_id');
            $table->integer('onr_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('total_harga');
            $table->integer('rate');

            $table->foreign('onr_id')->references('onr_id')->on('onrs');
            $table->foreign('user_id')->references('user_id')->on('users');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
