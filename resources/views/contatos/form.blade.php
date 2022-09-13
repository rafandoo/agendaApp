<fieldset>
    <label for="id" >ID: </label>
    <input type="text" id="id" name="id" disabled value="{{ isset($contatos->id) ? $contatos->id : 0 }}">
    <br><br>
    <label for="nome">Nome: </label>
    <input type="text" id="nome" name="nome" value="{{ isset($contatos->nome) ? $contatos->nome : '' }}">
    <br><br>
    <label for="telefone">Telefone: </label>
    <input type="tel" id="telefone" name="telefone" value="{{ isset($contatos->telefone) ? $contatos->telefone : '' }}">
    <br><br>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email" value="{{ isset($contatos->email) ? $contatos->email : '' }}">
    <br><br>
    <input type="submit" value="Salvar">
</fieldset>
