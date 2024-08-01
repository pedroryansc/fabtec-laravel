<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - Medalhistas</title>
</head>
<body>
    <ul>
        <li><a href="{{route('medalhistas.index')}}">Lista de medalhistas</a></li>
        <li><a href="{{route('medalhistas.create')}}">Cadastrar medalhista</a></li>
    </ul>
    <form action="{{route('medalhistas.store')}}" method="post">
        <span>Atleta:</span><br>
        <input type="text" name="atleta" id="atleta">
        <br><br>
        <span>Esporte:</span><br>
        <input type="text" name="esporte" id="esporte">
        <br><br>
        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>
</body>
</html>