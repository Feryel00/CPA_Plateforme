

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Scoring</title>
    <style>
       .card{
           color:black;
           margin:auto  ;
           padding:20px;
           text-align:20px;
           background-color:rgb(69 151 217 / 69%);
           height:100%;
           width:70%;

       }
       label{
           margin:20px;

           /* padding:10px; */

           font-size:20px;
       }
       .flex{
           display:flex;
       }
    </style>
</head>
<body>
<div class='card' >

<h1>Fiche Client</h1>
<!-- <img src="../../../public/images/icons/bank-logo.jpg" > -->
<div>




    <h3>Identification</h3>
    <label for="" >Nom de client </label> <label for=""><strong>Bouchachia</strong></label>   </div>
 <label for="" >Prénom de client</label> <strong>{{$client->prenom}}</strong>
 <br>

 <label for="" >Numéro de téléphone </label> <strong>{{$client->numero_tel}} </strong>
 <br>
 <label for="" >Type de client </label><strong>{{$client->type}}</strong>
 <br>
 <label for="" >Numéro de passport  </label><strong>{{$client->passport_numero}}</strong>

 <br>
 <h3>Titulaire</h3>
 <label for="" >Date de naissance </label><strong>{{$client->date_de_naissance_titulaire}}</strong>

 <br>
 <label for="" >Département de naissance  </label><strong>Tlemcen</strong>
 <br>
 <label for="" >Profession  </label><strong>{{$client->profession}}</strong>
 <br>
 <label for="" >Revenus   </label><strong>{{$client->revenus}}</strong>
 <br>
 <label for="" >Situation familiale  </label><strong>{{$client->situation_famille}}</strong>
 <br>
 <h3>Conjoint</h3>
 <label for="" >Nom de conjoint </label><strong>{{$client->nom_de_conjoint}}</strong>
 <br>
 <label for="" >Prénom de conjoint </label><strong>{{$client->prenom_de_conjoint}}</strong>
 <br>
 <label for="" >Date de naissance  Conjoint  </label><strong>{{$client->date_de_naissance_conjoint}}</strong>
 <br>
 <label for="" >Sexe conjoint  </label><strong>{{$client->sexe_conjoint}}</strong>
 <br>
 <label for="" >Profession conjoint  </label><strong>{{$client->profession_conjoint}}</strong>
 <br>
 <label for="" >Revenus conjoint  </label><strong>{{$client->revenus_conjoint}}</strong>
 <br>
 <label for="" >Situation familiale conjoint  </label><strong>{{$client->situation_famille_conjoint}}</strong>


</div>
</div>

</body>
</html>


