@extends('chargeClienteleDashboard')
@section('contentDash')
@php
$categories=App\Models\CategoryCarte::all();
@endphp


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des cartes</title>
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
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle carte</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">

            <div class="col-lg">
              <label for="fnum_carte" style='color:blue'>Numéro de carte</label>
              <input type="text" name="fnum_carte" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-lg">
              <label for="ldate_expiration" style='color:blue'>Date d'expiration</label>
              <input type="text" name="ldate_expiration" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="lcategory_id" style='color:blue'>ID de catégorie</label>
              <input type="text" name="lcategory_id" class="form-control" placeholder="Last Name" required>
            </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" id="add_employee_btn" class="btn btn-primary">Créer la carte</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Renouvler carte</h5>
        <button type="button " class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" id="emp_id">
        <input type="hidden" name="emp_avatar" id="emp_avatar">
        <div class="modal-body p-4 bg-light">
          
            <div class="col-lg">
              <label for="fnum_carte" style="color:blue">Numéro de carte</label>
              <input type="text" name="fnum_carte" id="fnum_carte" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-lg">
              <label for="ldate_expiration" style="color:blue">Date Expiration</label>
              <input type="text" name="ldate_expiration" id="ldate_expiration" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="lcategory_id" style='color:blue'>ID de catégorie</label>
              <select id="lcategory_id" name="lcategory_id" placeholder="" onblur="validate(2)">
            <option value="Agence1" selected="">CIB </option>
            <option value="Agence2" selected="selected">CIB GOLd </option>
            <option value="Agence3" selected="">CIB Corporate</option>
          </select>

              <!-- <input type="text" name="lcategory_id" id="lcategory_id" class="form-control" placeholder="Last Name" required> -->
            </div>
          


          <div class="mt-2" id="avatar">

          </div>
        </div>
        <div class="modal-footer" id="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" id="edit_employee_btn" class="btn btn-success">Renouvler la carte</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- edit employee modal end --}}


<div class="container" >
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow position" id="pos">
          <div class="card-header  d-flex justify-content-between align-items-center" style='background-color:blue'>
            <h3 class="text-light "style='background-color:blue'>Gestion des cartes</h3>

            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="bi-plus-circle me-2"></i>Ajouter une nouvelle carte</button>
          </div>
          <div class="col-lg-12">
            <ul>
        @foreach($categories as $category)
        <li class="nav-item"> <a href="{{route('viewCategory',['id'=>$category->id])}}">{{$category->name}}</a>
            </li>
@endforeach
</ul>



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
          url: '{{ route('storeCarte') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Added!',
                'Employee Added Successfully!',
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
          url: '{{ route('editCarte') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#fnum_carte").val(response.num_carte);
            $("#ldate_expiration").val(response.date_expiration);



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
          url: '{{ route('updateCarte') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Updated!',
                'Employee Updated Successfully!',
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
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('deleteEm') }}',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
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
          url: '{{ route('fetchAllCarte') }}',
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

