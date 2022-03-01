<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorista extends Model
{
    use HasFactory;
    Public function pacientes(){
        return $this->belongsToMany(Paciente::class, 'paciente_laboratorista');
    }
}
