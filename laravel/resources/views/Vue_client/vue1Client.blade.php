@extends('Vue_client/vueClient')
@section('content')
<div id="div_horloge"></div>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Gestion des clients</h3>

                <p class="blue-text" ></p>
                <div class="card">

                    <form class="form-card" onsubmit="event.preventDefault()">
                        <div class="row justify-content-between text-left">

                           <div class="form-group col-sm-6 flex-column d-flex">
                                   <label class="form-control-label px-3">Numero
                                       <span class="text-danger"> * </span>
                                    </label>
                                    <input type="text" id="fname" name="fname" placeholder="" onblur="validate(1)">
                            </div>

                            <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3">Agence
                                        <span class="text-danger"> *</span>
                                    </label>
                                    <input type="text" id="lname" name="agence" placeholder="" onblur="validate(2)">
                            </div>

                        </div>


                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Nom
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="email" name="nom" placeholder="" onblur="validate(3)">
                            </div>

                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Prenom
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="mob" name="prenom" placeholder="" onblur="validate(4)">
                            </div>

                        </div>


                        <h5 class="text-center mb-4"></h5>


                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Type
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="job" name="type" placeholder="" onblur="validate(5)">
                            </div>
                         </div>

                         <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Numero
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="ans" name="numero" placeholder="" onblur="validate(6)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Delivre a
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="ans" name="delivre à" placeholder="" onblur="validate(6)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Pasport numero
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="ans" name="pasport numero" placeholder="" onblur="validate(6)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Delivre a
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="ans" name="delivre a" placeholder="" onblur="validate(6)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Identif sociale
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="ans" name="identif sociale" placeholder="" onblur="validate(6)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Ind
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="ans" name="ind" placeholder="" onblur="validate(6)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Ident. Cent. Risq.
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="ans" name="ident cent Risq" placeholder="" onblur="validate(6)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                 <label class="form-control-label px-3">casier
                                     <span class="text-danger"> *</span>
                                    </label>
                                    <input type="text" id="ans" name="casier" placeholder="" onblur="validate(6)">
                                </div>
                        </div>


                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6">
                                <button  class="btn-block btn-primary">
                            <a href="{{'ajouterClient'}}" class="w3-bar-item w3-button">Suivant</a>
                            </button> </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



