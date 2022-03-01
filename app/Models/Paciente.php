<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = "pacientes";
    public $timestamps = false;
    Public function laboratoristas(){
        return $this->belongsToMany(laboratorista::class, 'paciente_laboratorista');
    }
}
