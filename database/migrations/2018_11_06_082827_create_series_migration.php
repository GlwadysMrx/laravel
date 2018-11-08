<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('series', function (Blueprint $table) { //crée la table
          $table->increments('id');
          $table->string('title');
          $table->integer('publication_year'); // interger = un entier
          $table->timestamps(); //crée une date d'ajout et de mise a jour pour chaque éléments
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('series'); //supprime la table series
    }
}
