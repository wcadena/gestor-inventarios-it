<?php

use App\ProyectoSeccion;
use Faker\Generator as Faker;

$factory->define(ProyectoSeccion::class, function (Faker $faker) {
    return [
        'proyecto_id' => function () {
            factory(App\Proyecto::class, 1)->create();

            return App\Proyecto::inRandomOrder()->first()->id;
        },
        'name'        => $faker->title,
        'descripcion' => $faker->text,
        'decoracion'  => $faker->randomHtml(4),
        'tipo'        => $faker->randomElement($array = ['titulo', 'seccion']),
        'orden'       => $faker->randomDigit,
        'principal'   => $faker->randomElement($array = ['si', 'no']),
        'created_at'  => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'  => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at'  => null,
    ];
});
