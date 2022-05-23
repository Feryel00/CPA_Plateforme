

 @php

@endphp





<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}



.container1 {
  padding: 20px;
  background-color: #f1f1f1;
}


</style>
<body>

<h2>Fiche Compte</h2>


  <div class="container1">
    <h2>Voir les Information du {{ $compte->nom_client }}</h2>
    <table >
        <tr><td><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom*</strong>
                {{ $compte->id }}
            </div>
        </div></td>
        <tr><td><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom*</strong>
                {{ $compte->nom_client }}
            </div>
        </div></td>



        <td></td></tr>



        <tr><td><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom*</strong>
                {{ $compte->prenom_client}}
            </div>
        </div></td>



            <td><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Solde*</strong>
                {{ $compte->solde }}
            </div>
        </div></td>




            <br></tr>

    </table>

  <div class="container1" style="background-color:red">



</body>
</html>










