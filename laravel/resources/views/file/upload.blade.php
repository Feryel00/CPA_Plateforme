<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h5>File Upload</h5>
<div class="card-body">
<form action="{{route('uploadfile')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="file" name="file" >
        <input type="text" name="fdescription" >Description
    </div>
    <button type="submit">Upload</button>
    <a href="{{route('viewfile')}}">Back</a>
</form>
</div>
</div>
</div>
</div>
</div>
