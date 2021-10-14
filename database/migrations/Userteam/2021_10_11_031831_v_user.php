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
         Schema::connection('mysql2')->create('vUser', function (Blueprint $table) {
            $table-> bigInteger('user_id')->primary;
            $table->string('staff_id',32)->unique();
            $table->string ('surname',10);
            $table->string ('fullname',128); 
            $table->string ('email',64)->unique();
            $table->string ('status',32);
            $table->string ('phone_no',32)->unique();
            $table->string ('user_type',16);
            $table->string ('division',32);
            $table->string ('unit',32);
            
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
