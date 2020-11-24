<?php

namespace Database\Factories;

use App\Models\Custodios;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustodiosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Custodios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pais'                            => 'Ecuador',
            'ciudad'                          => 'QUITO',
            'direccion'                       => $this->faker->address,
            'documentoIdentificacion'         => $this->faker->randomNumber($nbDigits = null, $strict = false),
            'cargo'                           => $this->faker->jobTitle,
            'compania'                        => (env('EMP_PRINCIPAL', 'Ecuatask')),
            'telefono'                        => $this->faker->phoneNumber,
            'estado'                          => 'ACTIVO',
            'created_at'                      => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'nombre_responsable'              => $this->faker->name,
            'email'                           => $this->faker->companyEmail,
        ];
    }
}
