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
            $table->timestamps();
             $table->string("agence");
            $table->string("nom");
            $table->string("prenom");
            $table->string("type");
            $table->string("numero");
            $table->date("delivre_à");
            $table->string("passport_numero");
            $table->date("delivre_a");
            $table->string("identif_sociale");
            $table->string("ind");
            $table->string("ident_cent_Risq");
            $table->string("casier");
            // $table->string("nationalite");
            // $table->string("pays residence");
            // $table->string("carte interne");
            // $table->string("qualite client");
            // $table->string("gestionnaire");
            // $table->string("famille");
            // $table->string("groupe");
            // $table->string("date de naissance titulaire");
            // $table->string("code territorialite");
            // $table->string("departement de naissance");
            // $table->string("commune de naissance");
            // $table->string("sexe");
            // $table->string("nom de jeune fille");
            // $table->string("nom de la mere");
            // $table->string("prenom de la mere");
            // $table->string("profession");
            // $table->string("nom de l'emmployeur");
            // $table->string("revenus");
            // $table->string("situation famille");
            // $table->string("regime famille");
            // $table->string("regime matrimonial");
            // $table->string("capacite juridique");
            // $table->string("nom de conjoint");
            // $table->string("prenom de conjoint");
            // $table->string("date de naissance conjoint");
            // $table->string("code territorialite conjoint");
            // $table->string("departement de naissance conjoint");
            // $table->string("commune de naissance conjoint");
            // $table->string("sexe conjoint");
            // $table->string("nom de jeune fille conjoint");
            // $table->string("profession conjoint");
            // $table->string("nom de l'employeur conjoint");
            // $table->string("revenus conjoint");
            // $table->string("situation famille conjoint");
            // $table->string("capacite juridique conjoint");
            // $table->string("carte cpa cash");
            // $table->string("carte visa internal");
            // $table->string("location cofre fort");
            // $table->string("garde de titres");
            // $table->string("e-banking internet pers physiq");
            // $table->string("e-banking internet pers morale");
            // $table->string("e-banking sce sms pers physiq");
            // $table->string("e-banking sce sms pers morale");
            // $table->string("e-banking sce fax pers physiq");
            // $table->string("e-banking sce fax pers morale");
             $table->string("memo");

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
