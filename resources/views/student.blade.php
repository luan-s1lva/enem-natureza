@extends('layouts.telas')
@section('css', '/css/alunoStyle.css')
@section('content')
<header class="container text-center">
    <img class="userFace img-fluid" src="/img/perfil/{{$usuario->img}}" alt="Sua foto de Perfil">
    <h1>{{ $usuario->name }}</h1>
    <hr>
    <h2>{{ $usuario->org }}</h2>
    <hr>
    <h3>Seu Nível: {{ (int) ($usuario->xp / 100) }}</h3>
    <div style="line-height:50px" class="level text-dark">{{ $usuario->xp % 100 }}/100</div>
</header>

<main class="container">
    <div class="row row-cols-1 row-cols-sm-2">
        <div class="botoes">
            <a href=""><button class="col"><img class="icons" src="/img/cerebro.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Campanha</button></a>
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