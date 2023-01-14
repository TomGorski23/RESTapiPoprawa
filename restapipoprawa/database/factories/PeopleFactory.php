<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'names'=>$this->faker->name(),
            'surnames'=>$this->faker->lastName(),
            'age'=>$this->faker->numberBetween($min=18, $max=100),
        ];
    }
}
