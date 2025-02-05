<?php

namespace Database\Factories;

use App\Models\Administrateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdministrateurFactory extends Factory
{
    protected $model = Administrateur::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'num_de_matriculation' => $this->faker->unique()->numerify('######'),
            'cin' => $this->faker->unique()->numerify('######'),
            'role' => $this->faker->word,
        ];
    }
}
