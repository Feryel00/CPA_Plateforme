<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carte;
use App\Models\CategoryCarte;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class CarteController extends Controller
{
    //
    public function viewCategory(Request $request){
        // $carte=Carte::find($id);
         $categories= CategoryCarte::where('is_online',1)->get();
        //dd($categories);

         $cartes=Carte::where('category_id',$request->id)->get();
        // $num=$cartes->num_carte;
     //   $clients= Client::where('passport_numero','like',"$num")->get();
        //dd($cartes);
        return view('categorie',compact('categories','cartes'));
    }
    public function indexEm() {
		return view('index');
	}

	// handle fetch all eamployees ajax request
	public function fetchAllCarte() {
		$emps = Carte::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-responsive table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>

                <th>Numero de carte</th>
                <th>Date Expiration </th>
                <th>Category_id </th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp->id . '</td>

                <td>' . $emp->num_carte. '</td>
                <td>' . $emp->date_expiration . '</td>
                <td>' . $emp->category_id . '</td>
                <td>
                <a href="#" id="' . $emp->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square  color-green h4"></i></a>
                <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash color-red h4"></i></a>
                <a href="/showCarte/'. $emp->id .'"  class=""><i class="bi bi-eye-fill"></i></a>

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
	public function storeCarte(Request $request) {

		$empData = ['num_carte' => $request->fnum_carte,
         'date_expiration' => $request->ldate_expiration,
         'category_id' => $request->lcategory_id];



	    Carte::create($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle edit an employee ajax request
	public function editCarte(Request $request) {
		$id = $request->id;
		$emp = Carte::find($id);
		return response()->json($emp);
	}

	// handle update an employee ajax request
	public function updateCarte(Request $request) {
		$fileName = '';
		$emp = Carte::find($request->emp_id);


		$empData = ['num_carte' => $request->fnum_carte,
                    'date_expiration' => $request->ldate_expiration,
                    'category_id' => $request->lcategory_id];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle delete an employee ajax request
	public function deleteEm(Request $request) {
		$id = $request->id;
		$emp = User::find($id);
		//if (Storage::delete('public/images/' . $emp->avatar)) {
			User::destroy($id);
		//}
	}

    public function showCarte($id){
        $carte=Carte::find($id);

        $num=$carte->num_carte;
        $clients= Client::where('passport_numero','like',"$num")->get();
       // $client= Client::where('nom','like',"nom")->get();
        //$clients=DB::table('clients')->where('passport_numero', "$num")->get();

       // dd($client);
       return view('carteBancaire.show',compact('carte','clients'));
    }

	}


