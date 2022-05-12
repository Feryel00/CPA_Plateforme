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


         $client->save();
        return redirect('client/ajouterClient');
    }

    function lister(){
        $data=Client::all();
          return view('/Client/lister',['clients'=>$data]);
    }
    function supprimerClient(){

    }
}
