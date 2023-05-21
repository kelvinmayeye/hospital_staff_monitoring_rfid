<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users\UsersController;
use App\Http\Controllers\patientscard\PatientCardController;
use App\Http\Controllers\cards\CardsController;

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
    return view('auth.login');
});



Route::get('dashboard',[UsersController::class,'getDashboard']);
Route::post('register',[UsersController::class,'store']);
Route::post('login',[UsersController::class,'login']);

//patients
Route::get('add_patient',[PatientCardController::class,'getAddPatients']);
Route::post('add_patient',[PatientCardController::class,'store']);

//card
Route::get('all-cards',[CardsController::class,'allCards']);