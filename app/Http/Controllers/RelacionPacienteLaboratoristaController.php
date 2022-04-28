<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Laboratorista;
use Illuminate\Http\Request;

class RelacionPacienteLaboratoristaController extends Controller
{
   public function index(){
       $paciente = Paciente::find(1);
     
       $laboratorista = Laboratorista::find(1);
       
       
       return view('paciente.mostrar', compact('paciente', 'laboratorista'));
   } 
}
