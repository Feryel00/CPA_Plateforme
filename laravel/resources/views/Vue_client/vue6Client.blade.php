@extends('Vue_client/vueClient')
@section('content')
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Gestion des clients</h3>
                <p class="blue-text"></p>
                <div class="card">

                    <form class="form-card" onsubmit="event.preventDefault()">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Memo<span class="text-danger"> *</span></label>
                            <input type="text" id="fname" name="memo" placeholder="Enter your comment" onblur="validate(1)"> </div>
                        </div>



                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6">

                                <button type="submit" class="btn-block btn-primary">Envoyer</button>

                                <button type="submit" class="btn-block btn-primary">Précedant</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
