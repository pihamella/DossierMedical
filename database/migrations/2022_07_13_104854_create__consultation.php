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
            $table->String('Prix_consultation');
            $table->foreign ('Type_consultationId')->reference('id')->on('typeConsultation');
            $table->foreign ('Medecin_id')->reference('id')->on('medecin');
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
