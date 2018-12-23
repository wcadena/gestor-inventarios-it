<?php

use App\RepoNovedadesDetalle;
use Faker\Generator as Faker;

$factory->define(RepoNovedadesDetalle::class, function (Faker $faker) {
    return [
        'repo_novedades_id'  => null,
        'id_equipos'         => null,
        'modelo_equipo_id'   => null,
        'orden_de_compra_id' => null,
        'custodio_id'        => null,
        'estacione_id'       => null,
        'area_id'            => null,
        'check_list_id'      => null,
        'imagen'             => null,
        'num_cajas'          => null,
        'sociedad'           => null,
        'no_serie'           => null,
        'codigo_barras'      => null,
        'codigo_avianca'     => null,
        'codigo_otro'        => null,
        'descripcion'        => null,
        'ip'                 => null,
        'estado'             => null,
        'estatus'            => null,
        'garantia'           => null,
        'observaciones'      => null,
        'created_at'         => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'         => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at'         => null,
    ];
});
