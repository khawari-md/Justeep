<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnrTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'onr';

    /**
     * Run the migrations.
     * @table onr
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('onr_id');
            $table->char('pelaku_id', 32)->nullable()->default(null);
            $table->string('nama_barang')->nullable()->default(null);
            $table->text('deskripsi')->nullable()->default(null);
            $table->integer('harga')->nullable()->default(null);
            $table->integer('jumlah')->nullable()->default(null);
            $table->date('waktu')->nullable()->default(null);
            $table->string('kota', 50)->nullable()->default(null);
            $table->string('onr', 7)->nullable()->default(null);
            $table->integer('kategori')->nullable()->default(null);

            $table->index(["pelaku_id"], 'user_action');

            $table->index(["kategori"], 'onr_kategori');


            $table->foreign('kategori', 'onr_kategori')
                ->references('kategori_id')->on('kategori')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('pelaku_id', 'user_action')
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
