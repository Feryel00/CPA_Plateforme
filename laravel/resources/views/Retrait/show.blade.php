<!-- <h1>La résultat de recherche</h1>
<div>
    <strong>Solde</strong>
    @foreach($comptes as $compte)
           {{$compte->solde}};

    @endforeach
</div> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{URL::to('/images/icons/bank-logo.jpg')}}">
    <title>Fiche Retrait</title>
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

<h1>Fiche Retrait</h1>
<!-- <img src="../../../public/images/icons/bank-logo.jpg" > -->
<div>





    <label for="" >Numéro de compte  </label> <label for=""><strong>{{$retrait->num_compte}}</strong></label>   </div>
 <label for="" >Montant retiré</label> <strong>{{$retrait->montant}} DA</strong>
 <br>

 <label for="" >Date de retrait </label> <strong>{{$retrait->created_at}} </strong>
 <br>

</div>
</div>

</body>
</html>


