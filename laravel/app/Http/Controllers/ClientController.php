<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    function ajouterClient(Request $req){
         $client = new Client;
         $client->email=$req->email;
         $client->pass=$req->pass;
         $client->cpass=$req->cpass;
         $client->fname=$req->fname;
         $client->lname=$req->lname;
         $client->phone=$req->phone;

        //  $client->delivre_à=$req->delivre_à;
        //  $client->passport_numero=$req->pasport_numero;
        //  $client->delivre_a=$req->delivre_a;
        //  $client->identif_sociale=$req->identif_sociale;
        //  $client->ind=$req->ind;
        //  $client->ident_cent_Risq=$req->ident_cent_Risq;
        //  $client->memo=$req->memo;

         $client->save();
        return redirect('Vue');
    }
}
