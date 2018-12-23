<?php

use App\OrdenDeCompra;
use Faker\Generator as Faker;

$factory->define(OrdenDeCompra::class, function (Faker $faker) {
    return [
        'ordenCompra'  => null,
        'fecha_compra' => null,
        'created_at'   => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'   => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at'   => null,
    ];
});
