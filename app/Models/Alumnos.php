<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    protected $fillable = ['id','nombre','apellidos', "carnet", "grado", "nombre_padre","nombre_madre", "edad", "nota_f", "profe_id"];
    public $timestamps = false;
}
