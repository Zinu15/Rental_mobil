<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobil>
 */
class MobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idmobil' =>rand(1,999999),
            'merek' => fake()->name(),
            'model' => fake()->name(),
            'nopol' => '',
            'harga' => rand(1,99999999)
        ];
    }
}
