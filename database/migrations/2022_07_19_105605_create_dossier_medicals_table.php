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
        Schema::create('dossier_medicals', function (Blueprint $table) {
            $table->id();
            $table->String('Nom_patient');
            $table->String('Prenom_patient');
            $table->String('Nom_Medecin');
            $table->String('Prenom_Medecin');
            $table->String('Specialite');
            $table->String('Diagnostic');
            $table->String('Traitement');
            $table->String('Evolution');
            $table->String('Resultat');
            $table->unsignedbigInteger('Patient_id');
            $table->unsignedbigInteger('Medecin_id');
            $table->foreign('Patient_id')->references('id')->on('patients');
            $table->foreign('Medecin_id')->references('id')->on('medecins');
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
        Schema::dropIfExists('dossier_medicals');
    }
};
