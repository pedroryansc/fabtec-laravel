<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Edição de pessoa</title>
</head>
<body>
    @include("pessoaBD.menu")
    <form action="{{route('pessoaBD.update', $pessoa->id)}}" method="post">
        @method("PUT")
        @include("pessoaBD.form")
    </form>
</body>
</html>