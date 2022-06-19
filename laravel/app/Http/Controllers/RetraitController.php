<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Compte;
use App\Models\Retrait;


class RetraitController extends Controller
{
    //
    public function index() {
		return view('index');
	}

	// handle fetch all eamployees ajax request
	public function fetchAllRe() {
		$emps = Retrait::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table  table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Montant</th>
                <th>Numéro de compte</th>
                <th>Date de retrait</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp->id . '</td>
                <td>' . $emp->montant . '</td>
                <td>' . $emp->compte_id . '</td
                <td>' . $emp->created_at . '</td>
                <td>' . $emp->created_at . '</td>
                <td>

                <a href="/showRe/'. $emp->id .'"  class=""><i class="bi bi-eye-fill"></i></a>

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
	public function storeRe(Request $request) {

        $q=request()->input('q');

         $montant=request()->input('fmontant');
         $comptes= Compte::where('id','like',"$q")->get();
         print($montant);
         foreach($comptes as $compte)
                $compte->solde=$compte->solde-$montant;


             $empData = ['solde' => $compte->solde];
             $compte->update($empData);
		$empData = [
        'montant' => $request->fmontant,
        'compte_id' => $request->q];
		Retrait::create($empData);

		// return response()->json([
		// 	'status' => 200,
		// ]);
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

    public function showRe($id){
        $retrait=Retrait::find($id);
        $cp=$retrait->compte_id;
        $comptes= Compte::where('id','like',"$cp")->get();
       return view('retrait.show',compact('retrait','comptes'));
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
