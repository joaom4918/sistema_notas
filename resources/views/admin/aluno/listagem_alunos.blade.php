@include('layout.base')

<h1>Lista de Alunos</h1>

<div class="container">


<table id="alunos-table" class="table table-bodered table-striped">

    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Turma</th>
        <th>Opções</th>

    </thead>

    <tbody>
        @foreach ($alunos as $aluno)
            <tr>
                <td>{{ $aluno->id }}</td>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->turma }}</td>
                <td><a class="btn btn-dark" href="{{route('admin.aluno.excluir',$aluno->id)}}" ><i class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-primary" href="{{route('admin.aluno.editar',$aluno->id)}}" ><i class="fas fa-pen"> editar</i></a>
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
</div>