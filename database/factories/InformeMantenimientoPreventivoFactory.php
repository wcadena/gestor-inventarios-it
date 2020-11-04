<?php

namespace Database\Factories;

use App\Areas;
use App\Custodios;
use App\InformeMantenimientoPreventivo;
use App\InformeMantenimientoPreventivoCategoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Webpatser\Uuid\Uuid;

class InformeMantenimientoPreventivoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InformeMantenimientoPreventivo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'custodio_id'         => function () {
                return Custodios::inRandomOrder()->first()->id;
            },
            'area_id'         => function () {
                return Areas::inRandomOrder()->first()->id;
            },
            'fecha_solicitud'                    => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'fecha_ejecucion'                    => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'hora_inicio'                        => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'hora_fin'                           => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'informe_manto_prev_cate_id'         => function () {
                return InformeMantenimientoPreventivoCategoria::inRandomOrder()->first()->id;
            },
            'requerimiento'             => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'solucion'                  => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'resolucion'                => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'created_at'                => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'                => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'vinculo'                   => Uuid::generate(),
            'observacion'               => $this->faker->text,
            'telefono_contacto'         => $this->faker->phoneNumber,
            'celular_contacto'          => $this->faker->phoneNumber,
            'email_contacto'            => $this->faker->companyEmail,
            'ip'                        => $this->faker->ipv4,
            'like'                      => $this->faker->randomElement($array = ['blanco', 'like', 'unlike']),
            'publico_privado'           => $this->faker->randomElement($array = ['publico', 'privado']),

        ];
    }
}
