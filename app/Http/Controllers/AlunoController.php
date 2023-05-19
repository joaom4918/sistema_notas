<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    
    public function adicionar(){

        return view('admin.aluno.adicionar');
    }

    public function salvar(Request $req){

     $dados=$req->all();

     Aluno::create($dados);

     return redirect()->route('site.home');
    }

    public function listagem_alunos(){

        $alunos=Aluno::all();

    return view('admin.aluno.listagem_alunos',compact('alunos'));
    }

    public function excluir(Request $req, $id){

        $dados=$req->all();
        Aluno::find($id)->delete($dados);

        return redirect()->route('site.home');
    }
}
