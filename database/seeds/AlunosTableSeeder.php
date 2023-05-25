<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Gerar 50 alunos aleatórios
        for ($i = 0; $i < 50; $i++) {
            DB::table('alunos')->insert([
                'nome' => 'Aluno ' . ($i + 1),
                'turma' => 'Turma ' . ($i + 1),
                'data_nas' => '2023-01-01',
                'cpf' => '123456789',
                'endereco' => 'Endereço ' . ($i + 1),
                'numero' => $i + 1,
                'complemento' => 'Complemento ' . ($i + 1),
                'telefone' => '123456789',
               
            ]);
        }
    }
}
