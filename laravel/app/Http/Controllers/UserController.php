<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class UserController extends Controller
{
    //
    public function indexEm() {
		return view('index');
	}

	// handle fetch all eamployees ajax request
	public function fetchAllEm() {
		$emps = User::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table  table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>

                <th>Nom</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp->id . '</td>

                <td>' . $emp->name. '</td>
                <td>' . $emp->email . '</td>
                <td>' . $emp->role . '</td>
                <td>
                <a href="#" id="' . $emp->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square  color-green h4"></i></a>
                <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash color-red h4"></i></a>
                <a href="/showEm/'. $emp->id .'"  class=""><i class="bi bi-eye-fill"></i></a>

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
	public function storeEm(Request $request) {

		$empData = ['name' => $request->name,
         'email' => $request->email,
         'password' => $request->password,
         'role' => $request->role];

		User::create($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle edit an employee ajax request
	public function editEm(Request $request) {
		$id = $request->id;
		$emp = User::find($id);
		return response()->json($emp);
	}

	// handle update an employee ajax request
	public function updateEm(Request $request) {
		$fileName = '';
		$emp = User::find($request->emp_id);


		$empData = ['name' => $request->fname,
                   'email' => $request->lname,
                   'role' => $request->role];

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

    public function showEm($id){
        $user=User::find($id);
       return view('user.show',compact('user'));
    }

	}


