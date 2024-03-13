<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'name' => $this->faker->unique()->randomElement(['Laravel Cap', 'T-Shirt', 'Blanket', 'Sweater']),
            'description' => $this->faker->paragraphs(2, true),
            'price' => $this->faker->numberBetween(5_00, 45_00)
        ];
    }
}
