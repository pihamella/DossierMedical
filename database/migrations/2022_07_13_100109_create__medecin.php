<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_medecin', function (Blueprint $table) {
            $table->id();
            $table->String('Nom');
            $table->String('Prenom');
            $table->Date('Date_Naissance');
            $table->String('Sexe');
            $table->String('Adresse');
            $table->String('Situation_Familliale');
            $table->String('Assurance_Medicale');
            $table->String('Tel');
            $table->String('NomPere');
            $table->String('NomMere');
            $table->String('NomP_a_prevenir');
            $table->String('Tel_P_a_prevenir');
            $table->String('Taille');
            $table->String('Maladie_chronique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_medecin');
    }
};
