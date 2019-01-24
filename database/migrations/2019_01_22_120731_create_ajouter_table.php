<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAjouterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajouter', function (Blueprint $table) {
            $table->integer('IDInscription');
            $table->integer('IDArticle');
            $table->foreign('IDInscription')->references('id')->on('utilisateur');
            $table->foreign('IDArticle')->references('id')->on('article');
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
        Schema::dropIfExists('ajouter');
    }
}
