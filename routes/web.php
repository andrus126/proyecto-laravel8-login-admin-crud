<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaboratoristaController;
use App\Http\Controllers\SocialController; 

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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/facebook', [SocialController::class, 'redirectFacebook']);
Route::get('auth/facebook/callback', [SocialController::class, 'callbackFacebook']);

Route::resource('pacientes','App\Http\Controllers\PacienteController');
Route::resource('laboratoristas','App\Http\Controllers\LaboratoristaController');
Route::get('relacion','App\Http\Controllers\RelacionPacienteLaboratoristaController@index');
