<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;


class PeopleFactory extends Factory
{

    public function definition()
    {

        return [
            'names'=>$this->faker->name(),
            'surnames'=>$this->faker->lastName(),
            'age'=>$this->faker->numberBetween($min=18, $max=100),
        ];
    }
}
