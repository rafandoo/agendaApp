
@section('content')

<div id="contato-form-container" class="col-md-6 offset-md-3">
    <div class="form-group">
        <label for="id" >ID: </label>
        <input type="text" id="id" nome="id" disabled value="{{ isset($contato->id) ? $contato->id : 0 }}" class="form-control">
        <br><br>
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" value="{{ isset($contato['nome']) ? $contato['nome'] : '' }}" class="form-control" required>
        <br><br>
        <label for="telefone">Telefone: </label>
        <input type="tel" id="telefone" name="telefone" value="{{ isset($contato['telefone']) ? $contato['telefone'] : '' }}" class="form-control" required>
        <br><br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" value="{{ isset($contato['email']) ? $contato['email'] : '' }}" class="form-control" required>
        <br><br>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </div>
</div>

@endsection
   
