@extends('layouts.telas')
@section('css', '/css/professorStyle.css')
@section('content')
<section class="container">
    <header class="container">
        <h1 class="text-center text-dark container">ENEM NATUREZA</h1>
    </header>

    <div class="container" style="text-align:center;">
        <img src="/img/cerebro.png" alt="">
    </div>
</section>

<div class="info container">

    <p class="text-center" style="margin-top:30px;">{{ $usuario->name }}</p>

    <div class="container" style="height:15px; background-color: green; width:90%; border-radius:20px; margin-bottom:40px;">

    </div>

    <p class="text-center">{{ $usuario->org }}</p>

    <div class="container" style="height:15px; background-color: green; width:90%; border-radius:20px; margin-bottom:40px;">

    </div>

    <div class="text-center row row-cols-1 row-cols-sm-3" style="width:85%; margin:auto; margin-top:40px;">
        <a href="/professor/criarPergunta"><button class="col container" tabindex="1">CADASTRAR PERGUNTA</button></a>
        <button class="col container" tabindex="2">EDITAR PERGUNTA</button>
        <a href="/logout"><button class="col container" >LOGOUT</button></a>
    </div>

</div>
@endsection