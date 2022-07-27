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
            $table->String('Etat_general');
            $table->String('Etat_de_Concience');
            $table->String('Etat_de_conjontive');
            $table->String('OMI');
            $table->String('Etat_physique');
            $table->String('Diagnostic');
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
