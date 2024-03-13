<?php

namespace Database\Factories;

use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProductVariant>
 */
class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'color' => $this->faker->randomElement(['red', 'blue', 'yellow', 'green']),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
        ];
    }
}
