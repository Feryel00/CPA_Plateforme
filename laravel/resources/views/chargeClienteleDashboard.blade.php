@extends('dashboard')
@section('title')
Charge Clientele
@endsection
@section('aside')
<div class="brand-logo" >
    <!-- <a href="index.html"> -->
     <img src="images/icons/bank-logo.jpg" class="logo-icon" alt="logo">
     <h5 class="logo-text">Charge Clientele</h5>
   <!-- </a> -->
 </div>
 <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">NAVIGATION PRINCIPALE</li>
    <li>
      <a href="/">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Acceuil</span>
      </a>
    </li>
    <!-- <li>
                        <a href="/gestion_clients" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Gestion des clients</span></a>
                        <ul class=" " id="element">
                           <li><a href="general_elements.html">> <span>Clients morales</span></a></li>
                           <li><a href="media_gallery.html">> <span>Clients physiques</span></a></li>

                        </ul>
                     </li> -->

    <li>
      <a href="/gestion_clients" >
           <i class="zmdi zmdi-accounts"></i> <span>Clients</span>
      </a>
    </li>
     <li>
      <a href="/gestion_comptes" >
           <i class=" zmdi zmdi-account-circle"></i> <span> Comptes</span>


      </a>
    </li>

    <li>
      <a href="carte" >
        <!-- <i class="zmdi zmdi-account-circle"></i> -->
        <i class="zmdi zmdi-card"></i> <span>Moneitique</span>
      </a>
    </li>
    <li>
    <a href="file" >
           <i class="zmdi zmdi-book"></i> <span>Documents du services</span>

</a>

    </li>
    <!-- <li class="sidebar-header">LABELS</li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
    <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> -->

  </ul>

@endsection


