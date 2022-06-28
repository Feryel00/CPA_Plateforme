<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information de carte bancaire</title>
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

<h1>Information de carte</h1>
<!-- <img src="../../../public/images/icons/bank-logo.jpg" > -->
<div>




 <label for="" >Prénom de client</label> <strong>{{$carte->num_carte}}</strong>
 <br>

 <label for="" >Numéro de téléphone : </label> <strong>{{$carte->date_expiration}} </strong></br>
 <label for="" >Le type de carte :</label> <strong>
 @if($carte->category_id =='1')

  <strong>CIB Classique  </strong></br>
  <img src="/images/icons/cib_cpa.PNG" alt="CIB">
@elseif($carte->category_id =='2')
<strong>GOLD   </strong></br>
<img src="/images/icons/cpaGold.PNG" alt="CIB">
@elseif($carte->category_id =='3')
<strong>Corporate  </strong>
<img src="/images/icons/corporate.PNG" alt="CIB">
 @endif
 <br>
 <h3>Le client associé</h3>
 @foreach($clients as $client)
               <label for="" >Nom </label> <strong>{{$client->nom}} </strong> <br>
               <label for="" >Prenom </label> <strong>{{$client->prenom}} </strong> <br>
               <label for="" >Date de naissance</label> <strong>{{$client->date_de_naissance_titulaire}} </strong> <br>

    @endforeach
 <br>

</div>
</div>

</body>
</html>


