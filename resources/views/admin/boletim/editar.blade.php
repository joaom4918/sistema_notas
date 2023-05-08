@include('layout.base')

<h1>Atualizar registro</h1>

<form action="{{route('admin.boletim.atualizar',$registro->id)}}" method="post">

    {{ csrf_field() }}
 
    @include('admin.boletim.form')
    <input type="hidden" name="_method" value="put"> 

    <button class="btn btn-primary">Atualizar</button> 
</form>