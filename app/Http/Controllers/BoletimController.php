<?php

namespace App\Http\Controllers;

use App\Boletim;
use App\Aluno;
use Illuminate\Http\Request;


class BoletimController extends Controller
{
    
    public function adicionar(){

        $alunos=Aluno::all();
        return view('admin.boletim.adicionar',compact('alunos'));
    }

    public function salvar(Request $req)
    {
        $aluno_id = $req->input('aluno_id');

        if (!$aluno_id) {
            return redirect()->back()->with('error', 'Selecione um aluno válido.');
        }
        
        
        $materia = $req->input('materia');
        $nota1 = $req->input('nota1');
        $nota2 = $req->input('nota2');
        $nota3 = $req->input('nota3');
        $resultado = ($nota1 + $nota2 + $nota3) / 3;
    
        Boletim::create([
            
            'materia' => $materia,
            'nota1' => $nota1,
            'nota2' => $nota2,
            'nota3' => $nota3,
            'resultado' => $resultado,
            'aluno_id' => $aluno_id, // Atribuir o valor do campo "aluno_id"
        ]);
    
        return redirect()->route('site.home');
    }
    


    public function listagem(){

        $registros=Boletim::all();
        return view('admin.boletim.listagem',compact('registros'));
    }

    public function excluir(Request $req,$id){
        
      $dados=$req->all();
      Boletim::find($id)->delete($dados);

      return redirect()->route('admin.boletim.listagem');
    }

    public function editar($id){

        $registro=Boletim::find($id);

        return view('admin.boletim.editar',compact('registro'));
    }

    public function atualizar(Request $req,$id){
        $dados=$req->all();
        Boletim::find($id)->update($dados); 

        return redirect()->route('site.home');

    }

  
    
}
