<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Index</title>
    <script type="text/javascript">
        function confirmDelete(id) {
            if (confirm("Deseja realmente excluir?")) {
                fetch('agenda/' + id, {
                    method: 'DELETE'
                }).then(location.reload())
            }
        }
    </script>
</head>
<body>
    <fieldset>
        <legend>Agenda</legend>
        <a href="{{ route('agenda.create') }}">Novo Contato</a>
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
                @foreach ($agenda as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['nome'] }}</td>
                        <td>{{ $item['telefone'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>
                            <a href="{{ route('agenda.show', $item['id']) }}">Ver</a>
                            <a href="{{ route('agenda.edit', $item['id']) }}">Editar</a>
                            <a href="javascript:confirmDelete({{ $item['id'] }})">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
</body>
</html>