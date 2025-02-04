<?php

namespace Database\Factories;

use App\Models\Fonctionnaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class FonctionnaireFactory extends Factory
{
    protected $model = Fonctionnaire::class;

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
