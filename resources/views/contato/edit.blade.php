@extends('contato.nav')

@section('titulo', 'Contato - edit')

    <form action="{{ route('contato.update', $contato->id) }}" method="post">
        @method('PATCH')
        @csrf
        @section('content')
        @component('contato.form', ['contato' => $contato])
        @endcomponent
    </form>
@endsection