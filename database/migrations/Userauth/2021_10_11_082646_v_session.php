<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VSession extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql3')->create('vSession', function (Blueprint $table) {
            $table-> bigInteger('session_id')->primary;
            $table->bigInteger('user_id')->foreign;
            $table->bigInteger('app_id')->foreign;
            $table->bigInteger('subscription_id')->foreign;
            $table->string ('token',128);
            // $table->timestamp('created', $precision = 1);
            // $table->timestamp('expired', $precision = 1);



        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vSession');
    }
}
