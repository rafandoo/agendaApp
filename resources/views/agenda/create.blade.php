@extends('agenda.nav')
@section('title', 'Agenda create')

    <form action="{{ route('agenda.store') }}" method="POST">
        @method('POST')
        @csrf
        @component('agenda.form')
        @section('content')
        @endcomponent
    </form>
@endsection