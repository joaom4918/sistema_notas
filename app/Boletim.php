<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Boletim extends Model
{
    protected $fillable = [
        'materia', 'nota1','nota2','nota3','resultado','aluno_id'
    ];

    
 
public function aluno(){

    return $this->belongsTo(Aluno::class);

}

}
