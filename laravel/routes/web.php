<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ClientController;
use App\http\Controllers\listClientController;
use App\http\Controllers\CompteController;
use App\http\Controllers\UserController;
use App\http\Controllers\CarteController;
use App\http\Controllers\ScoreController;
use App\http\Controllers\fileController;
use App\http\Controllers\RetraitController;
use App\http\Controllers\VersementController;
use App\http\Controllers\VirementController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ct/{id}', function(){
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






Route::get('/ddirecteur', function(){return view('dashboardDirecteur');});
Route::get('/dCharge', function(){return view('chargeClienteleDashboard');});
Route::get('/dCredit', function(){return view('chargeCreditDashboard');});
Route::get('/dCaisse', function(){return view('chargeCaisseDashboard');});

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
//---------------------------------Les gestions--------------------------------------------
Route::get('/gestion_clients', function(){return view ('Client.index');});

Route::get('/gestion_clients_directeur', function(){return view ('Client.indexDirecteur');});

Route::get('/gestion_comptes', function(){return view ('Compte.index');});

Route::get('/gestion_comptes_directeur', function(){return view ('Compte.indexDirecteur');});

Route::get('/gestion_employe', function(){return view ('user.index');});

Route::get('/gestion_virement', function(){return view ('virement.index');});

Route::get('/gestion_versement', function(){return view ('versement.index');});

Route::get('/gestion_retrait',function(){return view('Retrait.index');});

Route::get('/carte', function(){return view('carteBancaire.index');});
//----------------------------Les cartes------------------------------------------
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
Route::get('/show/{id}', [ClientController::class, 'show'])->name('client.show');

//-------------------------------Les comptes----------------------------------------

Route::post('/storeCom', [CompteController::class, 'storeCom'])->name('storeCom');
Route::get('/fetchallCom', [CompteController::class, 'fetchAllCom'])->name('fetchAllCom');
Route::delete('/deleteCom', [CompteController::class, 'deleteCom'])->name('deleteCom');
Route::get('/editCom', [CompteController::class, 'editCom'])->name('editCom');
Route::post('/updateCom', [CompteController::class, 'updateCom'])->name('updateCom');
Route::get('/showCom/{id}', [CompteController::class, 'showCom'])->name('compte.show');

//Route::resource('compte', \App\Http\Controllers\CompteController::class);

Route::get('/typeCarte', function(){
    return view('carteBancaire.type');
});

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');



Route::resource('client', \App\Http\Controllers\ClientController::class);


/////////////////////////////Credit////////////////////////////////
//Route::get('/ficheScoring', function(){
  //  return view('scoreCredit.index');
//});

Route::get('/listClient', function(){return view('scoreCredit.listClient');});
Route::get('/CaisselistClient', function(){return view('listClient');});

Route::post('/storeList', [listClientController::class, 'storeList'])->name('storeList');

Route::get('/fetchallList', [listClientController::class, 'fetchAllList'])->name('fetchAllList');

//////////////////////////Caisse////////////////////////////////////

Route::get('c/{id}',[CarteController::class,'viewCategory'])->name('viewCategory');
//-----------------------------  Les fichiers   //////////////////////////////////////////
Route::get('/file/download/{id}', [fileController::class, 'show'])->name('downloadfile');
Route::get('/file',[fileController::class,'index'])->name('viewfile');
Route::get('/file/upload',[fileController::class,'create'])->name('formfile');
Route::post('/file/upload',[fileController::class,'store'])->name('uploadfile');

//------------------------------Les retraits-----------------------------------------------
Route::post('/storeRe', [RetraitController::class, 'storeRe'])->name('storeRe');
Route::get('/fetchallRe', [RetraitController::class, 'fetchAllRe'])->name('fetchAllRe');
Route::get('/showRe/{id}', [RetraitController::class, 'showRe'])->name('retrait.show');
//-------------------------------Les versements ----------------------------------------------
Route::post('/storeVer', [VersementController::class, 'storeVer'])->name('storeVer');
Route::get('/fetchallVer', [VersementController::class, 'fetchAllVer'])->name('fetchAllVer');
Route::get('/showVer/{id}', [VersementController::class, 'showVer'])->name('Versement.show');
//--------------------------------Les virements ----------------------------------------------
Route::post('/storeVir', [VirementController::class, 'storeVir'])->name('storeVir');
Route::get('/fetchallVir', [VirementController::class, 'fetchAllVir'])->name('fetchAllVir');
Route::get('/showVir/{id}', [VirementController::class, 'showVir'])->name('Virement.show');

//-------------------------------------------------Credit ------------------------------------
Route::post('/storeVir', [VirementController::class, 'storeVir'])->name('storeVir');
Route::get('/fetchallVir', [VirementController::class, 'fetchAllVir'])->name('fetchAllVir');
Route::get('/showVir/{id}', [VirementController::class, 'showVir'])->name('Virement.show');
Route::get('/calculer', [ScoreController::class, 'calculer'])->name('scoreCredit.show');


Route::get('/retrait',[CompteController::class,'retrait'])->name('retrait');
Route::get('/rechercher',[RetraitController::class,'rechercher'])->name('rechercher');
// Route::get('/chercher',function(){
//     return view('resultatRecherche');
// });

Route::get('/r',function(){
    return view('search');
});
