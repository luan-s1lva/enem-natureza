@extends('layouts.telas')
@section('css', '/css/alunoStyle.css')
@section('content')
<header class="container text-center text-light">
    <div class="userFace"></div>
    <h1>{{ $usuario->name }}</h1>
    <hr>
    <h2>{{ $usuario->org }}</h2>
    <hr>
</header>
<br>
<main class="container">
    <div class="row-cols-1">
        <div class="botoes">
            <button class="col"><img class="icons" src="/img/lupa.png" alt="Icone feito por https://www.freepik.com no Flaticon">Visualizar Solicitações</button>
        </div>
    </div>
</main>
@endsection