@extends('contato.nav')
@section('title', 'Contato create')

    <form action="{{ route('contato.store') }}" method="POST">
        @method('POST')
        @csrf
        @component('contato.form')
        @section('content')
        @endcomponent
    </form>
@endsection