<?php

use App\Puesto;
use Faker\Generator as Faker;

$factory->define(Puesto::class, function (Faker $this->faker) {
    return [
        'ubicacion_id' => function () {
            factory(App\Ubicacion::class, 1)->create();

            return App\Ubicacion::inRandomOrder()->first()->id;
        },
        'codigo'     => $this->faker->randomHtml(),
        'detalle'    => $this->faker->text,
        'x'          => $this->faker->randomDigit,
        'y'          => $this->faker->randomDigit,
        'estado'     => $this->faker->randomElement($array = ['OCUPADO', 'RESERVADO', 'LIBRE']),
        'created_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'deleted_at' => null,
    ];
});
