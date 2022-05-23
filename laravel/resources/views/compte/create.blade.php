
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('compte.index') }}"> Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Il ya une erreur Dans l'Input !!.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('compte.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom_client</strong>
                <input type="text" name="nom_client" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Prenom_client</strong>
                <input type="text" name="prenom_client" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Solde</strong>
                <input type="text" name="solde" class="form-control" placeholder="Enter Title">
            </div>


        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@can('delete')
<div class="form-group">
                <strong>Nom_client</strong>
                <input type="text" name="maladie" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Prenom_client</strong>
                <input type="text" name="antecedent" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Solde</strong>
                <input type="text" name="commmentaire" class="form-control" placeholder="Enter Title">
            </div>

@endcan





