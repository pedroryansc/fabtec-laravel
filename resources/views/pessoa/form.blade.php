@csrf
Nome: <input required type="text" size="30" name="nome" value="@if(isset($registro->nome)){{ $registro->nome }}@endif"><br>
<br>
E-mail: <input required type="text" size="30" name="email" value="@if(isset($registro->email)){{ $registro->email }}@endif"><br>
<br>
<button type="submit" name="acao" value="salvar">Salvar</button>