@extends('chargeClienteledashboard')
@section('contentDash')
<!-- <h2 style='background-color:red'>La liste des clients</h2>
 -->
<div class="card-lg-12">
            <div class="card-body" style='background-color:lightblue'>
              <!-- <h5 class="card-title"style='color:red'></h5> -->
              <button type="button" class="btn btn-primary" style='background-color:rgb(0,0,55)'>
              <a href='/ajouterClient'>
              Nouveau Client
</a>
              </button>
              <div class="table-responsive">
                <table class="table">
                    <head>
    <tr>
        <th scope="col">Id</td>
        <th scope="col">Agence</td>
        <th scope="col">Nom</td>
        <th scope="col">Prenom</td>


</tr>
</head>
<tbody>
@foreach($clients as $client)
<tr>
        <th scope="row">{{$client['id']}}</td>
        <td>{{$client['agence']}}</td>
        <td>{{$client['nom']}}</td>
        <td>{{$client['prenom']}}</td>
        <td>
           <button type="button" class="btn btn-primary"> <a href={{"delete/".$client['id']}}>Supprimer </a></button>
            <button type="button" class="btn btn-warning"><a href={{"edit/".$client['id']}}>Modifier </a></button>
        </td>

</tr>
@endforeach
</tbody>
</table>






              </div>
            </div>
          </div>
@endsection
