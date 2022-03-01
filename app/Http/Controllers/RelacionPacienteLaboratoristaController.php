<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Laboratorista;
use Illuminate\Http\Request;

class RelacionPacienteLaboratoristaController extends Controller
{
   public function index(){
       $paciente = Paciente::find(14);
       $laboratorista = Laboratorista::find(2);
       return view('paciente.mostrar', compact('paciente', 'laboratorista'));
   } 
}
