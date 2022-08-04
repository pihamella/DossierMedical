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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('role',['secretaire','medecin']);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedbigInteger('secretaire_id')->nullable();
            $table->foreign ('secretaire_id')->references('id')->on('secretaire');

            $table->unsignedbigInteger('medecin_id')->nullable();
            $table->foreign ('medecin_id')->references('id')->on('medecins');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
