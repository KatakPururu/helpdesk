<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VActivity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('vActivity', function (Blueprint $table) {
                $table-> bigInteger('activity_id')->primary;
                $table->string('ticket_id',32)->foreign;
                $table->string ('activity_name',32);
                $table->string ('description',128);
                $table->date('start_date');
                $table->date('completion_date');
            });
            
        }   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vActivity');

    }
}
