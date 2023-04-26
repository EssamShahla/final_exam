<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name() ,
            'email' => $this->faker->unique()->email() ,
            'password' => $this->faker->password() ,
            'status' => $this->faker->randomElement(['active' ,'inactive']),
        ];
    }
}
