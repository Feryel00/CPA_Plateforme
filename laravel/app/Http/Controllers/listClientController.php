<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;


class listClientController extends Controller
{
    //
    public function index() {
		return view('index');
	}

	// handle fetch all eamployees ajax request
	public function fetchAllList() {
		$emps = Client::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-responsive table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>

                <th>Nom</th>
                <th>Prenom</th>
                <th>Numero Tel</th>
                <th>type</th>
                <th>Numero d\'ID</th>
                <th>Date naissance</th>
                <th>Département naissance</th>
                <th>Sex</th>
                <th>Profession</th>
                <th>Revenus</th>
                <th>Situation familiale</th>
                <th>Nom Conjoint</th>
                <th>Prenom_conjoint</th>
                <th>Date de naissance </th>
                <th>Sex Conjoint</th>
                <th>Profession Conjoint</th>
                <th>Revenu conjoint</th>
                <th>Situation familaile </th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp->id . '</td>

                <td>' . $emp->nom . '</td>
                <td>' . $emp->prenom . '</td>
                <td>' . $emp->numero_tel . '</td>
                <td>' . $emp->type . '</td>
                <td>' . $emp->passport_numero . '</td>
                <td>' . $emp->date_de_naissance_titulaire . '</td>
                <td>' . $emp->departement_de_naissance . '</td>
                <td>' . $emp->sex . '</td>
                <td>' . $emp->profession . '</td>
                <td>' . $emp->revenus . '</td>
                <td>' . $emp->situation_famille . '</td>
                <td>' . $emp->nom_de_conjoint . '</td>
                <td>' . $emp->prenom_de_conjoint . '</td>
                <td>' . $emp->date_de_naissance_conjoint . '</td>
                <td>' . $emp->sexe_conjoint . '</td>
                <td>' . $emp->profession_conjoint. '</td>
                <td>' . $emp->revenus_conjoint. '</td>
                <td>' . $emp->situation_famille_conjoint . '</td>


                <td>
                <a href="/show/'. $emp->id .'"  class=""><i class="bi bi-eye-fill"></i></a>

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
	public function storeList(Request $request) {

		$empData = ['nom' => $request->fname,
         'prenom' => $request->lname,
         'compte_id' => $request->lcompte_id];
		Client::create($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle edit an employee ajax request
	public function edit(Request $request) {
		$id = $request->id;
		$emp = Client::find($id);
		return response()->json($emp);
	}

	// handle update an employee ajax request
	public function update(Request $request) {
		$fileName = '';
		$emp = Client::find($request->emp_id);


		$empData = ['nom' => $request->fname, 'prenom' => $request->lname, 'compte_id' => $request->lcompte_id];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle delete an employee ajax request
	public function delete(Request $request) {
		$id = $request->id;
		$emp = Client::find($id);
		//if (Storage::delete('public/images/' . $emp->avatar)) {
			Client::destroy($id);
		//}
	}

    public function show($id){
        $client=Client::find($id);
       return view('client.show',compact('client'));
    }

	}


