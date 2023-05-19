@include('layout.base')

<h1>Lista de Alunos</h1>

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
                <td><a class="btn btn-danger" href="{{route('admin.aluno.excluir',$aluno->id)}}" >excluir</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
