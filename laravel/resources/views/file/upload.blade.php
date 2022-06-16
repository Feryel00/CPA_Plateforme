<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h5>Téléchargement de fichiers</h5>
<div class="card-body">
<form action="{{route('uploadfile')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="file" name="file" >
        <input type="text" name="fdescription" >Description
    </div>
    <button type="submit">Télécharger</button>
    <a href="{{route('viewfile')}}">Retour</a>
</form>
</div>
</div>
</div>
</div>
</div>
