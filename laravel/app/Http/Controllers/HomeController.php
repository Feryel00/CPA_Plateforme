<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role=='Directeur')
        {
            return view('dashboardDirecteur');
        }
         else if($role=='Chargé clientele'){
             return view('chargeClienteleDashboard');
         }
         else if($role=='Chargé caisse'){
            return view('chargeCaisseDashboard');
        }
        else if($role=='Charge Crédit'){
            return view('chargeCreditDashboard');
        }
    }



}
