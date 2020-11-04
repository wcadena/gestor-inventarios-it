<?php

namespace Database\Factories;

use App\InformeMantoPrev;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformeMantoPrevFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InformeMantoPrev::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'custodio_id'                => null,
            'area_id'                    => null,
            'no_orden'                   => null,
            'fecha_solicitud'            => null,
            'fecha_ejecucion'            => null,
            'hora_inicio'                => null,
            'hora_fin'                   => null,
            'informe_manto_prev_cate_id' => null,
            'requerimiento'              => null,
            'solucion'                   => null,
            'resolucion'                 => null,
            'created_at'                 => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'                 => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'deleted_at'                 => null,
            'vinculo'                    => null,
            'observacion'                => null,
            'telefono_contacto'          => null,
            'celular_contacto'           => null,
            'email_contacto'             => null,
            'ip'                         => null,
            'like'                       => null,
            'publico_privado'            => null,
        ];
    }
}
