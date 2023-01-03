<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catprofe extends Model
{
    use HasFactory;
    protected $fillable = ['id','nombre','apellidos'];
    public $timestamps = false;
}
