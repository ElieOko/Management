<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("postnom");
            $table->string("prenom");
            $table->string("adresse");
            $table->string("sexe");
            $table->foreignId("fonction_id")->references('id')->on('fonctions');
            $table->foreignId("grade_id")->references('id')->on('grade_id');
            $table->timestamps();
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
        Schema::dropIfExists('agents');
    }
}
