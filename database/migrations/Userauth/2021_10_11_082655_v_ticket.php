<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql3')->create('vTicket', function (Blueprint $table) {
            $table-> bigInteger('ticket_id')->primary;
            $table->bigInteger('user_id')->foreign;
            $table->string('subject',64);
            $table->string ('category',64);
            $table->string ('type',128);
            $table->string ('description',1000);
            // $table->timestamp('created', $precision = 1);
            $table->string ('priority',64);
            $table->string ('attachment');
            $table->string ('action');
            $table->string ('assign');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vTicket');
    }
}
