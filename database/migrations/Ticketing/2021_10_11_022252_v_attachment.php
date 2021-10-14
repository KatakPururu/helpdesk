<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VAttachment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('vAttachment', function (Blueprint $table) {
                $table-> bigInteger('attachment_id')->primary;
                $table->string('ticket_id')->foreign;
                $table->bigInteger ('attachment_name');
                // $table->dropSpatialIndex('location');
                $table->string ('type',50);
                $table->dateTime('created_date', 0);	
                $table->string ('description',1000);
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
        Schema::dropIfExists('vAttachment');

    }
}
