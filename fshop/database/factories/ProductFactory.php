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
    public function definition()
    {
        return [
            "name" => $this -> faker->word,
            "price" => $this -> faker->numberBetween(120, 780),
            "image" => "https://source.unsplash.com/random",
            "description" => $this -> faker->sentence,
        ];
    }
}
