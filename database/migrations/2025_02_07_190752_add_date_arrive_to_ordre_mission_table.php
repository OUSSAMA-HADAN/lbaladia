<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('ordre_mission', function (Blueprint $table) {
            $table->date('dateArrive')->nullable()->after('dateDebut');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ordre_mission', function (Blueprint $table) {
            $table->dropColumn('dateArrive');
        });
    }
};
