<?php

use App\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [
        'name'        => $faker->title,
        'descripcion' => $faker->text,
        'decoracion'  => $faker->randomHtml(4),
        'tipo'        => 'lista',
        'created_at'  => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'  => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at'  => null,
    ];
});
