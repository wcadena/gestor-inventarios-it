<?php

use App\InformeMantoHistorico;
use Faker\Generator as Faker;

$factory->define(InformeMantoHistorico::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            factory(App\Models\User::class, 1)->create();

            return App\Models\User::inRandomOrder()->first()->id;
        },
        'informe_manto_prev_id' => null,
        'accion'                => null,
        'created_at'            => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'            => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at'            => null,
    ];
});
