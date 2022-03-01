<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaboratoristaController;

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


Route::resource('pacientes','App\Http\Controllers\PacienteController');
Route::resource('laboratoristas','App\Http\Controllers\LaboratoristaController');
Route::get('relacion','App\Http\Controllers\RelacionPacienteLaboratoristaController@index');
