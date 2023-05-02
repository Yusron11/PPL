<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => mt_rand(1,5),
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(mt_rand(10,25)),
            'price' => $this->faker->numberBetween(95000,150000),
            'stok' => $this->faker->numberBetween(50,275)
        ];
    }
}
