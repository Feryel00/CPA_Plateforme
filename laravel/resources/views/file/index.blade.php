@extends('chargeClienteleDashboard')
@section('contentDash')

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fichiers</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

</head>
{{-- add new employee modal start --}}
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" id="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Fichier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('uploadfile')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row mt-3">
        <div class="col-lg-6">
        <input type="file" name="file" >
        Description<input type="text" name="fdescription" >
    </div></div>
    <button type="submit">Télécharger</button>
    <a href="{{route('viewfile')}}">Retour</a>
</form>
    </div>
  </div>
</div>
{{-- add new employee modal end --}}

{{-- edit employee modal start --}}



<div class="container" >
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow position" id="pos">
          <div class="card-header  d-flex justify-content-between align-items-center" style='background-color:blue'>
            <h3 class="text-light "style='background-color:blue'>Documents </h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="bi-plus-circle me-2"></i>Ajouter Fichier</button>
          </div>
          <div>
          <div>
          @foreach($files as $file)



         <table class='table table-responsive table-striped table-sm  align-middle' >
             <tr>
                 <td style='width:90%'> {{ $file ->description}}</td>
                 <td><button class="btn text-sm text-gray-700 dark:text-gray-500 underline"><a href="{{route('downloadfile', $file->id)}}">Télécharger</a></button></td>
             </tr>
         </table>




@endforeach
          </div>
          </div>
          <div class="card-body" id="show_all_employees">
            <!-- <h1 class="text-center text-secondary my-5">Chargement...</h1> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(function() {

      // add new employee ajax request
      $("#add_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_employee_btn").text('Adding...');
        $.ajax({
          url: '{{ route('uploadfile') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Creé!',
                'Compte Creé Avec Succès!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#add_employee_btn").text('Add Employee');
            $("#add_employee_form")[0].reset();
            $("#addEmployeeModal").modal('hide');
          }
        });
      });

      // edit employee ajax request
      $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '{{ route('editCom') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#cNom_client").val(response.nom_client);
            $("#cPrenom_client").val(response.prenom_client);
            $("#cSolde").val(response.solde);

            $("#cClient_id").val(response.client_id);


            $("#emp_id").val(response.id);

          }
        });
      });

    });
  </script>

@endsection
