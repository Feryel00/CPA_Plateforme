
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Fiche de client</title>
  
  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="icon" type="image/png" href="{{URL::to('/images/icons/bank-logo.jpg')}}">
  
  <link rel="stylesheet" href="css/styleFormulaire.css">

</head>

<body>

  <!-- multistep form -->
<form id="msform">
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
    <h2 class="fs-title">Identification</h2>
    <!--h3 class="fs-subtitle">This is step 1</h3--> 
    
    <p> <label>Numéro: </label>  <input type="text" /> </p>
    <p> <label>Agence: </label>  <input type="text" /> </p>
    <p> <label>Nom: </label>     <input type="text" /> </p>
    <p> <label>Prénom: </label>   <input type="text" /> </p>
    

    </br> <h2 class="fs-title">Pièces d'identités</h2>
    <p> <label>Type: </label>  <input type="text" /> </p>
    <p> <label>Numéro: </label>  <input type="text" />
        <label>Validité: </label>     <input type="date" />  </p>
    <p> <label>Délivrée à: </label>     <input type="text" /> 
        <label>Le: </label>     <input type="text" /> </p>
  
     

</br>
    <span class="next button">Suivant</span>

  </fieldset>


  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />

    <label>date: </label>    <input type="date" />   </p>
    <p> <label>Age: </label>     <select>  <option>Choose</option>  </select> </p>


    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
 
</form>


<script src='/js/jquery.min.js'></script>
<script src='/js/jquery.easing.min.js'></script>

    <script src="/js/indexFormulaire.js"></script>

</body>
</html>
