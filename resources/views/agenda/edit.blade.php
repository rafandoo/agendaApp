@extends('agenda.layout')

@section('titulo', 'Agenda - Edit')

@section('conteudo')
    <form action="{{ route('agenda.update', $agenda[0]['id']) }}" method="post">
        @method('PATCH')
        @csrf
        @component('agenda.form', ['agenda' => $agenda])
        @endcomponent
    </form>
@endsection