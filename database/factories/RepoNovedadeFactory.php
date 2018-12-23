<?php

use App\RepoNovedade;
use Faker\Generator as Faker;

$factory->define(RepoNovedade::class, function (Faker $faker) {
    return [
        'custodio_id'          => null,
        'fecha_novedades'      => null,
        'correo'               => null,
        'novedad'              => null,
        'observaciones'        => null,
        'antiguo_custodio_id'  => null,
        'traslado_custodio_id' => null,
        'estado'               => null,
        'created_at'           => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'           => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at'           => null,
        'token_unico'          => null,
    ];
});
