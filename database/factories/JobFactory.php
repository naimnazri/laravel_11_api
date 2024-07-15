<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
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
        return [
            'title' => fake()->sentence(3),
            'type' => fake()->sentence(4),
            'description' => fake()->paragraph(3),
            'location' => fake()->city(),
            'salary' => fake()->numberBetween(10000, 100000),
            'company_name' => fake()->sentence(3),
            'company_description' => fake()->sentence(3),
            'company_email' => fake()->safeEmail(),
            'company_phone' => fake()->phoneNumber()
        ];
    }
}
