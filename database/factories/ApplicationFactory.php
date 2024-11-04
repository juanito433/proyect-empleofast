<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_jobs' =>fake()->numberBetween(),
            'id_candidate' =>fake()->numberBetween(),
            'publication_date'=>fake()->dateTime(),
            'status'=> fake()->sentence(10),
        ];
    }
}
