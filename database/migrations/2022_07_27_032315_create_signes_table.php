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
        Schema::create('signes', function (Blueprint $table) {
            $table->id();
            $table->String('etat_general');
            $table->String('etat_de_Concience');
            $table->String('etat_de_conjontive');
            $table->String('OMI');
            $table->String('etat_physique');
            $table->String('diagnostic');
            $table->unsignedbigInteger('secretaireId');
            $table->foreign ('secretaireId')->references('id')->on('secretaire');
            $table->unsignedbigInteger('Patient_id');
            $table->foreign ('Patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('signes');
    }
};
