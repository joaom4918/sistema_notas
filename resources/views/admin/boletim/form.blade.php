<input type="text" name="nome" class="form-control" value="{{ isset($registro->nome) ? $registro->nome : '' }}" placeholder="Digite nome do aluno" list="alunos-list"> <br>
<datalist id="alunos-list">
    @foreach($alunos as $aluno)
        <option value="{{ $aluno->nome }}">{{ $aluno->nome }}</option>
    @endforeach
</datalist>
<input type="text" name="materia" class="form-control" value="{{isset($registro->materia)?$registro->materia:''}}"  placeholder="Digite o nome da  materia"> <br>
<input type="number" name="nota1" class="form-control" value="{{isset($registro->nota1)?$registro->nota1:''}}" min="0" max="100" placeholder="Digite nota do 1° Trimestre"> <br>
<input type="number" name="nota2" class="form-control" value="{{isset($registro->nota2)?$registro->nota2:''}}" min="0" max="100"  placeholder="Digite nota do 2° Trimestre"> <br>
<input type="number" name="nota3" class="form-control"  value="{{isset($registro->nota3)?$registro->nota3:''}}"min="0" max="100"  placeholder="Digite nota do 3° Trimestre"> <br>
