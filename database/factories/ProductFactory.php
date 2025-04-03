<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2,10000,3000000),
            'category_id' => Category::inRandomOrder()->first()->id,
            'url_image' => 'https://c0.klipartz.com/pngpicture/656/414/gratis-png-estuches-y-carcasas-para-computadora-gabinete-gamer-bluecase-bg-009-atx-gabinete-bluecase-gamer-bg-024-sem-fonte-pc-gamer-thumbnail.png'
        ];
    }
}
