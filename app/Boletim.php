<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boletim extends Model
{
    protected $fillable = [
        'nome', 'materia', 'nota1','nota2','nota3','resultado'
    ];

}
