


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des cartes</title>
    <link rel="icon" type="image/png" href="{{URL::to('/images/icons/bank-logo.jpg')}}">

    <style>
        th{
            color:red;
            padding-right:30px;
        }
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

@if( $categories)
<h3>La liste des cartes crées

             </h3>

 <table style='border:5px' class="table table-responsive table-striped table-sm text-center align-middle">
            <thead>
              <tr >


                <th >Numero de carte</th>
                <th>Date Expiration </th>
                <th>Category_id </th>

              </tr>
            </thead>
            <tbody>
            @foreach($cartes as $carte)
            <tr>
            <td> <strong>{{$carte->num_carte}} </strong></td>
            <td><strong>{{$carte->date_expiration}} </strong> </td>
            @if($carte->category_id=='1')
            <td><strong>CIB </strong> </td>
            @endif
    </tr>
            @endforeach

    </table>

        @endif









<div>


</div>
</div>

</body>
</html>




