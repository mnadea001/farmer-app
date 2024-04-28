<?php

namespace Database\Factories;
use App\Models\Category;
use App\Models\Race;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vache>
 */
class VacheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->name(),
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 5, 500),
            'is_sold' => $this->faker->boolean,
            'category_id' => Category::factory(),
            'race_id' => Race::factory(),
            
        ];
    }
}
