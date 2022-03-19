<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ClientController;

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
Route::get('/vue2', function(){
    return view('Vue_client/vue2Client');
});

Route::get('/vue3', function(){
    return view('Vue_client/vue3Client');
});

Route::get('/vue4', function(){
    return view('Vue_client/vue4Client');
});

Route::get('/vue5', function(){
    return view('Vue_client/vue5Client');
});

// Route::get('/vue6', function(){
//     return view('Vue_client/vue6Client');
// });

// Route::view('ajouterClient','Vue_client/vue1Client');
// Route::post('ajouterClient',[ClientController::class,'ajouterClient']);

// Route::view('ajouterClient','Vue_client/vue6Client');
// Route::post('ajouterClient',[ClientController::class,'ajouterClient']);

Route::view('ajouterClient','Vue');
Route::post('ajouterClient',[ClientController::class,'ajouterClient']);
// Route::get('/Vue', function(){
//     return view('Vue');
// });
