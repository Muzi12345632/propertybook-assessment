<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Services>
 */
class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        'author'=> fake()->name(),
        'title' => fake()->name(),
        'text' => fake()->sentence(),
        'user_id'=>\App\Models\User::inRandomOrder()->first()->id,
        
        ];
    }
}
