<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    
    protected $fillable = [
        'nome', 'turma', 'data_nas','cpf','endereco','numero','complemento','telefone'
    ];

}
