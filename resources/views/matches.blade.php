@extends('layouts.telas')
@section('css', '/css/matchStyle.css')
@section('content')

<header class="container text-center">
    <h1>Histórico de Partidas:</h1>
</header>
<main class="container-fluid row row-cols-2">

    <div id="partida" class="col">
        <div class="card text-center">
            <div class="card header bold">Divido por Assuntos</div>
            <div class="card-body">
                <h2 class="card-title">Questões Corretas: 5/10</h2>
                <p class="card-text">Ganho de XP: +50 pontos</p>
            </div>
            <div class="card-footer text-muted">
                <p class="card-text">Realizado em: 11/11/1111 11:11 A.M</p>
            </div>
        </div>
    </div>

    <div id="partida" class="col">
        <div class="card text-center">
            <div class="card header bold">Dividido por Assunto</div>
            <div class="card-body">
                <h2 class="card-title">Questões Corretas: 10/10</h2>
                <p class="card-text">Ganho de XP: +200 pontos</p>
            </div>
            <div class="card-footer text-muted">
                <p class="card-text">Realizado em: 11/11/1111 11:11 A.M</p>
            </div>
        </div>
    </div>

    <div id="partida" class="col">
        <div class="card text-center">
            <div class="card header bold">Divido por Assuntos</div>
            <div class="card-body">
                <h2 class="card-title">Questões Corretas: 2/10</h2>
                <p class="card-text">Ganho de XP: +10 pontos</p>
            </div>
            <div class="card-footer text-muted">
                <p class="card-text">Realizado em: 11/11/1111 11:11 A.M</p>
            </div>
        </div>
    </div>

    <div id="partida" class="col">
        <div class="card text-center">
            <div class="card header bold">Campanha</div>
            <div class="card-body">
                <h2 class="card-title">Questões Corretas: 10/10</h2>
                <p class="card-text">Ganho de XP: +400 pontos</p>
            </div>
            <div class="card-footer text-muted">
                <p class="card-text">Realizado em: 11/11/1111 11:11 A.M</p>
            </div>
        </div>
    </div>

    <div id="partida" class="col">
        <div class="card text-center">
            <div class="card header bold">Divido por Assuntos</div>
            <div class="card-body">
                <h2 class="card-title">Questões Corretas: 0/10</h2>
                <p class="card-text">Ganho de XP: +0 pontos</p>
            </div>
            <div class="card-footer text-muted">
                <p class="card-text">Realizado em: 11/11/1111 11:11 A.M</p>
            </div>
        </div>
    </div>


</main>
@endsection