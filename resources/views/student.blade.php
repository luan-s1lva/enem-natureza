@extends('layouts.telas')
@section('css', '/css/alunoStyle.css')
@section('content')
<?php
$tamanho = ($usuario->xp % 500) * 100 / 500;
?>
<header class="container text-center">
    <img class="userFace img-fluid" src="/img/perfil/{{$usuario->img}}" alt="Sua foto de Perfil">
    <h1>{{ $usuario->name }}</h1>
    <hr>
    <h2>{{ $usuario->org }}</h2>
    <hr>
    <h3>Seu Nível: {{ (int) ($usuario->xp / 500) }}</h3>
    <hr>
    <h3>Pontos de experiência totais para passar de nível: <p id='dentroBar'>{{ ($usuario->xp % 500) }} / 500</p>
    </h3>

    <div class="progress" style="height:35px; border: 2px solid white;">
        <div class="progress-bar" style="width:<?php echo $tamanho ?>%;" role="progressbar" aria-valuemin="0" aria-valuenow="{{$usuario->xp %500}}" aria-valuemax="500">
        </div>
    </div>


    </div>
</header>

<main class="container">
    <div class="row row-cols-1 row-cols-sm-2">
        <div class="botoes">
            <a href="/play"><button class="col"><img class="icons" src="/img/cerebro.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Aleatório</button></a>
        </div>
        <div class="botoes">
            <a href="/criarQuiz"><button class="col"><img class="icons" src="/img/livros.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Dividido por Assuntos</button></a>
        </div>
        <div class="botoes">
            <a href="/ranking/mostrar"> <button class="col"><img class="icons" src="/img/ranking.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Vizualizar Ranking</button></a>
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