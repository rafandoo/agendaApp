<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Index</title>
</head>
<body>
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
            @foreach($agenda as $valor)
                <tr>
                    <td>{{ $valor['id'] }}</td>
                    <td>{{ $valor['nome'] }}</td>
                    <td>{{ $valor['telefone'] }}</td>
                    <td>{{ $valor['email'] }}</td>
                    <td>
                        <a href="{{ route('agenda.edit', $valor['id']) }}">Editar</a>
                        <a href="{{ route('agenda.destroy', $valor['id']) }}">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>