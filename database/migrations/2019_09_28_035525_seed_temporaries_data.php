<?php

use App\Models\Temporary;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedTemporariesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $temporaries =[
            [
                "devid" => 1,
                "co2" => 126,
                "voc" => 12,
                "tem" => 12,
                "hum" => 11,
                "pm25" => 13,
                "ch2o" => 12.1,
            ],
            [
                "devid" => 2,
                "co2" => 126,
                "voc" => 12,
                "tem" => 12,
                "hum" => 11,
                "pm25" => 13,
                "ch2o" => 12.1,
            ],
            [
                "devid" => 3,
                "co2" => 126,
                "voc" => 12,
                "tem" => 12,
                "hum" => 11,
                "pm25" => 13,
                "ch2o" => 12.1,
            ],
            [
                "devid" => 4,
                "co2" => 126,
                "voc" => 12,
                "tem" => 12,
                "hum" => 11,
                "pm25" => 13,
                "ch2o" => 12.1,
            ],
            [
                "devid" => 5,
                "co2" => 126,
                "voc" => 12,
                "tem" => 12,
                "hum" => 11,
                "pm25" => 13,
                "ch2o" => 12.1,
            ],
        ];
        DB::table('temporaries')->insert($temporaries);
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
