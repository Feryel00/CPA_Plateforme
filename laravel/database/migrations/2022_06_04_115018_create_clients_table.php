<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string("nom");
            $table->string("prenom");
            $table->string("numero_tel");
            $table->string("type");
            $table->string("passport_numero")->unique();
            $table->date("date_de_naissance_titulaire");
            $table->string("departement_de_naissance");
            $table->string("sex");
            $table->string("profession");
            $table->string("revenus");
            $table->string("situation_famille");
            $table->string("nom_de_conjoint")->nullable();
            $table->string("prenom_de_conjoint")->nullable();
            $table->date("date_de_naissance_conjoint")->nullable();
            $table->string("sexe_conjoint")->nullable();
            $table->string("profession_conjoint")->nullable();
            $table->string("revenus_conjoint")->nullable();
            $table->string("situation_famille_conjoint")->nullable();


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
        Schema::dropIfExists('clients');
    }
}
