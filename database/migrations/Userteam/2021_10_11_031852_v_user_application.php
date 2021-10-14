<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VUserApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('vUserApplication', function (Blueprint $table) {
            $table-> bigInteger('id')->primary;
            $table->string('user_id',32)->unique()->foreign;
            $table->string('application_id',128)->foreign;
            $table->string ('role',32); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vUserApplication');

    }
}
