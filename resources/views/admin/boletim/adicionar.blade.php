@include('layout.base')

<h1>Adicionar nota</h1>

<form action="{{ route('admin.boletim.salvar') }}" method="post">
    {{ csrf_field() }} 

    @include('admin.boletim.form')
    
    <button class="btn btn-primary">Salvar nota</button> 

</form>
