<?php

use App\Models\PuestosCustodio;
use Faker\Generator as Faker;

$factory->define(PuestosCustodio::class, function (Faker $faker) {
    return [
        'puesto_id' => function () {
            factory(App\Models\Puesto::class, 1)->create();

            return App\Models\Puesto::inRandomOrder()->first()->id;
        },
        'custodio_id' => function () {
            factory(App\Models\Custodios::class, 1)->create();

            return App\Models\Custodios::inRandomOrder()->first()->id;
        },
        'fecha_inicio'     => $faker->date($format = 'Y-m-d', $max = 'now'),
        'fecha_fin'        => $faker->date($format = 'Y-m-d', $max = 'now'),
        'horas_trabajadas' => $faker->randomDigit,
        'created_at'       => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'       => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at'       => null,
    ];
});
