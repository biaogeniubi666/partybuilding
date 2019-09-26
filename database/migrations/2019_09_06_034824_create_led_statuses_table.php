<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLedStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('led_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag');
            $table->integer('data');
            $table->integer('clientid');
            $table->boolean('led1');
            $table->boolean('led2');
            $table->boolean('led3');
            $table->string('remakes')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('led_statuses');
    }
}
