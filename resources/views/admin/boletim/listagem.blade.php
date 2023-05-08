@include('layout.base')


<h1>Listagem</h1>



<table class="table table-striped">

<thead>
    <th>Id</th>
    <th>Nome</th>
    <th>Materia</th>
    <th>Nota1</th>
    <th>Nota2</th>
    <th>Nota3</th>
    <th>resultado</th>
    <th>Opções</th>
</thead>

<tbody>
    @foreach ($registros as $registro)
        
    <tr>
        <td>{{$registro->id}}</td>
        <td>{{$registro->nome}}</td>
        <td>{{$registro->materia}}</td>
        <td>{{$registro->nota1}}</td>
        <td>{{$registro->nota2}}</td>
        <td>{{$registro->nota3}}</td>
        <td>{{$registro->resultado}}</td>
       
        <td><a href="{{route('admin.boletim.excluir',$registro->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
            <a href="{{route('admin.boletim.editar',$registro->id)}}" class="btn btn-primary"><i class="fas fa-edit">editar</i></a>
        </td>
        

        
    </tr>
    @endforeach
</tbody>

</table>