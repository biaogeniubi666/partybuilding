<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedLedStatusesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 初始化数据
        $ledstatuses = [
            [
                'led1' => false,
                'led2' => false,
                'led3' => false,
            ],
        ];
        DB::table('led_statuses')->insert($ledstatuses);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
