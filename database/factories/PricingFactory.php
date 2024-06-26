<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pricing>
 */
class PricingFactory extends Factory
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
        'package'=> fake()->name(),
        'price'=> Str::random(4),
        'description'=> fake()->text(),
        'user_id'=>\App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
