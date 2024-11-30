<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\company>
 */
class CompanyFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            /* 'name'=> $this->faker->company,
            'industry' => fake()->sentence(15),
            'location' => fake()-> streetAddress(),
            'email' => fake()->Unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'), */
            
        ];
    }
}
