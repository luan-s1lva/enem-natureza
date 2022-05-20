@extends('layouts.telas')
@section('css', '/css/adminStyle.css')
@section('content')
<header class="container text-center text-light">
    <div class="userFace img-fluid"></div>
    <img src="/img/logo_icon.png" alt="Sua foto de Perfil" style="margin: auto; width: 170px; height: 170px; border-radius: 10em;">
    <h1>{{ $usuario->name }}</h1>
    <hr>
    <h2>{{ $usuario->org }}</h2>
    <hr>
</header>
<br>
<main class="container">
    <div class="row-cols-1">
        <div class="botoes">
            <a href="/solicitacoes"> <button class="col"><img class="icons" src="/img/lupa.png" alt="Icone feito por https://www.freepik.com no Flaticon">Visualizar Solicitações</button></a>
        </div>
        <div class="botoes">
            <a href="/logout"> <button class="col"><img class="icons" src="/img/logout.png" alt="Icone feito por https://www.freepik.com no Flaticon"> Logout</button></a>
        </div>
    </div>
</main>
@endsection