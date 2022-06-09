<form action="{{route('rechercher')}}"  class='d-flex mr-3'>
    <div class="form-group">
         <input type="text" name='q' class="form-control">
         <input type="text" name='montant' class="form-control">
         <input type="password" name='cle' class="form-control">
    </div>
    <button type="submit" class="btn btn-info"> Rechercher</button>
</form>
