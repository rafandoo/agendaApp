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
        <label for="id" hidden>ID: </label>
        <input type="text" hidden disabled value="{{ $agenda[0]['id'] }}">
        <br><br>
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" disabled value="{{ $agenda[0]['nome'] }}">
        <br><br>
        <label for="telefone">Telefone: </label>
        <input type="tel" id="telefone" name="telefone" disabled value="{{ $agenda[0]['telefone'] }}">
        <br><br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" disabled value="{{ $agenda[0]['email'] }}">
    </fieldset>
</body>
</html>