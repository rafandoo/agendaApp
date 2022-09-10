<fieldset>
    <label for="id" >ID: </label>
    <input type="text" disabled value="{{ isset($agenda[0]['id']) ? $agenda[0]['id'] : 0 }}">
    <br><br>
    <label for="nome">Nome: </label>
    <input type="text" id="nome" name="nome" value="{{ isset($agenda[0]['nome']) ? $agenda[0]['nome'] : '' }}">
    <br><br>
    <label for="telefone">Telefone: </label>
    <input type="tel" id="telefone" name="telefone" value="{{ isset($agenda[0]['telefone']) ? $agenda[0]['telefone'] : '' }}">
    <br><br>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email" value="{{ isset($agenda[0]['email']) ? $agenda[0]['email'] : '' }}">
    <br><br>
    <input type="submit" value="Salvar">
</fieldset>
