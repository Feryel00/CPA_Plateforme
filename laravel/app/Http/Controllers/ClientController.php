<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    function ajouterClient(Request $req){
         $client = new Client;
         $client->agence=$req->agence;
         $client->nom=$req->nom;
         $client->prenom=$req->prenom;
         $client->type=$req->type;
         $client->numero=$req->numero;
         $client->validite_one=$req->validite_one;
         $client->delivre_à=$req->delivre_à;
         $client->le_one=$req->le_one;
         $client->passport_numero=$req->passport_numero;
         $client->validite_pss=$req->validite_pss;
         $client->delivre_a=$req->delivre_a;
         $client->le_pass=$req->le_pass;
         $client->identif_sociale=$req->identif_sociale;
         $client->ind=$req->ind;
         $client->no_stat=$req->no_stat;
         $client->no_clt=$req->no_clt;
         $client->ident_cent_risq=$req->ident_cent_risq;
         $client->code_dec=$req->code_dec;
         $client->casier=$req->casier;
         $client->apurement=$req->apurement;
         $client->nationalite=$req->nationalite;
         $client->pays_residence=$req->pays_residence;
         $client->cat_interne=$req->cat_interne;
         $client->cat=$req->cat;
         $client->qualite_client=$req->qualite_client;
         $client->gestionnaire=$req->gestionnaire;
         $client->Ouvert=$req->Ouvert;
         //$client->famille=$req->famille;
         //$client->groupe=$req->groupe;
         $client->date_de_naissance_titulaire=$req->date_de_naissance_titulaire;
         $client->code_territorialite=$req->code_territorialite;
         $client->departement_de_naissance=$req->departement_de_naissance;
         $client->commune_de_naissance=$req->commune_de_naissance;
         $client->sexe=$req->sexe;
         $client->nom_de_jeune_fille=$req->nom_de_jeune_fille;
         $client->nom_de_la_mere=$req->nom_de_la_mere;
         $client->prenom_de_la_mere=$req->prenom_de_la_mere;
         $client->profession=$req->profession;
         $client->nom_de_emmployeur=$req->nom_de_emmployeur;
         $client->revenus=$req->revenus;
         $client->situation_famille=$req->situation_famille;
        // $client->regime_famille=$req->regime_famille;
         $client->regime_matrimonial=$req->regime_matrimonial;
         $client->capacite_juridique=$req->capacite_juridique;
         $client->nom_de_conjoint=$req->nom_de_conjoint;
         $client->prenom_de_conjoint=$req->prenom_de_conjoint;
         $client->date_de_naissance_conjoint=$req->date_de_naissance_conjoint;
         $client->code_territorialite_conjoint=$req->code_territorialite_conjoint;
         $client->departement_de_naissance_conjoint=$req->departement_de_naissance_conjoint;
         $client->commune_de_naissance_conjoint=$req->commune_de_naissance_conjoint;
         $client->sexe_conjoint=$req->sexe_conjoint;
         $client->nom_de_jeune_fille_conjoint=$req->nom_de_jeune_fille_conjoint;
         $client->profession_conjoint=$req->profession_conjoint;
         $client->nom_d_employeur_conjoint=$req->nom_d_employeur_conjoint;
         $client->revenus_conjoint=$req->revenus_conjoint;
         $client->situation_famille_conjoint=$req->situation_famille_conjoint;
         $client->capacite_juridique_conjoint=$req->capacite_juridique_conjoint;
         $client->carte_cpa_cash=$req->carte_cpa_cash;
         $client->carte_visa_internal=$req->carte_visa_internal;
         $client->location_cofre_fort=$req->location_cofre_fort;
         $client->garde_de_titres=$req->garde_de_titres;
         $client->ebanking_internet_pers_physiq=$req->ebanking_internet_pers_physiq;
         $client->ebanking_internet_pers_morale=$req->ebanking_internet_pers_morale;
         $client->ebanking_sce_sms_pers_physiq=$req->ebanking_sce_sms_pers_physiq;
         $client->ebanking_sce_sms_pers_morale=$req->ebanking_sce_sms_pers_morale;
         $client->ebanking_sce_fax_pers_physiq=$req->ebanking_sce_fax_pers_physiq;
         $client->ebanking_sce_fax_pers_morale=$req->ebanking_sce_fax_pers_morale;


        //  $client->delivre_à=$req->delivre_à;
        //  $client->passport_numero=$req->pasport_numero;
        //  $client->delivre_a=$req->delivre_a;
        //  $client->identif_sociale=$req->identif_sociale;
        //  $client->ind=$req->ind;
        //  $client->ident_cent_Risq=$req->ident_cent_Risq;
         $client->memo=$req->memo;

         $client->save();
        return redirect('Vue');
    }
}
