<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ClientController;
use App\http\Controllers\CompteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


 Route::get('/client', function(){
     return view('Vue_client/vue1Client');
 });
 Route::get('/c', function(){
    return view('Vue_client/vueClient');
});

Route::get('/Acceuil', function(){
    return view('pageAcceuil');
});

Route::view('ajouterClient','ajouterClient');
Route::post('ajouterClient',[ClientController::class,'ajouterClient']);




Route::get('/da', function(){
    return view('da');
});


Route::get('/ddirecteur', function(){
    return view('dashboardDirecteur');
});
Route::get('/dCharge', function(){
    return view('chargeClienteleDashboard');
});

Route::get('/dCredit', function(){
    return view('chargeCreditDashboard');
});
Route::get('/dCaisse', function(){
    return view('chargeCaisseDashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('redirects','App\Http\Controllers\HomeController@index');
Route::get('/lister',[ClientController::class,'lister']);

Route::view('/lister/ajouterClient','client/modifierClient');
Route::post('ajouterClient',[ClientController::class,'ajouterClient']);

Route::get('/e', function(){
    return view('es');
});
Route::get('/gestion_clients', function(){
    return view ('index');
});
Route::get('/gestion_comptes', function(){
    return view ('index');
});

Route::post('/store', [ClientController::class, 'store'])->name('store');

Route::get('/fetchall', [ClientController::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [ClientController::class, 'delete'])->name('delete');
Route::get('/edit', [ClientController::class, 'edit'])->name('edit');
Route::post('/update', [ClientController::class, 'update'])->name('update');

Route::resource('compte', \App\Http\Controllers\CompteController::class);

Route::get('/ficheScoring', function(){
    return view('Credit.ficheScoring');
});

Route::get('/typeCarte', function(){
    return view('carteBancaire.type');
});

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');


Route::get('/show/{id}', [ClientController::class, 'show'])->name('client.show');

Route::resource('client', \App\Http\Controllers\ClientController::class);
