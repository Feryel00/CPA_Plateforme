<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;
use PDF;
class CompteController extends Controller
{
    //

    public function create()
    {
    	return view('compte.create');
    }



 public function index()
    {

        $data = Compte::latest()->paginate(5);

        return view('compte.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
}

public function store(Request $request)
    {


		$empData = ['nom_client' => $request->nom_client,
         'prenom_client' => $request->prenom_client,
         'solde' => $request->solde];
		Compte::create($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle edit an employee ajax request


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compte  $compte
     * @return \Illuminate\Http\Response
     */



 public function show(Compte $compte)
    {
        return view('compte.show',compact('compte'));
    }


/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compte  $compte
     * @return \Illuminate\Http\Response
     */
    public function edit(Compte $compte)
    {
        return view('compte.edit',compact('compte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compte  $compte
     * @return \Illuminate\Http\Response
     */

public function update(Request $request, Compte $compte)
    {
        $request->validate([
          'nom_client'=> 'required',
           'prenom_client'=> 'required',
           'solde'=> 'required',

        ]);

        $compte->update($request->all());

        return redirect()->route('compte.index')
                        ->with('success','compte updated successfully');
    }





/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compte  $compte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compte $compte)
    {
        $compte->delete();

        return redirect()->route('compte.index')
                        ->with('success','Compte deleted successfully');
    }
    public function pdf($id){

        // $data=Etudiant::get()->name;
        $data= [
            'title'=>$id->name,

        ];

        // view()->share('etudiant', $data);
        $pdf = PDF::loadView('pdf', $data);

        return $pdf->download('fichier.pdf');
    }



}





