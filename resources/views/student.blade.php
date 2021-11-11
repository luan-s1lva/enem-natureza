@extends('layouts.telas')
@section('css', '/css/alunoStyle.css')
@section('content')
<header class="container text-center text-light">
    <div class="userFace"></div>
    <h1>Username</h1>
    <hr>
    <h2>Estudante</h2>
    <hr>
    <h3>Seu Nível:</h3>
    <div class="level"></div>
</header>
<br>
<main class="container">
    <div class="row-cols-1">
        <div class="botoes">
            <button class="col"><img class="icons" src="/img/ranking.png" alt="Icone feito por https://www.freepik.com no Flaticon">  Vizualizar Ranking</button>
        </div>
        <div class="botoes">

            <button class="col"><img class="icons" src="/img/cerebro.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Campanha</button>
        </div>
        <div class="botoes">
            <button class="col"><img class="icons" src="/img/livros.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Dividido
                por Assuntos</button>
        </div>
    </div>
</main>
@endsection