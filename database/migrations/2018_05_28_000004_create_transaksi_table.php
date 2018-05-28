<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'transaksi';

    /**
     * Run the migrations.
     * @table transaksi
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('transaksi_id');
            $table->char('onr_id', 32)->nullable()->default(null);
            $table->char('pelaku_id', 32)->nullable()->default(null);
            $table->char('user_id', 32)->nullable()->default(null);
            $table->integer('total_harga')->nullable()->default(null);
            $table->integer('rate')->nullable()->default(null);

            $table->index(["onr_id"], 'onr_transaksi');

            $table->index(["pelaku_id"], 'pelaku_transaksi');

            $table->index(["user_id"], 'user_transaksi');


            $table->foreign('onr_id', 'onr_transaksi')
                ->references('onr_id')->on('onr')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('pelaku_id', 'pelaku_transaksi')
                ->references('pelaku_id')->on('onr')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('user_id', 'user_transaksi')
                ->references('user_id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
