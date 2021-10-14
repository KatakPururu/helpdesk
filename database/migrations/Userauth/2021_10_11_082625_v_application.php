<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql3')->create('vApplication', function (Blueprint $table) {
            $table-> bigInteger('app_id')->primary;
            $table->string('application_name',100)->unique();
            $table->string('description',256);
            $table->string ('public_key',128);
            $table->string ('hashed_secret',128);
            $table->string ('token_id',64); 
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vApplication');
    }
}
