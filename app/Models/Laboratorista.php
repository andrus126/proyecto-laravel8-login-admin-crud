<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorista extends Model
{
    use HasFactory;
    Public function paciente(){
        return $this->belongsToMany(Paciente::class, 'laboratorista:paciente');
    }
}
