<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Medalhistas</title>
</head>
<body>
    @include("menu")
    <table border="1">
        <caption>
            <strong>Olimpíadas de Paris 2024</strong>
        </caption>
        <tr>
            <th>ID</th>
            <th>Atleta</th>
            <th>Esporte</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Rebecca Andrade</td>
            <td>Ginástica artística</td>
            <td><a href="{{route('medalhistas.show', 1)}}">Visualizar</a></td>
            <td><a href="{{route('medalhistas.edit', 1)}}">Editar</a></td>
            <td>
                <form name="form_delete" action="{{route('medalhistas.destroy', 1)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="this.parentNode.submit();">Excluir</a>
                </form>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Rayssa Leal</td>
            <td>Skate Street</td>
            <td><a href="{{route('medalhistas.show', 2)}}">Visualizar</a></td>
            <td><a href="{{route('medalhistas.edit', 2)}}">Editar</a></td>
            <td>
                <form name="form_delete" action="{{route('medalhistas.destroy', 2)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="this.parentNode.submit();">Excluir</a>
                </form>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Larissa Pimenta</td>
            <td>Judô</td>
            <td><a href="{{route('medalhistas.show', 3)}}">Visualizar</a></td>
            <td><a href="{{route('medalhistas.edit', 3)}}">Editar</a></td>
            <td>
                <form name="form_delete" action="{{route('medalhistas.destroy', 3)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="this.parentNode.submit();">Excluir</a>
                </form>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Willian Lima</td>
            <td>Judô</td>
            <td><a href="{{route('medalhistas.show', 4)}}">Visualizar</a></td>
            <td><a href="{{route('medalhistas.edit', 4)}}">Editar</a></td>
            <td>
                <form name="form_delete" action="{{route('medalhistas.destroy', 4)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="this.parentNode.submit();">Excluir</a>
                </form>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Flávia Saraiva</td>
            <td>Ginástica artística</td>
            <td><a href="{{route('medalhistas.show', 5)}}">Visualizar</a></td>
            <td><a href="{{route('medalhistas.edit', 5)}}">Editar</a></td>
            <td>
                <form name="form_delete" action="{{route('medalhistas.destroy', 5)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="this.parentNode.submit();">Excluir</a>
                </form>
            </td>
        </tr>
        <tr>
            <td>6</td>
            <td>Jade Barbosa</td>
            <td>Ginástica artística</td>
            <td><a href="{{route('medalhistas.show', 6)}}">Visualizar</a></td>
            <td><a href="{{route('medalhistas.edit', 6)}}">Editar</a></td>
            <td>
                <form name="form_delete" action="{{route('medalhistas.destroy', 6)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="this.parentNode.submit();">Excluir</a>
                </form>
            </td>
        </tr>
        <tr>
            <td>7</td>
            <td>Júlia Soares</td>
            <td>Ginástica artística</td>
            <td><a href="{{route('medalhistas.show', 7)}}">Visualizar</a></td>
            <td><a href="{{route('medalhistas.edit', 7)}}">Editar</a></td>
            <td>
                <form name="form_delete" action="{{route('medalhistas.destroy', 7)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="this.parentNode.submit();">Excluir</a>
                </form>
            </td>
        </tr>
        <tr>
            <td>8</td>
            <td>Lorrane Oliveira</td>
            <td>Ginástica artística</td>
            <td><a href="{{route('medalhistas.show', 8)}}">Visualizar</a></td>
            <td><a href="{{route('medalhistas.edit', 8)}}">Editar</a></td>
            <td>
                <form name="form_delete" action="{{route('medalhistas.destroy', 8)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="this.parentNode.submit();">Excluir</a>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>