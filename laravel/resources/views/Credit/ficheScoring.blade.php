
  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="icon" type="image/png" href="{{URL::to('/images/icons/bank-logo.jpg')}}">
  <title>Fiche scoring</title>
  <link rel="stylesheet" href="css/styleFormulaire.css">
  <script type="text/javascript">


</script>
</head>

<body>

  <!-- multistep form -->

<form action="ajouterClient" method="POST" id="msform">
    @csrf
  <!-- progressbar -->

  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Fiche scoring</h2><br>
    <!--h3 class="fs-subtitle">This is step 1</h3-->

    <p> <label>Nom   <span class="text-danger"> * </span> </label>
        <input type="text" id="nom" name="nom" placeholder="" onblur="validate(1)"/> </p>

    <p> <label>Prénom   <span class="text-danger"> * </span></label>
    <input type="text" id="prenom" name="prenom" placeholder="" onblur="validate(1)"/> </p>

    <p> <label>Adresse <span class="text-danger"> * </span> </label>
          <input type="text" id="nom" name="nom" placeholder="" onblur="validate(3)"/> </p>

    <p> <label>Sexe <span class="text-danger"> * </span> </label>
          <input type="text" id="prenom" name="prenom" placeholder="" onblur="validate(4)"/> </p>


    </br> <h2 class="fs-title">Pièces d'identités</h2>

    <p> <label>Prix/cout <span class="text-danger"> * </span></label>
         <input type="text" id="type" name="type" placeholder="" onblur="validate(5)"/> </p>
    <p> <label>Revenu Postulant <span class="text-danger"> * </span></label>
         <input type="text" id="type" name="type" placeholder="" onblur="validate(5)"/> </p>

    <p> <label>Revenu Conjoint <span class="text-danger"> * </span> </label>
        <input type="text" id="ans" name="numero" placeholder="" onblur="validate(6)"/>
       <label>REVENU <span class="text-danger"> * </span> </label>
            <input type="date" name="validite_one"/>  </p>

    <p> <label>Revenu caution: <span class="text-danger"> * </span> </label>
          <input type="text" name="delivre_à"/>
        <label>EMPLOI <span class="text-danger"> * </span> </label>
           <input type="text" name="le_one"/> </p>

</br>

    <p> <label>P/Mensualite</label>  <input type="text"name="passport_numero" />
        <label>ORIGINE APPORT PERSONNEL</label>     <input type="date" name="validite_pss"/>  </p>
    <p> <label>Durée Crédit </label>     <input type="text" name="delivre_a"/>
        <label>Apport PERSONNEL </label>     <input type="text" name="le_pass"/> </p>

</br>

        <p> <label>Identif. sociale </label>
         </p>

    <p> <label>Ind: </label>
        <input type="text" id="ans" name="ind" placeholder=""/></p>
     <p>  <label>No stat:</label>
            <input type="text" name="no_stat"/>
        <label>No clt:</label>
            <input type="text" name="no_clt"/>    </p>

    <p> <label>iden. Cent. Risq.:  </label>
          <input type="text" name="ident_cent_risq"/>
        <label>Code Dec:</label>
           <input type="text" name="code_dec"/> </p>

</br>
    <p> <label>Casier:  </label>
          <input type="text" name="casier"/>
        <label>Apurement:</label>
           <input type="text" name="apurement"/> </p>
</br>
   <span class="next button">Calculer</span>

  </fieldset>

</form>


<script src='/js/jquery.min.js'></script>
<script src='/js/jquery.easing.min.js'></script>

    <script src="/js/indexFormulaire.js"></script>


