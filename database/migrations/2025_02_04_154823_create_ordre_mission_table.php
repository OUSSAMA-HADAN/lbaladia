<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdreMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordre_mission', function (Blueprint $table) {
            $table->id();
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->string('destination');
            $table->string('objectif');
            $table->unsignedBigInteger('idUtilisateur');
            $table->string('etatRemboursement');
            $table->timestamps();

            // Adding a foreign key constraint for the idFonctionnaire column
            $table->foreign('idUtilisateur')->references('id')->on('utilisateur')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordre_mission');
    }
}
