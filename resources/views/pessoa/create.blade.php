<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - Cadastro de pessoas</title>
</head>
<body>
    @include("pessoa.menu")
    <form action="{{route('pessoa.store')}}" method="post">
        @include("pessoa.form")
    </form>
</body>
</html>