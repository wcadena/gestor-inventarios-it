<?php

use App\Busqueda;
use Faker\Generator as Faker;

$factory->define(Busqueda::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            factory(App\User::class, 1)->create();

            return App\User::inRandomOrder()->first()->id;
        },
        'palabra_q'    => $faker->word,
        'instancia'    => $faker->word,
        'instancia_id' => $faker->randomDigit,
        'dato'         => $faker->word,
        'created_at'   => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'   => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at'   => null,
    ];
});
