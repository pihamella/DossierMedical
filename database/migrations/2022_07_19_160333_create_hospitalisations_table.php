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
        Schema::create('hospitalisations', function (Blueprint $table) {
            $table->id();
            $table->Date('Date_admission');
            $table->String('Type_admission');
            $table->String('Motif_admission');
            $table->String('Medcin_traitant');
            $table->String('Nom_accompagnant');
            $table->String('Lien_parente');
            $table->Date('Date_entree');
            $table->Date('Date_sortie');
            $table->String('Motif_sortie');
            $table->String('Resultat_sortie');
            $table->Date('Date_Deces');
            $table->String('Motif_Deces');            
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
        Schema::dropIfExists('hospitalisations');
    }
};
