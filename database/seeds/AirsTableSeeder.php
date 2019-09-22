<?php

use Illuminate\Database\Seeder;
use App\Models\Air;

class AirsTableSeeder extends Seeder
{
    public function run()
    {
        $airs = factory(Air::class)->times(50)->make()->each(function ($air, $index) {
            if ($index == 0) {
                // $air->field = 'value';
            }
        });

        Air::insert($airs->toArray());
    }

}

