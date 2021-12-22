@extends('layouts.telas')
@section('css', '/css/matchStyle.css')
@section('content')

<header class="container text-center">
    <h1>Histórico de Partidas:</h1>
</header>
<div class="voltar"><a href="/"><button>Voltar</button></a></div>
<main class="container-fluid row-cols-lg-1 row-cols-md-2 text-center">

    <div id="partida" class="col">
        <div class="card text-center">
            <div id="cardTitulo" class="card header bold">Nome do Modo</div>
            <div id="cardCorpo" class="card-body">
                <h2 class="card-title">Questões Corretas: x/10</h2>
            </div>
            <div id="cardRodape " class="card-footer text-muted">
                <p class="card-text">Datetime da partida</p>
            </div>
        </div>
    </div>

    <div id="partida" class="col">
        <div class="card text-center">
            <div id="cardTitulo" class="card header bold">Campanha</div>
            <div id="cardCorpo" class="card-body">
                <h2 class="card-title">Questões Corretas: 10/10</h2>
            </div>
            <div id="cardRodape " class="card-footer text-muted">
                <p class="card-text">Realizado em : 10/10/1010 10:10</p>
            </div>
        </div>
    </div>


</main>
@endsection