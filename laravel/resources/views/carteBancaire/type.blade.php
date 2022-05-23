@extends('chargeClienteleDashboard')
@section('title')
Cartes
@endsection
@section('contentDash')




    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title " style='background-color:red'>Carte CIB</h5>
			  <div class="table-responsive">
               <table class="table">
               <td><img src="images\icons/cib_cpa.png" alt=""></td>
                </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style='background-color:red'>Carte GOLD</h5>
			  <div class="table-responsive">
              <table class="table table-bordered">
              <td><img src="images\icons/cpaGold.png" alt=""></td>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->


      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style='background-color:red'>Carte Corporate</h5>
			  <div class="table-responsive">
               <table class="table table-striped">
               <td><img src="images\icons/corporate_cpa.png" alt=""></td>
                </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style='background-color:red'>Carte CORPORATE+</h5>
			  <div class="table-responsive">
              <table class="table table-hover">
                <td><img src="images\icons/corpoPlus.png" alt=""></td>

              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

	<!--Start footer-->


	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>

      <!-- <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul> -->

      <p class="mb-0">Gradient Background</p>
      <hr>



     </div>
   </div>
@endsection
