<?php

namespace Database\Factories;

use App\InformeProyectosSeccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformeProyectosSeccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InformeProyectosSeccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'informe_manto_prev_id' => null,
            'proyecto_seccion_id'   => null,
            'tipo'                  => null,
            'orden'                 => null,
            'created_at'            => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'            => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'deleted_at'            => null,
        ];
    }
}
