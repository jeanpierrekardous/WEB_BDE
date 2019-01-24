<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscrireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscrire', function (Blueprint $table) {
            $table->integer('IDInscription');
            $table->integer('IDEvent');
            $table->foreign('IDInscription')->references('id')->on('utilisateur');
            $table->foreign('IDEvent')->references('id')->on('evenement_officiel');
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
        Schema::dropIfExists('inscrire');
    }
}
