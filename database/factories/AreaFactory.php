<?php

use App\Area;
use Faker\Generator as Faker;

$factory->define(Area::class, function (Faker $faker) {
    return [
        'area'       => $faker->name,
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'empresa'    => env('EMP_PRINCIPAL', 'Ecuatask'),
    ];
});
