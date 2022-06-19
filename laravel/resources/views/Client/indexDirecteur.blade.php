@extends('dashboardDirecteur')
@section('contentDash')

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="Content-Language" content="fr" /> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>L'ajout d'un client</title>
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
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouveau client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data" class='msform'>
        @csrf
        <div class="modal-body p-4 ">

        <ul id="progressbar">
    <li class="active" >Identification</li>
    <!-- <li>Informations</li> -->
    <li>Titulaire</li>
    <li>Conjoint</li>
    <!-- <li>Services Annexes</li> -->
    <!-- <li>Memo</li> -->
  </ul>
  <fieldset >
    <h2 class="fs-title">Identification</h2><br>
            <div class="col-lg">
              <label for="tname" style='color:blue'>Nom</label>
              <input type="text" name="tname" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-lg">
              <label for="tprenom" style='color:blue'>Prénom</label>
              <input type="text" name="tprenom" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="tnum_id" style='color:blue'>Numéro de téléphone</label>
              <input type="text" name="tnum_id" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="ttype" style='color:blue'>Type</label>
              <input type="text" name="ttype" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="tpass_port" style='color:blue'>Numéro d'ID</label>
              <input type="text" name="tpass_port" class="form-control" placeholder="Last Name" required>
            </div>
            <span class="next button">Suivant</span>
</fieldset>
<fieldset>
<h2 class="fs-title">Titulaire</h2><br>
            <div class="col-lg">
              <label for="tdate_nais" style='color:blue'>Date de naissance</label>
              <input type="date" name="tdate_nais" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="tdep_nais" style='color:blue'>Département de naissance</label>
              <input type="text" name="tdep_nais" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="tsex" style='color:blue'>Sexe</label>
              <input type="text" name="tsex" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="tprofession" style='color:blue'>Profession</label>
              <input type="text" name="tprofession" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="trevenu" style='color:blue'>Revenu</label>
              <input type="text" name="trevenu" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="tsituation" style='color:blue'>Situation familiale</label>
              <input type="text" name="tsituation" class="form-control" placeholder="Last Name" required>
            </div>
            <span class="previous button">Précédent</span>
    <span class="next button">Suivant</span>
</fieldset>
<fieldset>
<h2 class="fs-title">Conjoint</h2><br>
            <div class="col-lg">
              <label for="lname" style='color:blue'>Nom</label>
              <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="lprenom" style='color:blue'>Prénom</label>
              <input type="text" name="lprenom" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="ldate_nais" style='color:blue'>Date de naissance</label>
              <input type="date" name="ldate_nais" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="lsex" style='color:blue'>Sexe</label>
              <input type="text" name="lsex" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="lprofession" style='color:blue'>Profession</label>
              <input type="text" name="lprofession" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="lrevenu" style='color:blue'>Revenu</label>
              <input type="text" name="lrevenu" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-lg">
              <label for="lsituation" style='color:blue'>Situation familiale</label>
              <input type="text" name="lsituation" class="form-control" placeholder="Last Name" required>
            </div>
            <span class="previous button">Précédent</span>

</fieldset>
            <!-- <div class="col-lg">
              <label for="lcompte_id" style='color:blue'>compte_id</label>
              <input type="text" name="lcompte_id" class="form-control" placeholder="Last Name" >
            </div> -->



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" id="add_employee_btn" class="btn btn-primary">Ajouter client</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Modifier client</h5>
        <button type="button " class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data" class='msform'>
        @csrf
        <div class="modal-body p-4 ">

<ul id="progressbar">
<li class="active" >Identification</li>
<!-- <li>Informations</li> -->
<li>Titulaire</li>
<li>Conjoint</li>
<!-- <li>Services Annexes</li> -->
<!-- <li>Memo</li> -->
</ul>
<fieldset >
<h2 class="fs-title">Identification</h2><br>
    <div class="col-lg">
      <label for="tname" style='color:blue'>Nom</label>
      <input type="text" name="tname" id="tname" class="form-control" placeholder="First Name" required>
    </div>
    <div class="col-lg">
      <label for="tprenom" style='color:blue'>Prénom</label>
      <input type="text" name="tprenom" id="tprenom" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="tnum_id" style='color:blue'>Numéro </label>
      <input type="text" name="tnum_id" id="tnum_id" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="ttype" style='color:blue'>Type</label>
      <input type="text" name="ttype" id="ttype" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="tpass_port" style='color:blue'>Numéro d'ID</label>
      <input type="text" name="tpass_port" id="tpass_port" class="form-control" placeholder="Last Name" required>
    </div>
    <span class="next button">Suivant</span>
