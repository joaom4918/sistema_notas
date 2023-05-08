@include('layout.base')

<h1 class="m-3">Resultado Alunos</h1>
<div class="container mt-5">
    <div class="main">

        <table class="table">

            <thead>
                <th>Nome</th>
                <th>Media final </th>
            </thead>

            <tbody>
                @foreach ($registros as $registro)
                    <tr>
                        <td>{{$registro->nome}}</td>
                        <td>{{$registro->resultado}}</td>

                    </tr>
                @endforeach
    </div>
    </tbody>
    </table>

</div>
