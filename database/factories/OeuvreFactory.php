<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Oeuvre;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Oeuvre>
 */
class OeuvreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Oeuvre::class;
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'prix' => $this->faker->randomFloat(2, 100, 5000),
            'dimension' => $this->faker->randomElement(['50x70', '60x90', '100x150']),
            'image' => $this->faker->imageUrl(640, 480, 'artwork', true), // Génère une URL d'image factice
            'type' => $this->faker->randomElement(['pop art', 'abstraite', 'paysage', 'street art', 'à huile', 'portrait']),
            'user_id' => User::inRandomOrder()->first()->id, // Associe à un utilisateur existant de manière aléatoire
        ];
    }
}
