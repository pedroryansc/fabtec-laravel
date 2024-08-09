<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show - Registro de pessoa</title>
</head>
<body>
    @include("pessoa.menu")
    <p><strong>ID:</strong> {{$registro->id}}</p>
    <p><strong>Nome:</strong> {{$registro->nome}}</p>
    <p><strong>Email:</strong> {{$registro->email}}</p>
</body>
</html>