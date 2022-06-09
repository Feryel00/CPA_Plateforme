@extends('dashboard')
@section('title')
Charge Credit
@endsection
@section('aside')
<div class="brand-logo" >
    <!-- <a href="index.html"> -->
     <img src="images/icons/bank-logo.jpg" class="logo-icon" alt="logo">
     <h5 class="logo-text">Charge Credit</h5>
   <!-- </a> -->
 </div>
 <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">MAIN NAVIGATION</li>
    <li>
      <a href="/">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Acceuil</span>
      </a>
    </li>

    <li>
      <a href="/listClient" >
           <i class="zmdi zmdi-account-circle"></i> <span>Liste des clients</span>


      </a>
    </li>
    <li>
      <a href="/ficheScoring" >
           <i class="zmdi zmdi-account-circle"></i> <span>Fiche de scoring</span>
      </a>
    </li>
     <li>
      <a href="/lister" >
           <i class="zmdi zmdi-account-circle"></i> <span>Gestion des comptes credit</span>


      </a>
    </li>



    <!-- <li class="sidebar-header">LABELS</li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> -->

  </ul>

@endsection


