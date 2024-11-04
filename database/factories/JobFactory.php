<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'title'=>fake()->name(),
            'description'=>fake()->sentence(8),
            'id_company'=>fake()->numberBetween(10,50),
            'publication_date'=>fake()->dateTime(),
            'type_jobs'=>fake()->sentence(20),
            'category'=>fake()->sentence(20),

        ];
    }
}
