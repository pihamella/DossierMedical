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
        Schema::create('traitements', function (Blueprint $table) {
            $table->id();
            $table->Date('Debut_traitement');
            $table->Date('Fin_traitement');
            $table->double('Prix');
            $table->String('Note');
            $table->Date('Dte_du_prochain_RDV');
            $table->unsignedbigInteger('Patient_id');
            $table->foreign ('Patient_id')->references('id')->on ('patients');
            $table->unsignedbigInteger('Medecin_id');
            $table->foreign ('Medecin_id')->references('id')->on ('medecins');
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
        Schema::dropIfExists('traitements');
    }
};
