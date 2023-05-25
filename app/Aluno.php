<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    
    protected $fillable = [
        'nome', 'turma', 'data_nas','cpf','endereco','numero','complemento','telefone'
    ];

    //um boletim pode conter varios alunos

    public function boletim(){

        return $this->hasMany('App\Boletim','aluno_id');
    }
  

}
