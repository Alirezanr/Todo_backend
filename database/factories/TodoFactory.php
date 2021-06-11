<?php

namespace Database\Factories;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Todo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'           => $this->faker->numberBetween(1, 3),
            'title'             => $this->faker->sentence(3),
            'description'       => $this->faker->sentence(22),
            'priority'          => "medium",
            'location_lang'     => $this->faker->numberBetween(260, 500),
            'location_lat'      => $this->faker->numberBetween(260, 500)
        ];
    }
}
