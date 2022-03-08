@extends('layouts.telas')
@section('css', '/css/professorStyle.css')
@section('content')
<header class="container">

    <h1 class="text-center text-dark">ENEM NATUREZA</h1>

    <div style="text-align:center; margin-top:10px">
        <img class="userFace" src="/img/perfil/{{$usuario->img}}" alt="Sua foto de Perfil">
    </div>
</header>

<main class="info container">

    <p class="text-center" style="margin-top:30px;">{{ $usuario->name }}</p>

    <div class="linha"></div>

    <p class="text-center">{{ $usuario->org }}</p>

    <div class="linha"></div>

    <div class="row row-cols-1 row-cols-sm-2" style="width:85%; margin:auto; margin-top:40px;">
        <a href="/criarPergunta"><button class="col" tabindex="1">CADASTRAR PERGUNTA</button></a>
        <a href="/suasPerguntas"><button class="col" tabindex="2">SUAS PERGUNTAS CADASTRADAS</button></a>
        <a href="/listarPerguntas"><button class="col" tabindex="3">LISTAR TODAS AS PERGUNTAS</button></a>
        <a href="/logout"><button class="col">LOGOUT</button></a>
    </div>

</main>
@endsection