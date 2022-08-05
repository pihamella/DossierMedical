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
        Schema::create('type_analyses', function (Blueprint $table) {
            $table->id();
            $table->String('nom_type_analyse');
            $table->String('déscription');
            $table->unsignedbigInteger('Analyse_id')->nullable();
            $table->foreign ('Analyse_id')->references('id')->on('analyses');
            
        

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
        Schema::dropIfExists('type_analyses');
    }
};
