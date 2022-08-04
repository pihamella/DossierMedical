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
        Schema::create('consultation', function (Blueprint $table) {
            $table->id();
            $table->String('Type_Consultation');
            $table->Date('Date_consultation');
            $table->double('Prix_consultation');
            $table->unsignedbigInteger('Medecin_id');
            $table->foreign('Medecin_id')->references('id')->on('medecins');
            $table->unsignedbigInteger('TypeConsultation_id');
            $table->foreign ('TypeConsultation_id')->references('id')->on('typeConsultation');
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
        Schema::dropIfExists('consultation');
    }
};
