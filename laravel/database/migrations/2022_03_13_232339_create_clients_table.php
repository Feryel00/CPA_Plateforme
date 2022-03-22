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
            $table->date("validite_one");
            $table->date("delivre_à");
            $table->string("le_one");
            $table->string("passport_numero");
            $table->date("validite_pss");
            $table->string("delivre_a");
            $table->string("le_pass");
            $table->string("identif_sociale");
            $table->string("ind");
            $table->string("no_stat");
            $table->string("no_clt");
            $table->string("ident_cent_risq");
            $table->string("code_dec");
            $table->string("casier");
            $table->string("apurement");

            $table->string("nationalite");
            $table->string("pays_residence");
            $table->string("cat_interne");
            $table->string("cat");
            $table->string("qualite_client");
            $table->string("gestionnaire");
            $table->string("Ouvert");
            //$table->string("famille");
            //$table->string("groupe");
            $table->string("date_de_naissance_titulaire");
            $table->string("code_territorialite");
            $table->string("departement_de_naissance");
            $table->string("commune_de_naissance");
            $table->string("sexe");
            $table->string("nom_de_jeune_fille");
            $table->string("nom_de_la_mere");
            $table->string("prenom_de_la_mere");
            $table->string("profession");
            $table->string("nom_de_emmployeur");
            $table->string("revenus");
            $table->string("situation_famille");
            //$table->string("regime_famille");
            $table->string("regime_matrimonial");
            $table->string("capacite_juridique");
            $table->string("nom_de_conjoint");
            $table->string("prenom_de_conjoint");
            $table->string("date_de_naissance_conjoint");
            $table->string("code_territorialite_conjoint");
            $table->string("departement_de_naissance_conjoint");
            $table->string("commune_de_naissance_conjoint");
            $table->string("sexe_conjoint");
            $table->string("nom_de_jeune_fille_conjoint");
            $table->string("profession_conjoint");
            $table->string("nom_d_employeur_conjoint");
            $table->string("revenus_conjoint");
            $table->string("situation_famille_conjoint");
            $table->string("capacite_juridique_conjoint");

            // $table->string("carte_cpa_cash");
            // $table->string("carte_visa_internal");
            // $table->string("location_cofre_fort");
            // $table->string("garde_de_titres");
            // $table->string("ebanking_internet_pers_physiq");
            // $table->string("ebanking_internet_pers_morale");
            // $table->string("ebanking_sce_sms_pers_physiq");
            // $table->string("ebanking_sce_sms_pers_morale");
            // $table->string("ebanking_sce_fax_pers_physiq");
            // $table->string("ebanking_sce_fax_pers_morale");
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
