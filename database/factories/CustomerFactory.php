<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni' => Str::random(45),
            'name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'address' => $this->faker->address(),
            'date_reg' => $this->faker->dateTime(),
            'email' => $this->faker->unique()->safeEmail(),
            'id_reg'    => 1,
            'id_com'    => 11,
        ];
    }
}
