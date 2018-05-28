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
            $table->string('user_nama')->default(null);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('alamat')->default(null);
            $table->char('jenis_kel', 9)->default(null);
            $table->date('tgl_lahir')->default(null);
            $table->string('token')->nullable();
            $table->double('rating')->nullable()->default(null);
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
