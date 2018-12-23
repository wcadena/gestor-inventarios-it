<?php

use Faker\Generator as Faker;
use App\OpcionesCheckList;

$factory->define(OpcionesCheckList::class, function (Faker $faker) {
    return [
        'area_id' => null,
        'atributo' => null,
        'mandatorio' => null,
        'tipo' => null,
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
