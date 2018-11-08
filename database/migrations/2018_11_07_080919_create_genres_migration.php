<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('genres', function (Blueprint $table) { //crée la table
          $table->increments('id');
          $table->string('name')->unique();
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
          Schema::drop('genres'); //supprime la table series
    }
}
