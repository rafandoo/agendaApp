@extends('contato.nav')
@section('title', 'Contato Index')
@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque um contato</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div class="col-md-10 offset-md-1 dashboard-agendas-container">
    <p>Confira nossos contatos</p>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

            @foreach($contatos as $contato)
                <tr>
                    <th scope="row">{{ $contato->id }}</th>
                    <td>{{ $contato->nome }}</td>
                    <td>{{ $contato->telefone }}</td>
                    <td>{{ $contato->email }}</td>
                    <td class="text-end align-middle">
                        <a href="{{ route('contato.show', $contato->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('contato.edit', $contato->id) }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                        <form action="{{ route('contato.destroy', $contato->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn" onclick=" return confirm('Deseja remover esse contato?');"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                        </form>
                    <td>
                </tr>   
            @endforeach
        </tbody>
    </table>
</div>
@endsection