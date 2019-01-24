<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementOfficielTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenement_officiel', function (Blueprint $table) {
            $table->increments('ID_evenement_officiel');
            $table->string('nom', 50);
            $table->string('description', 50);
            $table->date('date', 50);
            $table->string('type', 50);
            $table->string('frequence', 50);
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
        Schema::dropIfExists('evenement_officiel');
    }
}
