<?php

namespace Database\Factories;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    protected $model = Utilisateur::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'num_de_matriculation' => $this->faker->unique()->numerify('######'),
            'cin' => $this->faker->unique()->numerify('######'),
            'role' => $this->faker->word,
            'password' => bcrypt('password123'),
        ];
    }
}
