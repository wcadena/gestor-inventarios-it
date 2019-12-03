<?php

use App\Models\Bitacora;
use Faker\Generator as Faker;

$factory->define(Bitacora::class, function (Faker $faker) {
    return [
        'id_equipos' => function () {
            factory(App\Models\Equipos::class, 1)->create();

            return App\Models\ModeloEquipo::inRandomOrder()->first()->id;
        },
        'titulo'        => $faker->title,
        'fecha_ingreso' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'custodio_id'   => function () {
            factory(App\Models\Custodios::class, 1)->create();

            return App\Models\Custodios::inRandomOrder()->first()->id;
        },
        'user_id' => function () {
            factory(App\Models\User::class, 1)->create();

            return App\Models\User::inRandomOrder()->first()->id;
        },
        'problema'   => $faker->text,
        'solucion'   => $faker->text,
        'estado'     => $faker->randomElement($array = ['enviado', 'recibido', 'en_reparacion', 'espera_repuesto', 'reparado', 'para_dar_baja', 'en_garantía']),
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at' => null,
    ];
});
