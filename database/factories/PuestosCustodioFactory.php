<?php

use App\PuestosCustodio;
use Faker\Generator as Faker;

$factory->define(PuestosCustodio::class, function (Faker $faker) {
    return [
        'puesto_id' => function () {
            factory(App\Puesto::class, 1)->create();

            return App\Puesto::inRandomOrder()->first()->id;
        },
        'custodio_id' => function () {
            factory(App\Custodios::class, 1)->create();

            return App\Custodios::inRandomOrder()->first()->id;
        },
        'fecha_inicio'     => $faker->date($format = 'Y-m-d', $max = 'now'),
        'fecha_fin'        => $faker->date($format = 'Y-m-d', $max = 'now'),
        'horas_trabajadas' => $faker->randomDigit,
        'created_at'       => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'       => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at'       => null,
    ];
});
