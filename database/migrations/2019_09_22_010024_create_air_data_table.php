<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_data', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->text('CO2')->nullable();
            $table->text('VOC')->nullable();
            $table->text('HUMI')->nullable();
            $table->text('TEMP')->nullable();
            $table->text('PM25')->nullable();
            $table->text('CH2O')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('air_data');
    }
}
