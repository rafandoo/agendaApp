@extends('contatos.layout')

@section('titulo', 'contato - Edit')

@section('conteudo')
    <form action="{{ route('contatos.update', $contatos->id) }}" method="post">
        @method('PATCH')
        @csrf
        @component('contatos.form', ['contatos' => $contatos])
        @endcomponent
    </form>
@endsection