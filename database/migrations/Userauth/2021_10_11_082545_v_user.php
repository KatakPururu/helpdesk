<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql3')->create('vUser', function (Blueprint $table) {
            $table-> bigInteger('user_id')->primary;
            $table->string('login',32)->unique();
            $table->string('hashed_passphrase',128);
            $table->string ('staff_id',32)->unique();
            $table->string('fullname',128);
            $table->string('email',64);
            $table->string('phone_no',32);
            $table->string('user_type',16);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vUser');
    }
}
