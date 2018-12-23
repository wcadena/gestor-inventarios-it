<?php

use Faker\Generator as Faker;
use App\InformeMantoPrevCate;

$factory->define(InformeMantoPrevCate::class, function (Faker $faker) {
    return [
        'categoria' => null,
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at' => null,
    ];
});
