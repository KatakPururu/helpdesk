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
        {
            Schema::create('vTicket', function (Blueprint $table) {
                $table-> bigInteger('ticket_id')->primary;
                $table->bigInteger('requestor_id')->foreign;
                $table->string ('ticket_no');
                $table->string ('subject',50);
                $table->string ('category',50);
                $table->string ('priority',50);
                $table->string ('description',1000);
                $table->timestamp('created',0);
                $table->string ('status',32); 
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
        Schema::dropIfExists('vTicket');
    }
}
