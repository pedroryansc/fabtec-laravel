<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show - Registro de pessoa</title>
</head>
<body>
    @include("pessoaBD.menu")
    <p><strong>ID:</strong> {{$pessoa->id}}</p>
    <p><strong>Nome:</strong> {{$pessoa->nome}}</p>
    <p><strong>Email:</strong> {{$pessoa->email}}</p>
    <p><strong>Data de criação:</strong> {{$pessoa->created_at}}</p>
    <p><strong>Data da última atualização:</strong> {{$pessoa->updated_at}}</p>
</body>
</html>