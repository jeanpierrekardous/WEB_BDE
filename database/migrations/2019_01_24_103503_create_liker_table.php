<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liker', function (Blueprint $table) {
            $table->integer('IDUtilisateur');
            $table->integer('IDPhotos');
            $table->foreign('IDUtilisateur')->references('IDUtilisateur')->on('utilisateur');
            $table->foreign('IDPhotos')->references('IDPhotos')->on('photos');
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
        Schema::dropIfExists('liker');
    }
}
