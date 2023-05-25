@include('layout.base')

<h1>Atualizar Registros</h1>

<div class="container">

<form action="{{route('admin.aluno.atualizar',$registros->id)}}" method="post">

    {{ csrf_field() }}
    @include('admin.aluno.form')
    <input type="hidden" name="_method" value="put">

    <button class="btn btn-primary" >atualizar</button>


</form>

</div>

