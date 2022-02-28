<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Laboratorista;
use Illuminate\Http\Request;

class RelacionPacienteLaboratoristaController extends Controller
{
   public function index(){
       $pacientes = Paciente::find(7);
       $laboratoristas = Laboratorista::find(1);
       return view('paciente.mostrar', compact('paciente', 'laboratorista'));
   } 
}
