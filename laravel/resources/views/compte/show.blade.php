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
           background-color:rgb(41 41 243 / 43%);
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

<h1>Informations de compte</h1>
<div>

<label for="" >Nom de client </label>
               <label for=""><strong>{{$compte->nom_client}}</strong></label>   </div>



 <label for="" >Prenom de client</label> <strong>{{$compte->prenom_client}}</strong>
 <br>
 <label for="" >Solde  : </label> <strong>{{$compte->solde}} </strong>
 <br>
 <label for="" >Client ID  </label><strong>{{$compte->client_id}}</strong>

</div>
</div>

</body>
</html>
