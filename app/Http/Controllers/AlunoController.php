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
}
