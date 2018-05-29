<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id')->unique();
            $table->string('user_nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('alamat');
            $table->string('jenis_kel');
            $table->date('tgl_lahir');
            $table->integer('rating')->nullable();
            $table->string('token')->nullable();
            $table->text('aboutme')->nullable();
            $table->integer('no_telp')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
