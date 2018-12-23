<?php

use App\Puesto;
use Faker\Generator as Faker;

$factory->define(Puesto::class, function (Faker $faker) {
    return [
        'ubicacion_id' => function () {
            factory(App\Ubicacion::class, 1)->create();

            return App\Ubicacion::inRandomOrder()->first()->id;
        },
        'codigo'     => $faker->randomHtml(),
        'detalle'    => $faker->text,
        'x'          => $faker->randomDigit,
        'y'          => $faker->randomDigit,
        'estado'     => $faker->randomElement($array = ['OCUPADO', 'RESERVADO', 'LIBRE']),
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at' => null,
    ];
});
