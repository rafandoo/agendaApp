@extends('agenda.layout')

@section('titulo', 'Agenda - Create')

@section('conteudo')
    <form action="{{ route('agenda.store') }}" method="POST">
        @method('POST')
        @csrf
        @component('agenda.form')
        @endcomponent
    </form>
@endsection