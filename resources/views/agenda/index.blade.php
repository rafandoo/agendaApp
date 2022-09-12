@extends('agenda.nav')
@section('title', 'Agenda index')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um contato</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar contato">
    <form>
</div>
<div id="agenda-container" class="col md-12">
    <h2>Lista de Contatos</h2>
    <p>Confira nossos contatos</p>
    <div id="cards-container" class="row">
        @foreach($agenda as $agenda)
        <div class="list-group">
            <div class="list-group-item">
                {{ $agenda->id }}
                {{ $agenda->nome }}
                {{ $agenda->telefone }}
                {{ $agenda->email }}
            </div><br>
        </div>
        @endforeach
    </div>
</div>

@endsection