<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>contato - Index</title>
</head>
<body>
    <fieldset>
        <legend>contato</legend>
        <a href="{{ route('contatos.create') }}"><button>Novo Contato</button></a>
        <br><br>
        <form action="">
            <input type="text" name="filtro" placeholder="">
            <button type="submit">Filtrar</button>
        </form>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($contatos as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->telefone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{ route('contatos.show', $item->id) }}"><button>Ver</button></a>
                            <a href="{{ route('contatos.edit', $item->id) }}"><button>Editar</button></a>
                            <form action="{{ route('contatos.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Excluir" onclick="return confirm('Deseja real oficial apagar esse @?')">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
</body>
</html>