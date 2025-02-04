<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportDeMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapport_de_mission', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idOrdreMission');
            $table->string('sujet');
            $table->text('contenu');
            $table->date('dateSoumission');
            $table->timestamps();

            // Adding a foreign key constraint for the idOrdreMission column
            $table->foreign('idOrdreMission')->references('id')->on('ordre_mission')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapport_de_mission');
    }
}
