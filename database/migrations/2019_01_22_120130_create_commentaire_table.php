<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire', function (Blueprint $table) {
            $table->increments('IDCommentaire');
            $table->string('commentaire', 50);
            $table->integer('IDPhoto');
            $table->integer('IDInscription');
            $table->foreign('IDPhoto')->references('id')->on('photos');
            $table->foreign('IDInscription')->references('id')->on('utilisateur');
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
        Schema::dropIfExists('commentaire');
    }
}
