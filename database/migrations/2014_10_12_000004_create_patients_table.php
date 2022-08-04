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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->String('reference');
            $table->String('nom_patient');
            $table->String('prenom_patient');
            $table->Date('date_naissance');
            $table->String('sexe');
            $table->String('groupe_sanguin');
            $table->String('situation_familliale');
            $table->String('assurance_medicale');
            $table->String('tel_patient');
            $table->String('nom_pere');
            $table->String('nom_mere');
            $table->String('nom_a_prevenir');
            $table->String('tel_a_prevenir');
            $table->unsignedbigInteger('secretaire_id')->nullable()->comment('celle qui créé le patient');
            $table->foreign ('secretaire_id')->references('id')->on('secretaire');
            $table->unsignedbigInteger('Medecin_id')->nullable();
            $table->foreign('Medecin_id')->references('id')->on('medecins');
            $table->unsignedbigInteger('typeConsultation_id')->nullable()->comment('le medecin a qui le patient est affilié');
            $table->foreign ('typeConsultation_id')->references('id')->on('typeConsultation');
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
        Schema::dropIfExists('patients');
    }
};
