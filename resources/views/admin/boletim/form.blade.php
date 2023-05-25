<input type="text" name="aluno_id" class="form-control" value="{{ isset($registro->aluno_id) ? $registro->aluno_id : '' }}" placeholder="Digite o ID do aluno" list="alunos-list"><br>
<datalist id="alunos-list">
    @foreach($alunos as $aluno)
        <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
    @endforeach
</datalist>


<select name="materia"  value="{{isset($registro->materia)?$registro->materia:''}}">
<option class="portugues">portugues</option>
<option class="matematica">matematica</option>
<option class="fisica">fisica</option>
<option class="historia">historia</option>
<option class="ingles">ingles</option>
<option class="espanhol">espanhol</option> 

</select>
<input type="number" name="nota1" class="form-control" value="{{isset($registro->nota1)?$registro->nota1:''}}" min="0" max="100" placeholder="Digite nota do 1° Trimestre"> <br>
<input type="number" name="nota2" class="form-control" value="{{isset($registro->nota2)?$registro->nota2:''}}" min="0" max="100"  placeholder="Digite nota do 2° Trimestre"> <br>
<input type="number" name="nota3" class="form-control"  value="{{isset($registro->nota3)?$registro->nota3:''}}"min="0" max="100"  placeholder="Digite nota do 3° Trimestre"> <br>
