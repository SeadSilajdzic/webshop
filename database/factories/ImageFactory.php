<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => $this->faker->randomElement([
                'media/example1.png',
                'media/example2.png',
                'media/example3.png',
                'media/example4.png',
                'media/example5.png',
                'media/example6.png',
                'media/example7.png',
                'media/example8.png',
                'media/example9.png',
                'media/example10.png',
            ])
        ];
    }
}
