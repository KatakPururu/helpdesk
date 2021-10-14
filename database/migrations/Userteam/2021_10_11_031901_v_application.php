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
        Schema::connection('mysql2')->create('vApplication', function (Blueprint $table) {
            $table-> bigInteger('application_id')->primary;
            $table->string('application_name',32)->unique();
            $table->string ('description',128);
            $table->string ('status',32)->unique();
            $table->string ('fullname',128);
            $table->string ('email',64)->unique();
            $table->string ('phone_no',16);
            $table->string ('user_type',16);
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
