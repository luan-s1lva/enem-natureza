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

    <p class="text-center" style="margin-top:30px;">LUAN SILVA DO CARMO</p>

    <div class="container" style="height:15px; background-color: green; width:90%; border-radius:20px; margin-bottom:40px;">

    </div>

    <p class="text-center">INSTITUTO FEDERAL DE CIÊNCIAS E TECNOLOGIA DO RIO GRANDE DO NORTE</p>

    <div class="container" style="height:15px; background-color: green; width:90%; border-radius:20px; margin-bottom:40px;">

    </div>

    <div class="text-center row row-cols-2" style="width:85%; margin:auto; margin-top:40px;">
        <button class="col container" tabindex="1">CADASTRAR PERGUNTA</button>
        <button class="col container" tabindex="2">EDITAR PERGUNTA</button>
    </div>

</div>
@endsection