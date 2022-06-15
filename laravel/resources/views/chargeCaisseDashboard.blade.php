@extends('dashboard')
@section('title')
Charge Clientele
@endsection
@section('aside')
<div class="brand-logo" >
    <!-- <a href="index.html"> -->
     <img src="images/icons/bank-logo.jpg" class="logo-icon" alt="logo">
     <h5 class="logo-text">Chargé Caisse</h5>
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
      <a href="/gestion_clients" >
           <i class="zmdi zmdi-account-circle"></i> <span>Gestion des clients</span>
      </a>
    </li>
     <li>
      <a href="{{route('compte.index')}}" >
           <i class="zmdi zmdi-account-circle"></i> <span>Gestion des comptes</span>


      </a>
    </li>
    <li>
      <a href="{{route('compte.index')}}" >
           <i class="zmdi zmdi-account-circle"></i> <span>Virement</span>
      </a>
    </li>

    <li>
      <a href="{{route('compte.index')}}" >
           <i class="zmdi zmdi-account-circle"></i> <span>Retrait</span>
      </a>
    </li>


    <li class="sidebar-header">Étiquettes</li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Avertissement</span></a></li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

  </ul>

@endsection


