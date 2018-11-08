<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('actors', function (Blueprint $table) { //crée la table
          $table->increments('id');
          $table->string('name');
          $table->string('surname');
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
          Schema::drop('actors'); //supprime la table series
    }
}
