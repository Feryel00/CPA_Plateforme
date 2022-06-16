@extends('chargeClienteleDashboard')
@section('contentDash')

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Création d'un compte</title>
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
        <h5 class="modal-title" id="exampleModalLabel">Créer nouveau compte</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">

        <div class="col-lg">
              <label for="cNom_client" style='color:blue'>Nom Client</label>
              <input type="text" name="cNom_client" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-lg">
              <label for="cPrenom_client" style='color:blue'>Prénom Client</label>
              <input type="text" name="cPrenom_client" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-lg">
              <label for="cPrenom_client" style='color:blue'>Numéro de Compte</label>
              <input type="text" name="cPrenom_client" class="form-control" placeholder="First Name" required>
            </div>

            <div class="col-lg">
              <label for="cSolde" style='color:blue'>Solde</label>
              <input type="text" name="cSolde" class="form-control" placeholder="First Name" required>
            </div>


            <div class="col-lg">
              <label for="cClient_id" style='color:blue'>Client_id</label>
              <input type="text" name="cClient_id" class="form-control" placeholder="Last Name" >
            </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" id="add_employee_btn" class="btn btn-primary">Créer le compte</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- add new employee modal end --}}

{{-- edit employee modal start --}}
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" id="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier compte</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" id="emp_id">
        <input type="hidden" name="emp_avatar" id="emp_avatar">
        <div class="modal-body p-4 bg-light">

        <div class="col-lg">
              <label for="cNom_client" style="color:blue">Nom client</label>
              <input type="text" name="cNom_client" id="cNom_client" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-lg">
              <label for="cPrenom_client" style="color:blue">Prénom client</label>
              <input type="text" name="cPrenom_client" id="cPrenom_client" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-lg">
              <label for="cSolde" style="color:blue">Solde</label>
              <input type="text" name="cSolde" id="cSolde" class="form-control" placeholder="First Name" required>
            </div>

            <div class="col-lg">
              <label for="cClient_id" style="color:blue">Client_id</label>
              <input type="text" name="cClient_id" id="cClient_id" class="form-control" placeholder="Last Name" required>
            </div>



          <div class="mt-2" id="avatar">

          </div>
        </div>
        <div class="modal-footer" id="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" id="edit_employee_btn" class="btn btn-success">Modifier le Compte</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="container" >
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow position" id="pos">
          <div class="card-header  d-flex justify-content-between align-items-center" style='background-color:blue'>
            <h3 class="text-light "style='background-color:blue'>Gestion des comptes</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="bi-plus-circle me-2"></i>Créer nouveau compte</button>
          </div>
          <div>

          </div>
          <div class="card-body" id="show_all_employees">
            <h1 class="text-center text-secondary my-5">Chargement...</h1>
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
          url: '{{ route('storeCom') }}',
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

      // update employee ajax request
      $("#edit_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_employee_btn").text('Updating...');
        $.ajax({
          url: '{{ route('updateCom') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Modifié!',
                'Client modifié Avec Succès!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#edit_employee_btn").text('Update Employee');
            $("#edit_employee_form")[0].reset();
            $("#editEmployeeModal").modal('hide');
          }
        });
      });

      // delete employee ajax request
      $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Vous êtes sûre?',
          text: "Vous ne pourrez pas revenir en arrière !",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Oui, Supprimez!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('deleteCom') }}',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Supprimé!',
                  'Ce client a été supprimé',
                  'success'
                )
                fetchAllEmployees();
              }
            });
          }
        })
      });

      // fetch all employees ajax request
      fetchAllEmployees();

      function fetchAllEmployees() {
        $.ajax({
          url: '{{ route('fetchAllCom') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_employees").html(response);
            $("table").DataTable({
              order: [0, 'desc']
            });
          }
        });
      }
    });
  </script>

@endsection
