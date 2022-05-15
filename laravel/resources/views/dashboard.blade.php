<x-app-layout>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>



<!--Start sidebar-wrapper-->
 <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true"  >
    <div id="wrapper"> @yield('aside')</div>

</div>

<div class="content-wrapper"  >
    <div class="container-fluid" >

    <div class="row mt-3" >
      <div class="col-lg-12" >
         <div class="card" style="background-color:white">

           <!-- <div class="card-title" style="color:red">@yield('tache')</div> -->

           @yield('contentDash')




         </div>
         </div>
      </div>
    </div>
</div>
</x-app-layout>

