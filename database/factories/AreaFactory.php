<?php

namespace Database\Factories;

use App\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

class AreaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Area::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'area'       => $this->faker->name,
            'created_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'empresa'    => env('EMP_PRINCIPAL', 'Ecuatask'),
        ];
    }
}
