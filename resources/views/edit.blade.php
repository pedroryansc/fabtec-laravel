<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Medalhistas</title>
</head>
<body>
    @include("menu")
    <form action="{{route('medalhistas.update', $id)}}" method="post">
        @csrf
        @method("PUT")
        <span>ID:</span><br>
        <input readonly value="{{$id}}">
        <br><br>
        <span>Atleta:</span><br>
        <input type="text" name="atleta" id="atleta" value="Rebecca Andrade">
        <br><br>
        <span>Esporte:</span><br>
        <input type="text" name="esporte" id="esporte" value="Ginástica artística">
        <br><br>
        <button type="submit" name="atualizar">Atualizar</button>
    </form>
</body>
</html>