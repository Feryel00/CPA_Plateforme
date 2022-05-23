@extends('chargeClienteledashboard')

@section('title')
Comptes
@endsection
@section('contentDash')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
</head>






    @if ($message = Session::get('success'))
        <div class="alert alert-info">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">

    <div class="row" style="margin-top: 2rem;">



            <div class="pull-right">
                <a class="btn btn-danger" href="{{ route('compte.create') }}"> Crer nouveau compte</a>
            </div>
    </div> <br>


    <table id="example" class="table " style="">
        <thead class="thead-dark">
          <tr>

            <th>Nom_Client</th>
            <th>Prenom_client</th>
            <th width="180px">solde</th>



            <th width="280px" align="center">Action</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($data as $key => $value)
        <tr>

            <td>{{ $value->nom_client }}  </td>
            <td>{{ $value->prenom_client }}</td>
            <td>{{ $value->solde}}</td>






            <td>  <form action="{{ route('compte.destroy',$value->id) }}" method="POST">
                    <a class="" style="color:blue" href="{{route('compte.show',$value->id) }}"><i class="bi bi-eye-fill  color-blue h4"></i></a>
                    <a class="editIcon" href="{{ route('compte.edit',$value->id) }}"><i class="bi-pencil-square  color-green h4"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="deleteIcon"><i class="bi-trash color-red h4"></i></button>
                </form>
            </td>

        </tr>

        @endforeach
        </tbody>

    </table></div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <script >$(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true
    } );
} );</script>



</html>
@endsection
