<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Compte;


class CompteController extends Controller
{
    //
    public function index() {
		return view('index');
	}

	// handle fetch all eamployees ajax request
	public function fetchAllCom() {
		$emps = Compte::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-responsive table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nom client</th>
                <th>Prenom client</th>
                <th>solde</th>
                <th>client_id</th>
                <th>Date de creation</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp->id . '</td>
                <td>' . $emp->nom_client . '</td>
                <td>' . $emp->prenom_client . '</td>

                <td>' . $emp->solde . '</td>
                <td>' . $emp->client_id . '</td>
                <td>' . $emp->created_at . '</td>

                <td>
                <a href="#" id="' . $emp->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square  color-green h4"></i></a>
                <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash color-red h4"></i></a>
                <a href="/showCom/'. $emp->id .'"  class=""><i class="bi bi-eye-fill"></i></a>

                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}

	// handle insert a new employee ajax request
	public function storeCom(Request $request) {

		$empData = [
        'nom_client' => $request->cNom_client,
        'prenom_client' => $request->cPrenom_client,
        'solde' => $request->cSolde,

         'client_id' => $request->cClient_id];
		Compte::create($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle edit an employee ajax request
	public function editCom(Request $request) {
		$id = $request->id;
		$emp = Compte::find($id);
		return response()->json($emp);
	}

	// handle update an employee ajax request
	public function updateCom(Request $request) {
		$fileName = '';
		$emp = Compte::find($request->emp_id);


		$empData = ['solde' => $request->cSolde,
                    'nom_client' => $request->cNom_client,
                    'prenom_client' => $request->cPrenom_client,
                     'client_id' => $request->cClient_id];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle delete an employee ajax request
	public function deleteCom(Request $request) {
		$id = $request->id;
		$emp = Compte::find($id);
		//if (Storage::delete('public/images/' . $emp->avatar)) {
			Compte::destroy($id);
		//}
	}

    public function showCom($id){
        $compte=Compte::find($id);
       return view('compte.show',compact('compte'));
    }
    public function retrait(Request $request){

         //Page::where('id', $id)->update(array('image' => 'asdasd'));
         $compte=Compte::where('id',$request->Rclient_id)->get();
        //$soldes=Compte::where('id',$request->id)->get();
        dd($compte);
	}

    public function rechercher(){
         $q=request()->input('q');
         $erreur=null;
         $password='$2y$10$m44hBRYw9xZPXAhAPXzgDeIa2QtDA0wCr.psDEWrHn3jl.ROq77l6';
         $montant=request()->input('montant');
         $comptes= Compte::where('id','like',"$q")->get();
         print($montant);
         foreach($comptes as $compte)
                $compte->solde=$compte->solde-$montant;


             $empData = ['solde' => $compte->solde];
             $compte->update($empData);

         return view('resultatRecherche',compact('comptes'));
    }
}
