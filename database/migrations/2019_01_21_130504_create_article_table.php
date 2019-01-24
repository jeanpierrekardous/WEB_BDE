<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //We create column in the tables "Article"
        Schema::create('article', function (Blueprint $table) {
            $table->increments('IDArticle');
            $table->string('nom', 50);
            $table->string('image', 50);
            $table->string('categorie', 50);
            $table->integer('prix');
            $table->string('commentaire', 50);
            $table->integer('quantite');
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
        Schema::dropIfExists('article');
    }
}
