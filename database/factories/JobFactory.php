<?php

namespace Database\Factories;

use App\Models\company;
use App\Models\job;
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
     * 
     */
    protected $model = job::class;

    public function definition(): array
    {
        return [
            /* 'title' => $this->faker->jobTitle,
            'description' => fake()->sentence(8),
            'id_company' => company::inRandomOrder()->first()?->id ?? null, // Selecciona un ID de empresa aleatorio
            'publication_date' => fake()->dateTime(),
            'type_jobs' => fake()->sentence(20),
            'category' => fake()->sentence(20),
            'salary' => $this->faker->randomFloat(2, 3000, 15000), // Salario entre 3000 y 15000
 */
        ];
    }
}
