<?php

use App\Models\Ubicacion;
use Faker\Generator as Faker;

$factory->define(Ubicacion::class, function (Faker $faker) {
    return [
        'estacione_id' => function () {
            return App\Models\Estaciones::inRandomOrder()->first()->id;
        },
        'edificio' => $faker->address,
        'piso'     => $faker->randomDigit,
        'area_id'  => function () {
            return App\Models\Areas::inRandomOrder()->first()->id;
        },
        'imagen'     => $faker->image(),
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at' => null,
    ];
});
