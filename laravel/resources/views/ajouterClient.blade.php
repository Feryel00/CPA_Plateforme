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
    <li>Memo</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Identification</h2><br>
    <!--h3 class="fs-subtitle">This is step 1</h3-->

    <p> <label>Numéro:   <span class="text-danger"> * </span> </label>
        <input type="text" id="fname" name="fname" placeholder="" onblur="validate(1)"/> </p>

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


    </br> <h2 class="fs-title">Pièces d'identités</h2>

    <p> <label>Type: <span class="text-danger"> * </span></label>
         <input type="text" id="type" name="type" placeholder="" onblur="validate(5)"/> </p>

    <p> <label>Numéro: <span class="text-danger"> * </span> </label>
        <input type="text" id="ans" name="numero" placeholder="" onblur="validate(6)"/>
       <label>Validité: <span class="text-danger"> * </span> </label>
            <input type="date" name="validite_one"/>  </p>

    <p> <label>Délivrée à: <span class="text-danger"> * </span> </label>
          <input type="text" name="delivre_à"/>
        <label>Le: <span class="text-danger"> * </span> </label>
           <input type="text" name="le_one"/> </p>

</br>

    <p> <label>Passeport  numéro: </label>  <input type="text"name="passport_numero" />
        <label>Validité: </label>     <input type="date" name="validite_pss"/>  </p>
    <p> <label>Délivrée à: </label>     <input type="text" name="delivre_a"/>
        <label>Le: </label>     <input type="text" name="le_pass"/> </p>

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
   <span class="next button">Suivant</span>

  </fieldset>


  <fieldset>
    <h2 class="fs-title">Informations</h2><br>
    <!--h3 class="fs-subtitle">Your presence on the social network</h3-->
    <p> <label>Nationalité:   <span class="text-danger"> * </span></label>
          <select name="nationalite">
          <option value="fr" selected="selected">Française</option>
            <option value="ma" selected="">Marocaine</option>
            <option value="dz" selected="">Algérienne </option>

          </select> </p>

    <p> <label>Pays de résidence:   <span class="text-danger"> * </span></label>
          <select name="pays_residence">
          <option value="fr" selected="selected">France</option>
            <option value="ma" selected="">Maroc</option>
            <option value="dz" selected="">Algérie</option>
          </select> </p>

          <p> <label>Cat. interne:   <span class="text-danger"> * </span></label>
          <select name="cat_interne">
             <option value="Client_Standard" selected="selected">Client Standard</option>
          </select> </p>

          <p> <label>Cat. bq cent:   <span class="text-danger"> * </span></label>
          <select name="cat">
             <option value="salaries" selected="selected">Salaries</option>
          </select> </p>

          <p> <label>Qualité client:  <span class="text-danger"> * </span></label>
          <select name="qualite_client">
             <option value="normal" selected="selected">Normal</option>
          </select> </p>

<br>



   <p> <label>Gestionnaire:  <span class="text-danger"> * </span></label>
          <select name="gestionnaire">
             <option value="charge clientèle catégorie 2 " selected="selected">Charge clientèle catégorie 2</option>
          </select>
          <label>Ouvert: <span class="text-danger"> * </span> </label>     <input type="date" name="Ouvert"/>
        </p>

          <!--input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" /-->

    <span class="previous button">Précédent</span>
    <span class="next button">Suivant</span>
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Titulaire</h2><br>

    <!--h3 class="fs-subtitle">Your presence on the social network</h3-->
    <p>  <label>Date de naissance: <span class="text-danger"> * </span> </label>
          <input type="date" name="date_de_naissance_titulaire"/>
        </p>

        <p> <label>Code territorialité: <span class="text-danger"> * </span> </label>
          <input type="text" name="code_territorialite"/></p>

    <p> <label>Département de naiss.:  <span class="text-danger"> * </span></label>
          <select name="departement_de_naissance">
          <option value="ORN" selected="selected">Oran</option>
             <option value="TLM" selected="selected">Tlemcen</option>
          </select> </P>

          <p> <label>Commune de naissance:  <span class="text-danger"> * </span></label>
          <select name="commune_de_naissance">
          <option value="ORN" selected="selected">Oran</option>
             <option value="TLM" selected="selected">Tlemcen</option>
          </select> </P>


<br>
    <!--p><label>Sexe: <span class="text-danger"> * </span> </label>
       <input type="checkbox" name="sexe" value="M">Masculin </input>
       <input type="checkbox" name="sexe" value="F"/>Féminin</input>
