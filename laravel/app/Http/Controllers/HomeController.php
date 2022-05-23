<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;
        if($role=='1')
        {
            return view('dashboardDirecteur');
        }
         else if($role=='2'){
             return view('chargeClienteleDashboard');
         }
         else if($role=='3'){
            return view('chargeCaisseDashboard');
        }
        else if($role=='4'){
            return view('chargeCreditDashboard');
        }
    }



}
