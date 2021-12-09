@extends('layouts.telas')
@section('css', '/css/alunoStyle.css')
@section('content')
<header class="container text-center text-light">
    <div class="userFace"></div>
    <h1>{{ $usuario->name }}</h1>
    <hr>
    <h2>{{ $usuario->org }}</h2>
    <hr>
    <h3>Seu Nível: {{ (int) ($usuario->xp / 100) }}</h3>
    <div style="line-height:50px" class="level text-dark">{{ $usuario->xp % 100 }}/100</div>
</header>
<br>
<main class="container">
    <div class="row-cols-1">

        <div class="botoes">

            <button class="col"><img class="icons" src="/img/cerebro.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Campanha</button>
        </div>
        <div class="botoes">
            <a href="/criarQuiz"><button class="col"><img class="icons" src="/img/livros.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Dividido por Assuntos</button></a>
        </div>
        <div class="botoes">
            <a href="/ranking"> <button class="col"><img class="icons" src="/img/ranking.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Vizualizar Ranking</button></a>
        </div>
        <div class="botoes">
            <a href="/historico"> <button class="col"><img class="icons" src="/img/historico.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Histórico de Partidas</button></a>
        </div>
        <div class="botoes">
            <a href="/logout"> <button class="col"><img class="icons" src="/img/logout.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Logout</button></a>
        </div>
    </div>

</main>
@endsection