<input type="text" class="form-control" name="nome" value="{{isset($registros->nome)?$registros->nome:''}}" placeholder="Digite o nome do aluno"> <br>
<label for="turma">Turma</label><br>
<select name="turma" value="{{isset($registros->turma)?$registros->turma:''}}" >
    <option value="1°ano">1°ano</option>
    <option value="2°ano">2°ano</option>
    <option value="3°ano">3°ano</option>
    <option value="4°ano">4°ano</option>
    <option value="5°ano">5°ano</option>
    <option value="6°ano">6°ano</option>
    <option value="7°ano">7°ano</option>
    <option value="8°ano">8°ano</option>
    <option value="9°ano">9°ano</option>
    <option value="1°ano ensino medio">1° ensino medio</option>
    <option value="2°ano ensino medio">2° ensino medio</option>
    <option value="3°ano ensino medio">3° ensino medio</option>
</select>
<br><br>
<label for="data_nas">Data de Nasimento</label>
<input type="date" class="form-control" name="data_nas" value="{{isset($registros->data_nas)?$registros->data_nas:''}}" ><br>
<input type="text" class="form-control" placeholder="Informe o numero do cpf" name="cpf" value="{{isset($registros->cpf)?$registros->cpf:''}}"><br>
<input type="text" class="form-control" placeholder="Informe seu endereço" name="endereco" value="{{isset($registros->endereco)?$registros->endereco:''}}"><br>
<input type="number" class="form-control" placeholder="Informe numero" name="numero" value="{{isset($registros->numero)?$registros->numero:''}}"><br>
<input type="text" class="form-control" placeholder="complemento opcional" name="complemento" value="{{isset($registros->complemento)?$registros->complemento:''}}"><br>
<input type="text" class="form-control" placeholder="telefone" name="telefone" value="{{isset($registros->telefone)?$registros->telefone:''}}"><br>

