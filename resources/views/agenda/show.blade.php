<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Agenda - Show</title>
</head>
<body>
    <fieldset>
        @foreach ($agenda as $item)
            <label for="id" >ID: </label>
            <input type="text" disabled value="{{ $item['id'] }}">
            <br><br>
            <label for="nome">Nome: </label>
            <input type="text" disabled value="{{ $item['nome'] }}">
            <br><br>
            <label for="telefone">Telefone: </label>
            <input type="tel" disabled value="{{ $item['telefone'] }}">
            <br><br>
            <label for="email">Email: </label>
            <input type="email" disabled value="{{ $item['email'] }}">
            <br><br>
            <a href="{{ route('agenda.index') }}">Voltar</a>
        @endforeach
    </fieldset>
</body>
</html>