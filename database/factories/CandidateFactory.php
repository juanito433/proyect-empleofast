<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\candidate>
 */
class CandidateFactory extends Factory
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
            'name'=>fake()->name(),
            'surname'=>fake()->lastName(),
            'email'=>fake()->unique()->safeEmail(),
            'skills'=>fake()->sentence(),
            'location'=>fake()->streetAddress(),
            'password' => static::$password ??= Hash::make('password'),
        ];
    }
}
