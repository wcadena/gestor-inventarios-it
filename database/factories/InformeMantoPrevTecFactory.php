<?php

use Faker\Generator as Faker;
use App\InformeMantoPrevTec;

$factory->define(InformeMantoPrevTec::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            factory(App\User::class, 1)->create();
            return App\User::inRandomOrder()->first()->id;
        },
        'informe_manto_prev_id' => null,
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at' => null,
    ];
});
