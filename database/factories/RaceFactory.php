<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Race>
 */
class RaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $races = ['Labrador', 'Frison', 'Pottok', 'Irish Cob', 'Mérinos', 'Solognotes'];

        // Sélectionnez aléatoirement un nom de race dans la liste
        $randomRace = $this->faker->randomElement($races);

        return [
            'name' => $randomRace,
        ];
    }
}
