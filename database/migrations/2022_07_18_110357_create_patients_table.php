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
            $table->String('Reference');
            $table->String('Nom_patient');
            $table->String('Prenom_patient');
            $table->Date('Date_Naissance');
            $table->String('Sexe');
            $table->String('Adresse');
            $table->String('Groupe_sanguin');
            $table->String('SituationFamilliale');
            $table->String('AssuranceMedicale');
            $table->String('Code_Assure');
            $table->String('Tel_patient');
            $table->String('Nom_Père');
            $table->String('Nom_Mère');
            $table->String('NomP_a_prevenir');
            $table->String('TelP_a_prevenir');
            $table->unsignedbigInteger('secretaire_id');
            $table->foreign ('secretaire_id')->references('id')->on ('secretaire');
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
