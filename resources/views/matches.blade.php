@extends('layouts.telas')
@section('css', '/css/matchStyle.css')
@section('content')

<header class="container text-center">
    <h1>Histórico de Partidas</h1>
</header>
<div class="voltar"><a href="/"><button>Voltar</button></a></div>
<main class="container-fluid row-cols-lg-1 row-cols-md-2 text-center">

    @foreach($partidas as $partida)
    <div id="partida" class="col">
        <div class="card text-center">
            <div id="cardCorpo" class="card-body">
                <h2 class="card-title">Questões Corretas: {{ $partida->quests()->wherePivot('acertou', true)->count()}} / {{ $partida->quests()->count()}}</h2>
            </div>
            <div id="cardRodape " class="card-footer text-muted">
                <p class="card-text">Data e hora do início da partida: {{ $partida->horario }}</p>
            </div>
        </div>
    </div>
    @endforeach
</main>
@endsection