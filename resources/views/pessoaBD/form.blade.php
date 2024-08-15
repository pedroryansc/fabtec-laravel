@csrf
Nome: <input required type="text" size="30" name="nome" value="@if(isset($pessoa->nome)){{ $pessoa->nome }}@endif"><br>
<br>
E-mail: <input required type="text" size="30" name="email" value="@if(isset($pessoa->email)){{ $pessoa->email }}@endif"><br>
<br>
<button type="submit" name="acao" value="salvar">@if(isset($pessoa->id)) Atualizar @else Salvar @endif</button>