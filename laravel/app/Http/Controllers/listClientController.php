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
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>

                <th>Nom</th>
                <th>Prenom</th>
                <th>Compte_id</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp->id . '</td>

                <td>' . $emp->nom . '</td>
                <td>' . $emp->prenom . '</td>
                <td>' . $emp->compte_id . '</td>

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


