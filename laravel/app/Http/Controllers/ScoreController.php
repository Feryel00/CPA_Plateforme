<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Compte;
use App\Models\Score;


class ScoreController extends Controller
{
    //
    public function index() {
		return view('index');
	}

	// handle fetch all eamployees ajax request
	public function fetchAllScore() {
		$emps =Score::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-responsive table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Sex</th>
                <th>Prix</th>
                <th>Revenu Postulant</th>
                <th>Age</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp->id . '</td>
                <td>' . $emp->nom . '</td>
                <td>' . $emp->prenom . '</td>
                <td>' . $emp->adresse . '</td>
                <td>' . $emp->sex . '</td>
                <td>' . $emp->prix . '</td>
                <td>' . $emp->revenu_postulant . '</td>
                <td>' . $emp->age. '</td>
                <td>

                <a href="/showScore/'. $emp->id .'"  class=""><i class="bi bi-eye-fill"></i></a>

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
	public function storeScore(Request $request) {

           $empData = [
           'nom' => $request->fname,
           'prenom' => $request->lname,
           'adresse' => $request->lads,
           'sex' => $request->lsex,
           'prix' => $request->lprix,
           'revenu_postulant' => $request->lrevenu,
            'age' => $request->lage ];
           Score::create($empData);
	 return response()->json([
			'status' => 200,
	 ]);
	}

    public function showScore($id){
        $score=Score::find($id);
        $dure= 75 -$score->age ;
        if($dure> 30)
            $dure=30;

        $montant_apport= 2* $score->prix ;
    return view('Credit.show',compact('score','dure','montant_apport'));
    }
}
