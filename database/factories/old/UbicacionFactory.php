<?php

use App\Ubicacion;
use Faker\Generator as Faker;

$factory->define(Ubicacion::class, function (Faker $this->faker) {
    return [
        'estacione_id' => function () {
            return App\Estaciones::inRandomOrder()->first()->id;
        },
        'edificio' => $this->faker->address,
        'piso'     => $this->faker->randomDigit,
        'area_id'  => function () {
            return App\Areas::inRandomOrder()->first()->id;
        },
        'imagen'     => $this->faker->image(),
        'created_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at' => null,
    ];
});
