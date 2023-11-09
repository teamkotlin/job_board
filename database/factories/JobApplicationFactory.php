<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobApplication>
 */
class JobApplicationFactory extends Factory
{

    public function definition(): array
    {
        return [
            'expected_salary' => fake()->numberBetween(4000, 170000)
        ];
    }
}
