<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Lista de pessoas</title>
</head>
<body>
    @include("pessoa.menu")
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pessoas as $pessoa)
                <tr>
                    <td>{{$pessoa->id}}</td>
                    <td>{{$pessoa->nome}}</td>
                    <td>{{$pessoa->email}}</td>
                    <td><a href="{{route('pessoaJSON.show', $pessoa->id)}}">Detalhes</a></td>
                    <td><a href="{{route('pessoaJSON.edit', $pessoa->id)}}">Editar</a></td>
                    <td>
                        <form name="form_delete_{{$pessoa->id}}" action="{{route('pessoaJSON.destroy', $pessoa->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <a href="#" onclick="confirmDelete('form_delete_{{$pessoa->id}}');">Excluir</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
<script>
    function confirmDelete(formName){
        if(confirm("Tem certeza que deseja excluir este item?"))
            document.forms[formName].submit();
    }
</script>