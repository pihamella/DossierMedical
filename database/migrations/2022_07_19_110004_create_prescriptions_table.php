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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->String('nom_de_formation');
            $table->Date('date_prescrition');
            $table->String('note');
            $table->unsignedbigInteger('Medecin_id');
            $table->foreign ('Medecin_id')->references('id')->on('medecins');
            $table->unsignedbigInteger('patient_id');
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
        Schema::dropIfExists('prescriptions');
    }
};
