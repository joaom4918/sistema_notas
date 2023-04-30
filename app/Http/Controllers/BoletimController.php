<?php

namespace App\Http\Controllers;

use App\Boletim;
use Illuminate\Http\Request;

class BoletimController extends Controller
{
    
    public function adicionar(){

        return view('admin.boletim.adicionar');
    }

    public function salvar(Request $req)
    {
        
        $nome = $req->input('nome');
        $materia = $req->input('materia');
        $nota1 = $req->input('nota1');
        $nota2 = $req->input('nota2');
        $nota3 = $req->input('nota3');
        $resultado = ($nota1 + $nota2 + $nota3)/3; 
    
        Boletim::create([
            'nome' => $nome,
            'materia' => $materia,
            'nota1' => $nota1,
            'nota2' => $nota2,
            'nota3' => $nota3,
            'resultado' => $resultado,
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
    
}