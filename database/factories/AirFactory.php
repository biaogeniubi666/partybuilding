<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Air::class, function (Faker $faker) {
    
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'co2' => randomFloat(200, 1000),
        'voc' => randomFloat(0, 0.5),
        'tem' => randomFloat(17, 40),
        'hum' => randomFloat(45, 80),
        'pm25' => randomFloat(0, 350),
        'ch2o' => randomFloat(0, 0.1),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
