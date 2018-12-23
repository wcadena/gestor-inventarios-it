<?php

use App\InformeMantoPrev;
use Faker\Generator as Faker;

$factory->define(InformeMantoPrev::class, function (Faker $faker) {
    return [
        'custodio_id'                => null,
        'area_id'                    => null,
        'no_orden'                   => null,
        'fecha_solicitud'            => null,
        'fecha_ejecucion'            => null,
        'hora_inicio'                => null,
        'hora_fin'                   => null,
        'informe_manto_prev_cate_id' => null,
        'requerimiento'              => null,
        'solucion'                   => null,
        'resolucion'                 => null,
        'created_at'                 => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                 => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at'                 => null,
        'vinculo'                    => null,
        'observacion'                => null,
        'telefono_contacto'          => null,
        'celular_contacto'           => null,
        'email_contacto'             => null,
        'ip'                         => null,
        'like'                       => null,
        'publico_privado'            => null,
    ];
});
