<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return 
        [
    'company_id' => Employer::factory(),
    'title' => fake()->jobTitle(),
    'company' => fake()->company(),
    'location' => fake()->city() . ', ' . fake()->country(),
    'description' => fake()->paragraph(),
    'salary' => fake()->numberBetween(1_000_000, 10_000_000), // salario de ejemplo
        


        ];
    }
}