</fieldset>
<fieldset>
<h2 class="fs-title">Titulaire</h2><br>
    <div class="col-lg">
      <label for="tdate_nais" style='color:blue'>Date de naissance</label>
      <input type="date" name="tdate_nais" id="tdate_nais" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="tdep_nais" style='color:blue'>Département de naissance</label>
      <input type="text" name="tdep_nais" id="tdep_nais" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="tsex" style='color:blue'>Sexe</label>
      <input type="text" name="tsex" id="tsex" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="tprofession" style='color:blue'>Profession</label>
      <input type="text" name="tprofession" id="tprofession" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="trevenu" style='color:blue'>Revenu</label>
      <input type="text" name="trevenu" id="trevenu"  class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="tsituation" style='color:blue'>Situation familiale</label>
      <input type="text" name="tsituation" id="tsituation" class="form-control" placeholder="Last Name" required>
    </div>
    <span class="previous button">Précédent</span>
<span class="next button">Suivant</span>
</fieldset>
<fieldset>
<h2 class="fs-title">Conjoint</h2><br>
    <div class="col-lg">
      <label for="lname" style='color:blue'>Nom</label>
      <input type="date" name="lname" id="lname" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="lprenom" style='color:blue'>Prénom</label>
      <input type="text" name="lprenom" id="lprenom" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="ldate_nais" style='color:blue'>Date de naissance</label>
      <input type="date" name="ldate_nais" id="ldate_nais" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="lsex" style='color:blue'>Sexe</label>
      <input type="text" name="lsex" id="lsex" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="lprofession" style='color:blue'>Profession</label>
      <input type="text" name="lprofession" id="lprofession" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="lrevenu" style='color:blue'>Revenu</label>
      <input type="text" name="lrevenu" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-lg">
      <label for="lsituation" style='color:blue'>Situation familiale</label>
      <input type="text" name="lsituation" class="form-control" placeholder="Last Name" required>
    </div>
    <span class="previous button">Précédent</span>

</fieldset>
    <!-- <div class="col-lg">
      <label for="lcompte_id" style='color:blue'>compte_id</label>
      <input type="text" name="lcompte_id" class="form-control" placeholder="Last Name" >
    </div> -->



</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
  <button type="submit" id="add_employee_btn" class="btn btn-primary">Ajouter client</button>
</div>
      </form>
    </div>
  </div>
</div>


<div class="container" >
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow position" id="pos">
          <div class="card-header  d-flex justify-content-between align-items-center bg-b" >
            <h3 class="text-light ">Gestion des clients</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="bi-plus-circle me-2"></i>Ajouter nouveau client</button>
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
  <script type="text/javascript" src="../../../public/js/dataTable.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(function() {

      // add new employee ajax request
      $("#add_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_employee_btn").text('Adding...');
        $.ajax({
          url: '{{ route('store') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Ajouté!',
                'Client Ajouté Avec Succès!',
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
          url: '{{ route('edit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#tname").val(response.nom);
            $("#tprenom").val(response.prenom);
            $("#tnum_id").val(response.numero_tel);
            $("#ttype").val(response.type);
            $("#tpass_port").val(response.passport_numero);
            $("#tdate_nais").val(response.date_de_naissance_titulaire);
            $("#tdep_nais").val(response.departement_de_naissance);
            // $("#tsex").val(response.);
            $("#tprofession").val(response.profession);
            $("#trevenu").val(response.revenus);
            $("#tsituation").val(response.situation_famille);
            $("#lname").val(response.nom_de_conjoint);
            $("#lprenom").val(response.prenom_de_conjoint);
            $("#ldate_nais").val(response.date_de_naissance_conjoint);
            $("#lsex").val(response.sexe_conjoint);
            $("#lprofession").val(response.profession_conjoint);
            $("#lrevenu").val(response.revenus_conjoint);
            $("#lsituation").val(response.situation_famille_conjoint);

            // $("#lcompte_id").val(response.compte_id);


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
          url: '{{ route('update') }}',
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
              url: '{{ route('delete') }}',
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
          url: '{{ route('fetchAll') }}',
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
<script src='/js/jquery.easing.min.js'></script>

<script src="/js/indexFormulaire.js"></script>
<link rel="stylesheet" href="css/styleFormulaire.css">

@endsection
