@extends('agenda.nav')

@section('titulo', $agenda->nome)

@section('content')

    <div class="col-md-0 offset-md-1">
        <div class="row">
            <div id="info-container" class="col-md-5">
                <label for="id"><ion-icon name="grid-outline"></ion-icon>ID: </label> {{ $agenda->id }} <br>
                <label for="nome"><ion-icon name="people-outline"></ion-icon>Nome: </label> {{ $agenda->nome }} <br>
                <label for="telefone"><ion-icon name="call-outline"></ion-icon>Telefone: </label> {{ $agenda->telefone }} <br>
                <label for="email"><ion-icon name="mail-outline"></ion-icon>E-mail: </label> {{ $agenda->email }} <br>
                <br><br>
                <a href="{{ route('agenda.index') }}" class="btn btn-primary">Voltar </a>
                <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-primary">Editar</a>
            </div>
        
        </div>
    </div>
    
@endsection