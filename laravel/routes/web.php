<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ClientController;
use App\http\Controllers\CompteController;
use App\http\Controllers\UserController;
use App\http\Controllers\CarteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('c/{id}',[CarteController::class,'viewCategory'])->name('viewCategory');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/ct', function(){
    return view('categorie');
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

Route::get('/A', function(){
    return view('acceuil');
});

Route::view('ajouterClient','ajouterClient');
Route::post('ajouterClient',[ClientController::class,'ajouterClient']);






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

Route::get('/gestion_employe', function(){
    return view ('user.index');
});
Route::get('/carte', function(){
    return view('carteBancaire.index');
});
//////////////----------------------------Les cartes
Route::post('/storeCarte', [CarteController::class, 'storeCarte'])->name('storeCarte');
Route::get('/fetchallCarte', [CarteController::class, 'fetchAllCarte'])->name('fetchAllCarte');
Route::get('/editCarte', [CarteController::class, 'editCarte'])->name('editCarte');
Route::post('/updateCarte', [CarteController::class, 'updateCarte'])->name('updateCarte');
//----------------------------------Les employes--------------------------------
Route::post('/storeEm', [UserController::class, 'storeEm'])->name('storeEm');
Route::get('/fetchallEm', [UserController::class, 'fetchAllEm'])->name('fetchAllEm');
Route::delete('/deleteEm', [UserController::class, 'deleteEm'])->name('deleteEm');
Route::get('/editEm', [UserController::class, 'editEm'])->name('editEm');
Route::post('/updateEm', [UserController::class, 'updateEm'])->name('updateEm');
Route::get('/showEm/{id}', [UserController::class, 'showEm'])->name('userEm.show');

// ---------------------------------Les clients----------------------------------

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


