<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    //protected $table = 'alumnos'; //esto en caso hubiesemos puesto un nombre distinto a la tabla para el modelo obs-> este asume el nombre del modelo mas una s
    protected $primaryKey = 'codigoAlumno';
    public $timestamps = false;
}

