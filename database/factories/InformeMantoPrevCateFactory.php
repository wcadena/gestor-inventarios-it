<?php

namespace Database\Factories;

use App\InformeMantoPrevCate;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformeMantoPrevCateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InformeMantoPrevCate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categoria'  => null,
            'created_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'deleted_at' => null,
        ];
    }
}
