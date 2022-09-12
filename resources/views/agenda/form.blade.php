
@section('content')

<div id="agenda-form-container" class="col-md-6 offset-md-3">
    <div class="form-group">
        <label for="id" >ID: </label>
        <input type="text" disabled value="{{ isset($agenda[0]['id']) ? $agenda[0]['id'] : 0 }}" class="form-control">
        <br><br>
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" value="{{ isset($agenda[0]['nome']) ? $agenda[0]['nome'] : '' }}" class="form-control" required>
        <br><br>
        <label for="telefone">Telefone: </label>
        <input type="tel" id="telefone" name="telefone" value="{{ isset($agenda[0]['telefone']) ? $agenda[0]['telefone'] : '' }}" class="form-control" required>
        <br><br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" value="{{ isset($agenda[0]['email']) ? $agenda[0]['email'] : '' }}" class="form-control" required>
        <br><br>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </div>
</div>

@endsection
   
