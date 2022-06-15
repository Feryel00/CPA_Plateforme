
@extends('dashboard')
@section('title')
Directeur
@endsection

@section('aside')

<div class="brand-logo" >
    <!-- <a href="index.html"> -->
     <img src="images/icons/bank-logo.jpg" class="logo-icon" alt="logo">
     <h5 class="logo-text">Directeur</h5>
   <!-- </a> -->
 </div>
 <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">NAVIGATION PRINCIPALE</li>
    <li>
      <a href="/">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Acceuil</span>
      </a>
    </li>

     <li>
      <a href="/gestion_clients_directeur" >
      <i class="zmdi zmdi-accounts"></i>  <span>Clients</span>
      </a>
    </li>
    <li>
      <a href="/gestion_comptes_directeur" >
        <i class="zmdi zmdi-account-circle"></i> <span>Comptes</span>
      </a>
    </li>
    <li>
      <a href="/gestion_employe" >
      <i class="zmdi zmdi-accounts-list-alt"></i> <span>Employés</span>
      </a>
    </li>


    <!-- <li class="sidebar-header">LABELS</li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> -->

  </ul>

@endsection



