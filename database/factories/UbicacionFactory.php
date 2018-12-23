<?php

use App\Ubicacion;
use Faker\Generator as Faker;

$factory->define(Ubicacion::class, function (Faker $faker) {
    return [
        'estacione_id' => function () {
            return App\Estaciones::inRandomOrder()->first()->id;
        },
        'edificio' => $faker->address,
        'piso'     => $faker->randomDigit,
        'area_id'  => function () {
            return App\Areas::inRandomOrder()->first()->id;
        },
        'imagen'     => $faker->image(),
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at' => null,
    ];
});
