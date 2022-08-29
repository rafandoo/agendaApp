<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Agenda - Create</title>
</head>
<body>
    <fieldset>
        <form action="{{ route('agenda.store') }}" method="POST">
            @method('POST')
            <label for="id" hidden>ID: </label>
            <input type="text" hidden value="0">
            <br><br>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome">
            <br><br>
            <label for="telefone">Telefone: </label>
            <input type="tel" id="telefone" name="telefone">
            <br><br>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email">
            <br><br>
            <input type="submit" value="Cadastrar">
    </fieldset>
</body>
</html>