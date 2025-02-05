<?php

namespace Database\Seeders;

use App\Models\Administrateur;
use App\Models\Conptable;
use App\Models\Fonctionnaire;
use App\Models\OrdreMission;
use App\Models\RapportDeMission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 10 administrators
        Administrateur::factory(10)->create();

        // Create 10 comptables
        Conptable::factory(10)->create();

        // Create 10 fonctionnaires
        Fonctionnaire::factory(10)->create();

        // Create 10 ordre missions
        OrdreMission::factory(10)->create();

        // Create 10 rapports de mission
        RapportDeMission::factory(10)->create();
    }
}
