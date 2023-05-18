@include('layout.base')

<h1>Matricular aluno</h1>

<div class="container">
    <form action="{{route('admin.aluno.salvar')}}" method="post">

        {{ csrf_field() }}
    
    
        @include('admin.aluno.form')
        <button class="btn btn-primary">salvar</button>
    
    </form>
</div>