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
        Schema::create('analyses', function (Blueprint $table) {
            $table->id();
            $table->String('Type analyse');
            $table->String('Désignation');
            $table->String('Resultat');
            $table->String('Image');
            $table->String('Chirugien');
            $table->unsignedbigInteger('Medecin_id')->nullable();
            $table->foreign ('Medecin_id')->references('id')->on('medecins');
            $table->unsignedbigInteger('Patient_id')->nullable();
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
        Schema::dropIfExists('analyses');
    }
};
