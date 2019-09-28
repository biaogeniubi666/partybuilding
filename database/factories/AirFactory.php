<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Air::class, function (Faker $faker) {
    
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'co2' => randomFloat(700, 1500),
        'voc' => randomFloat(140, 220),
        'tem' => randomFloat(17, 40),
        'hum' => randomFloat(45, 80),
        'pm25' => randomFloat(0, 75),
        'ch2o' => randomFloat(30, 150),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
