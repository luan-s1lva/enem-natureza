@extends('layouts.telas')
@section('css', '/css/rankingStyle.css')
@section('content')
<header>
    <h1 class="text-center fundo2 container-fluid col-md">Ranking Geral</h1>
</header>

<main class="container" style="margin-top: 150px;">
    <!--LINHA DO  USUARIO LOGADO-->
    <section class="row row-cols-3" style="background-color:white; height:98px; border-radius: 35px 35px 0 0;">
        <div class="col" style="text-align:center; font-weight: 900; font-size:18px; font-style:italic;">
            <div style="border-radius:50%; background-color:red; height:70px; width:70px; margin:auto; margin-top:5px; ">
            </div>
            <p>{{session()->get('usuario')->name}}</p>
        </div>

        <div class="col" style="text-align:center; margin-top:20px; font-weight: 900; font-size:18px; font-style:italic;">
            <p>{{$posicao}}º LUGAR</p>
        </div>

        <div class="col" style="text-align:center; margin-top:20px; font-weight: 900; font-size:18px; font-style:italic;">
            <p style="margin-bottom:0">{{session()->get('usuario')->xp}}<br></p>
            <p>Pontos</p>
        </div>

        <div class="row">
            <div>
    </section>

    <!--PRIMEIRA LINHA DO RANKING - USUARIO TOP 1-->
    <div class="row">
        <div class="col" id="linha"></div>
    </div>
    @foreach($alunos as $indice => $aluno)
    <div id="Outerdiv" class="row row-cols-3" style="background-color:white; height:95px;">

        <div class="col-2">
            <div style="float:left; position: relative">
                <p style="margin-top: 1.6em; font-size:21px; font-style:italic; font-weight: 900; position:absolute; top:50%;">{{ $indice+1 }}º
                </p>
            </div>
        </div>

        <div class="col-2">
            <div>
                <div style="border-radius:50%; background: gray; height:70px; width:70px; margin-left:-40px; margin-top:13px;">
                </div>
            </div>
        </div>

        <div class="col-6" style="float: right; width:30%; position:relative">
            <p style="position:absolute; top:50%; -ms-transform: translateY(-50%);transform: translateY(-50%); font-weight: 900; font-size:20px; font-style:italic;">
                {{$aluno->name}}</p>
        </div>

        <div class="col-2" style="float: right; width:30%; position:relative">
            <p style="position:absolute; top:50%; -ms-transform: translateY(-50%);transform: translateY(-50%); font-weight: 900; font-size:20px; font-style:italic;">
                {{$aluno->xp}}</p>
        </div>
    </div>
    @endforeach
</main>
@endsection