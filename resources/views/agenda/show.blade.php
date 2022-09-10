@extends('agenda.layout')

@section('titulo', 'Agenda - Show')

@section('conteudo')
    <fieldset>
        <label for="id" >ID: </label>
        <input type="text" disabled value="{{ $agenda[0]['id'] }}">
        <br><br>
        <label for="nome">Nome: </label>
        <input type="text" disabled value="{{ $agenda[0]['nome'] }}">
        <br><br>
        <label for="telefone">Telefone: </label>
        <input type="tel" disabled value="{{ $agenda[0]['telefone'] }}">
        <br><br>
        <label for="email">Email: </label>
        <input type="email" disabled value="{{ $agenda[0]['email'] }}">
        <br><br>
        <a href="{{ route('agenda.index') }}"><button>Voltar</button></a>
        <a href="{{ route('agenda.edit', $agenda[0]['id']) }}"><button>Editar</button></a>
    </fieldset>
@endsection