<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Scoring</title>
    <link rel="icon" type="image/png" href="{{URL::to('/images/icons/bank-logo.jpg')}}">
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

<h1>Fiche Scoring Credit Immobiliere</h1>
<div>

<label for="" >Nom: </label>
               <label for=""><strong>{{$score->nom}}</strong></label>   </div>



 <label for="" >Prénom:</label> <strong>{{$score->prenom}}</strong>
 <br>
 <label for="" >Age: </label> <strong>{{$score->age}}</strong>
 <br>
 <label for="" >Adresse:  </label><strong>{{$score->adresse}}</strong>
 <br>
 <label for="" >Sexe:  </label><strong>{{$score->sex}}</strong>
 <br>
 <label for="" >Prix: </label><strong>{{$score->prix}} DA</strong>
 <br>
 <label for="" >Revenu Postulant: </label> <strong>{{$score->revenu_postulant}}</strong>

 <br>
 <label for="" >Durée de crédit:</label> <strong>{{$dure}} ans</strong>

 <br>
 <label for="" >Montant Apport:</label> <strong>{{$montant_apport}} DA</strong>

</div>
</div>

</body>
</html>

