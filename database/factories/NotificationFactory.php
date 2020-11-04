<?php

namespace Database\Factories;

use App\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'            => null,
            'notifiable_id'   => null,
            'notifiable_type' => null,
            'data'            => null,
            'read_at'         => null,
            'created_at'      => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'      => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
