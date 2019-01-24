<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voter', function (Blueprint $table) {
            $table->integer('IDUtilisateur');
            $table->integer('IDIdee');
            $table->foreign('IDUtilisateur')->references('IDUtilisateur')->on('utilisateur');
            $table->foreign('IDIdee')->references('IDIdee')->on('idee_table');
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
        Schema::dropIfExists('voter');
    }
}
