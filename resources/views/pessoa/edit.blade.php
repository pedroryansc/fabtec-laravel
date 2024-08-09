<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Edição de pessoa</title>
</head>
<body>
    @include("pessoa.menu")
    <form action="{{route('pessoa.update', $registro->id)}}" method="post">
        @method("PUT")
        @include("pessoa.form")
    </form>
</body>
</html>