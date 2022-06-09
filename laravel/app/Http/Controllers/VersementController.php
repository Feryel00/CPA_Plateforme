<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Compte;
use App\Models\Versement;


class VersementController extends Controller
{
    //
    public function index() {
		return view('index');
	}

	// handle fetch all eamployees ajax request
	public function fetchAllVer() {
		$emps =Versement::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Montant</th>
                <th>Compte ID</th>
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

                <a href="/showVer/'. $emp->id .'"  class=""><i class="bi bi-eye-fill"></i></a>

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
	public function storeVer(Request $request) {

        $q=request()->input('q');

         $montant=request()->input('fmontant');
         $comptes= Compte::where('id','like',"$q")->get();
         print($montant);
         foreach($comptes as $compte)
                $compte->solde=$compte->solde+$montant;


             $empData = ['solde' => $compte->solde];
             $compte->update($empData);
		$empData = [
        'montant' => $request->fmontant,
        'compte_id' => $request->q];
		Versement::create($empData);

		// return response()->json([
		// 	'status' => 200,
		// ]);
	}



    public function showVer($id){
        $versement=Versement::find($id);
        $cp=$versement->compte_id;
        $comptes= Compte::where('id','like',"$cp")->get();
       return view('versement.show',compact('versement','comptes'));
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
