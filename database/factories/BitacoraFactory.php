<?php

use App\Bitacora;
use Faker\Generator as Faker;

$factory->define(Bitacora::class, function (Faker $faker) {
    return [
        'id_equipos' => function () {
            factory(App\Equipos::class, 1)->create();

            return App\ModeloEquipo::inRandomOrder()->first()->id;
        },
        'titulo'        => $faker->title,
        'fecha_ingreso' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'custodio_id'   => function () {
            factory(App\Custodios::class, 1)->create();

            return App\Custodios::inRandomOrder()->first()->id;
        },
        'user_id' => function () {
            factory(App\User::class, 1)->create();

            return App\User::inRandomOrder()->first()->id;
        },
        'problema'   => $faker->text,
        'solucion'   => $faker->text,
        'estado'     => $faker->randomElement($array = ['enviado', 'recibido', 'en_reparacion', 'espera_repuesto', 'reparado', 'para_dar_baja', 'en_garantía']),
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at' => null,
    ];
});
