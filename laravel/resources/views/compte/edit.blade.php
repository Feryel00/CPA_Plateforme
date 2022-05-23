
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Modifier un compte</h2>
               </div>
               <div class="pull-right">
                   <a class="btn btn-primary" href="{{ route('compte.index') }}"> Retoure</a>
               </div>
           </div>
       </div>

       @if ($errors->any())
           <div class="alert alert-danger">
               <strong>Whoops!</strong> Il ya probleme dans L'input !!.<br><br>
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif


       <form action="{{ route('compte.update',$compte->id) }}" method="POST">
           @csrf
           @method('PUT')

            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Nom_client</strong>
                       <input type="text" name="nom_client" value="{{ $compte->nom_client }}" class="form-control" placeholder="Title">
                   </div>
               </div>



            <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Prenom_client</strong>
                       <input type="text" name="prenom_client" value="{{ $compte->prenom_client }}" class="form-control" placeholder="Title">
                   </div>
               </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Solde</strong>
                       <input type="text" name="solde" value="{{ $compte->solde }}" class="form-control" placeholder="Title">
                   </div>
               </div>


               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">Modifier</button>
               </div>
           </div>

       </form>

