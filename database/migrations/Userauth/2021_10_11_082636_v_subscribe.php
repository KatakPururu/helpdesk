<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VSubscribe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql3')->create('vSubscribe', function (Blueprint $table) {
            $table-> bigInteger('subscription_id')->primary;
            $table->bigInteger('user_id')->foreign;
            $table->bigInteger('app_id')->foreign;
            $table->string ('role',32);
            $table->string ('privilege',32); 
            $table->string ('subscription_status',32);
            $table->boolean ('multi_login');
            // $table->timestamps('created',$precision = 1);
            $table->bigInteger ('lifetime_sec');  
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vSubscribe');
    }
}
