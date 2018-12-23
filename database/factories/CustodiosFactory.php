<?php

use Faker\Generator as Faker;

$factory->define(App\Custodios::class, function (Faker $faker) {
    return [
        'pais'                            => 'Ecuador',
        'ciudad'                          => 'QUITO',
        'direccion'                       => $faker->address,
        'documentoIdentificacion'         => $faker->randomNumber($nbDigits = null, $strict = false),
        'cargo'                           => $faker->jobTitle,
        'compania'                        => (env('EMP_PRINCIPAL', 'Ecuatask')),
        'telefono'                        => $faker->phoneNumber,
        'estado'                          => 'ACTIVO',
        'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
        'nombre_responsable'              => $faker->name,
        'email'                           => $faker->companyEmail,
    ];
});
