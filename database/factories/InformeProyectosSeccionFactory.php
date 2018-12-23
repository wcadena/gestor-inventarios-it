<?php

use App\InformeProyectosSeccion;
use Faker\Generator as Faker;

$factory->define(InformeProyectosSeccion::class, function (Faker $faker) {
    return [
        'informe_manto_prev_id' => null,
        'proyecto_seccion_id'   => null,
        'tipo'                  => null,
        'orden'                 => null,
        'created_at'            => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'            => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at'            => null,
    ];
});