</p-->
<p> <label>Sexe: <span class="text-danger"> * </span></label>
          <select name="sexe">
             <option value="F" selected="selected">Féminin</option>
             <option value="M" selected="selected">Masculin</option>
          </select> </P>


    <p> <label>Nom de jeune fille:  </label>     <input type="text" name="nom_de_jeune_fille"/></p>
    <p> <label>Nom de la mère: <span class="text-danger"> * </span> </label>
          <input type="text" name="nom_de_la_mere"/></p>
    <p> <label>prénom de la mère: <span class="text-danger"> * </span> </label>
          <input type="text" name="prenom_de_la_mere"/></p>

          <br>
          <p> <label>Profession: <span class="text-danger"> * </span></label>
          <select name="profession">
             <option value="cadre superieur" selected="selected">Cadre supérieur</option>
          </select> </p>

          <p> <label>Nom de l'employeur:</label>  <input type="text" name="nom_de_employeur"/></p>

          <p> <label>Revenus:</label>  <input type="text" name="revenus"/></p>

</br>
<p> <label>Situation famille: <span class="text-danger"> * </span></label>
          <select name="situation_famille">
             <option value="célibataire" selected="selected">Célibataire</option>
             <option value="divorcé" selected="selected">Divorcé(e)</option>
             <option value="veuf" selected="selected">veuf(veuve)</option>
             <option value="marié" selected="selected">Marié(e)</option>
          </select> </p>

          <p> <label>Régime matrimonial:</label>
          <input type="text" name="regime_matrimonial"/></p>

          <p> <label>Capacité juridique: <span class="text-danger"> * </span></label>
          <select name="capacite_juridique">
             <option value="majeur" selected="selected">Majeur(e)</option>
          </select> </p>
    <!--input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" /-->
    <span class="previous button">Précédent</span>
    <span class="next button">Suivant</span>
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Conjoint</h2>
    <!--h3 class="fs-subtitle">Your presence on the social network</h3--></br>
    <p> <label>Nom de jeune fille:  </label>     <input type="text" name="nom_de_conjoint"/></p>
    <p> <label>Prenom: <span class="text-danger"> * </span> </label>
    <input type="text" name="prenom_de_conjoint"/></p>

</br>

<p>  <label>Date de naissance: <span class="text-danger"> * </span> </label>
          <input type="date" name="date_de_naissance_conjoint"/>
        </p>

        <p> <label>Code territorialité: <span class="text-danger"> * </span> </label>
          <input type="text" name="code_territorialite_conjoint"/></p>

    <p> <label>Département de naiss.:  <span class="text-danger"> * </span></label>
          <select name="departement_de_naissance_conjoint">
          <option value="ORN" selected="selected">Oran</option>
             <option value="TLM" selected="selected">Tlemcen</option>
          </select> </P>

          <p> <label>Commune de naissance:  <span class="text-danger"> * </span></label>
          <select name="commune_de_naissance_conjoint">
             <option value="ORN" selected="selected">Oran</option>
             <option value="TLM" selected="selected">Tlemcen</option>
          </select> </P>


<br>

<p> <label>Sexe: <span class="text-danger"> * </span></label>
          <select name="sexe_conjoint">
             <option value="F" selected="selected">Féminin</option>
             <option value="M" selected="selected">Masculin</option>
          </select> </P>

    <p> <label>Nom de jeune fille:  </label>     <input type="text" name="nom_de_jeune_fille_conjoint"/></p>


          <br>
          <p> <label>Profession: <span class="text-danger"> * </span></label>
          <select name="profession_conjoint">
             <option value="cadre superieur" selected="selected">Cadre supérieur</option>
          </select> </p>

          <p> <label>Nom de l'employeur:</label>  <input type="text" name="nom_d_employeur_conjoint"/></p>

          <p> <label>Revenus:</label>  <input type="text" name="revenus_conjoint"/></p>

</br>
<p> <label>Situation famille: <span class="text-danger"> * </span></label>
          <select name="situation_famille_conjoint">
             <option value="célibataire" selected="selected">Célibataire</option>
             <option value="divorcé" selected="selected">Divorcé(e)</option>
             <option value="veuf" selected="selected">veuf(veuve)</option>
             <option value="marié" selected="selected">Marié(e)</option>
          </select> </p>


          <p> <label>Capacité juridique: <span class="text-danger"> * </span></label>
          <select name="capacite_juridique_conjoint">
             <option value="majeur" selected="selected">Majeur(e)</option>
          </select> </p>
    <!--input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" /-->
    <span class="previous button">Précédent</span>
    <span class="next button">Suivant</span>
  </fieldset>



  <fieldset>
    <h2 class="fs-title">Services Annexes</h2></br>
    <span class="previous button">Précédent</span>
    <span class="next button">Suivant</span>
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Memo</h2></br>
    <p>
       <label for="ameliorer">

       </label></p>
       <br />

       <textarea name="memo" id="memo" rows="15" cols="30" placeholder="">

       </textarea>
</br>
    <!--input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" /-->
    <span class="previous button">Précédent</span>
    <span  type="submit" class="submit button"> Soumettre</span>

    <button  type='submit' class="submit button" > Submit</button>
    <!-- <span class="submit button">Submit</span> -->
  </fieldset>

</form>
<script src='/js/jquery.min.js'></script>
<script src='/js/jquery.easing.min.js'></script>

    <script src="/js/indexFormulaire.js"></script>
