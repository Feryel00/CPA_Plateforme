<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Fiche de client</title>

  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="icon" type="image/png" href="{{URL::to('/images/icons/bank-logo.jpg')}}">

  <link rel="stylesheet" href="css/styleFormulaire.css">
  <script type="text/javascript">


window.onload=function() {
  horloge('div_horloge');
};


function horloge(el) {
  if(typeof el=="string") { el = document.getElementById(el); }
  function actualiser() {
    var date = new Date();
    //var str = date.getHours();
    //str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
    //str += ':'+(date.getSeconds()<10?'0':'')+date.getSeconds();


    el.innerHTML = date;
  }
  actualiser();
  setInterval(actualiser,1000);
}


</script>
</head>

<body>

  <!-- multistep form -->
<form action="ajouterClient" method="POST" id="msform">
    @csrf
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Identification</li>
    <li>Informations</li>
    <li>Titulaire</li>
    <li>Conjoint</li>
    <li>Services Annexes</li>
    <li>Mémo</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Identification</h2><br>
    <!--h3 class="fs-subtitle">This is step 1</h3-->

    <!-- <p> <label>Numéro:   <span class="text-danger"> * </span> </label>
        <input type="text" id="fname" name="fname" placeholder="" onblur="validate(1)"/> </p> -->

    <p> <label>Agence:   <span class="text-danger"> * </span></label>
          <select id="lname" name="agence" placeholder="" onblur="validate(2)">
            <option value="Agence1" selected="">Agence1 </option>
            <option value="Agence2" selected="selected">Agence2 </option>
            <option value="Agence3" selected="">Agence3</option>
          </select> </p>

    <p> <label>Nom: <span class="text-danger"> * </span> </label>
          <input type="text" id="nom" name="nom" placeholder="" onblur="validate(3)"/> </p>

    <p> <label>Prénom: <span class="text-danger"> * </span> </label>
          <input type="text" id="prenom" name="prenom" placeholder="" onblur="validate(4)"/> </p>
          <button  type='submit' > Soumettre</button>


</form>


<script src='/js/jquery.min.js'></script>
<script src='/js/jquery.easing.min.js'></script>

    <script src="/js/indexFormulaire.js"></script>

</body>
</html>
