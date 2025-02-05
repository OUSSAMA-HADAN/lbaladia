<?php

namespace Database\Factories;

use App\Models\OrdreMission;
use App\Models\Fonctionnaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdreMissionFactory extends Factory
{
    protected $model = OrdreMission::class;

    public function definition()
    {
        return [
            'dateDebut' => $this->faker->date(),
            'dateFin' => $this->faker->date(),
            'destination' => $this->faker->city,
            'objectif' => $this->faker->sentence,
            'idFonctionnaire' => Fonctionnaire::factory(),  // Create a Fonctionnaire via its factory
            'etatRemboursement' => $this->faker->randomElement(['Pending', 'Approved', 'Rejected']),
        ];
    }
}
