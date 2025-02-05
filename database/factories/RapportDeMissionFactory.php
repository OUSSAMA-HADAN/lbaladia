<?php

namespace Database\Factories;

use App\Models\RapportDeMission;
use App\Models\OrdreMission;
use Illuminate\Database\Eloquent\Factories\Factory;

class RapportDeMissionFactory extends Factory
{
    protected $model = RapportDeMission::class;

    public function definition()
    {
        return [
            'idOrdreMission' => OrdreMission::factory(),  // Create an OrdreMission via its factory
            'sujet' => $this->faker->word,
            'contenu' => $this->faker->paragraph,
            'dateSoumission' => $this->faker->date(),
        ];
    }
}
