<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VAssignment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('vAssigment', function (Blueprint $table) {
                $table-> bigInteger('assignment_id')->primary;
                $table->string('ticket_id')->foreign;
                $table->string ('user_id');
                $table->date('created_date');
                $table->string ('status',30);
                $table->string ('remark',1000);
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
        Schema::dropIfExists('vAssigment');
    }
}
