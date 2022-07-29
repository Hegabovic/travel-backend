<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    //id, title, type, description, capacity,
    public function definition()
    {
        return [
//            'title' => $this->faker->title,
            'title' => Str::random(5),
            'type' => $this->faker->randomElement(['Convenience goods','opping goods','Specialty goods.','Unsought goods']),
            'description' => Str::random(20),
            'capacity' => 20,

        ];
    }
}
