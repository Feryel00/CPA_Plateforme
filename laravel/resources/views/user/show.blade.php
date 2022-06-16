<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}



.container1 {
  padding: 20px;
  background-color: #AED6F1;
}


</style>
<body>
<title>Fiche employé</title>
<h2>Fiche employé</h2>


  <div class="container1" >
    <h2>Voir les Informations du {{ $user->name }}</h2>
    <table >
        <tr><td><div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong><b>Nom*: <b></strong>
                <strong>{{ $user->name }}</strong>
            </div>
        </div></td>
        <tr><td><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email: </strong>
                <strong>{{ $user->email }}</strong>
            </div>
        </div></td>



        <td></td></tr>



        <tr><td><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rôle</strong>
                @if($user->role =='1')
                <strong> Directeur</strong>
                @elseif($user->role =='2')
                <strong> Charge clientele</strong>
                @elseif($user->role =='3')
                <strong> Charge caisse</strong>
                @elseif($user->rôle =='4')
                <strong> Charge credit</strong>
                @endif
            </div>
        </div></td>






            <br></tr>

    </table>

  <div class="container1" style="background-color:#D6EAF8">



</body>
</html>










