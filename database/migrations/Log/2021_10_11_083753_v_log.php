<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql4')->create('vLog', function (Blueprint $table) {
            $table-> bigInteger('log_id')->primary;
            $table->string('log_type',16);
            $table->string('system',32);
            $table->string ('application',32);
            $table->bigInteger ('user_id',32);
            $table->timestamps('timestamps');
            $table->text('log_text');
            $table->string('log_status',16);  
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vLog');
    }
}
