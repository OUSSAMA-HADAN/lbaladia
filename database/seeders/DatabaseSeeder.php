<?php

namespace Database\Seeders;

use App\Models\OrdreMission;
use App\Models\RapportDeMission;
use App\Models\Utilisateur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 10 administrators
        Utilisateur::factory(10)->create();

        // Create 10 ordre missions
        OrdreMission::factory(10)->create();

        // Create 10 rapports de mission
        RapportDeMission::factory(10)->create();
    }
}
