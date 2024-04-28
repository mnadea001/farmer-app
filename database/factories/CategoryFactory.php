<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $categories = ['Chien', 'Cheval', 'Brebis', 'Cochon'];

        // Sélectionnez aléatoirement un nom de catégorie dans la liste
        $randomCategory = $this->faker->randomElement($categories);

        return [
            'name' => $randomCategory,
        ];
    }
}
