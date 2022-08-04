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
        Schema::create('constantes', function (Blueprint $table) {
            $table->id();
            $table->String('poids');
            $table->String('temperature');
            $table->String('taille');
            $table->String('tension');
            $table->text('note');
            $table->unsignedbigInteger('secretaireId');
            $table->foreign ('secretaireId')->references('id')->on('secretaire');
            $table->unsignedbigInteger('patient_id')->nullable();
            $table->foreign ('patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('constantes');
    }
};
