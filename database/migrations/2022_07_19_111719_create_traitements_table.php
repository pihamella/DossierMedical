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
            $table->String('Fin_traitement');
            $table->String('Prix');
            $table->timestamps();
            $table->foreign ('Patient_id')->reference('id')->on ('Patient');
            $table->foreign ('Hospitalisation_id')->reference('id')->on ('Hospitalisation');
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
