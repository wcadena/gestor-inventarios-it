<?php

use Faker\Generator as Faker;

$factory->define(App\InformeMantenimientoPreventivo::class, function (Faker $faker) {
    return [
        'custodio_id'         => function () {
            return App\Custodios::inRandomOrder()->first()->id;
        },
        'area_id'         => function () {
            return App\Areas::inRandomOrder()->first()->id;
        },
        'fecha_solicitud'                    => $faker->date($format = 'Y-m-d', $max = 'now'),
        'fecha_ejecucion'                    => $faker->date($format = 'Y-m-d', $max = 'now'),
        'hora_inicio'                        => $faker->time($format = 'H:i:s', $max = 'now'),
        'hora_fin'                           => $faker->time($format = 'H:i:s', $max = 'now'),
        'informe_manto_prev_cate_id'         => function () {
            return App\InformeMantenimientoPreventivoCategoria::inRandomOrder()->first()->id;
        },
        'requerimiento'             => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'solucion'                  => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'resolucion'                => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'created_at'                => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                => $faker->date($format = 'Y-m-d', $max = 'now'),
        'vinculo'                   => Webpatser\Uuid\Uuid::generate(),
        'observacion'               => $faker->text,
        'telefono_contacto'         => $faker->phoneNumber,
        'celular_contacto'          => $faker->phoneNumber,
        'email_contacto'            => $faker->companyEmail,
        'ip'                        => $faker->ipv4,
        'like'                      => $faker->randomElement($array = ['blanco', 'like', 'unlike']),
        'publico_privado'           => $faker->randomElement($array = ['publico', 'privado']),

    ];
});
