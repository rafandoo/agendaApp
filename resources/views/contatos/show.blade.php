@extends('contatos.layout')

@section('titulo', 'contatos - Show')

@section('conteudo')
    <fieldset>
        <label for="id" >ID: </label>
        <input type="text" disabled value="{{ $contatos->id }}">
        <br><br>
        <label for="nome">Nome: </label>
        <input type="text" disabled value="{{ $contatos->nome }}">
        <br><br>
        <label for="telefone">Telefone: </label>
        <input type="tel" disabled value="{{ $contatos->telefone }}">
        <br><br>
        <label for="email">Email: </label>
        <input type="email" disabled value="{{ $contatos->email }}">
        <br><br>
        <a href="{{ route('contatos.index') }}"><button>Voltar</button></a>
        <a href="{{ route('contatos.edit', $contatos->id) }}"><button>Editar</button></a>
    </fieldset>
@endsection