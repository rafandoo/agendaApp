@extends('contatos.layout')

@section('titulo', 'contato - Create')

@section('conteudo')
    <form action="{{ route('contatos.store') }}" method="POST">
        @method('POST')
        @csrf
        @component('contatos.form')
        @endcomponent
    </form>
@endsection