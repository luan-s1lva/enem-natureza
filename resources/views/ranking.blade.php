@extends('layouts.telas')
@section('css', '/css/rankingStyle.css')
@section('content')
<header>
    <h1 class="text-center fundo2 container-fluid col-md">Ranking Geral</h1>
</header>
<div class="voltar"><a href="/"><button>Voltar</button></a></div>

<main class="container" style="margin-top: 10px;">
    <!--LINHA DO  USUARIO LOGADO-->
    <section class="row row-cols-3 " style="background-color:white; border-radius: 35px 35px 0 0;">

        <div class="col img">
            <img class="img-fluid" style="height:70px; width:70px; margin:auto; margin-top:5px;" src="/img/perfil/{{session()->get('usuario')->img}}" alt="Foto de Perfil">
            <p>{{session()->get('usuario')->name}}</p>
        </div>

        <div class="col lugar">
            <p>{{$posicao}}º LUGAR</p>
        </div>

        <div class="col pontos" style=>
            <p style="margin-bottom:0">{{session()->get('usuario')->xp}} Pontos<br></p>
        </div>

    </section>

    <!--Linhas do Ranking-->
    <div class="row">
        <div class="col" id="linha"></div>
    </div>
    @foreach($alunos as $indice => $aluno)
    <div id="Outerdiv" class="row row-cols-4" style="background-color:white; height:120px;">

        <div class="col-2">
            <div style="float:left; position: relative">
                <p class="posicao">{{ $indice+1 }}º</p>
            </div>
        </div>

        <div class="col">
            <div>
                <img class="img-fluid" style="height:70px; width:70px; margin-left:-40px; margin-top:13px;" src="/img/perfil/{{$aluno->img}}" alt="Foto de Perfil">
            </div>
        </div>

        <div class="col-4" style="float: right; width:30%; position:relative">
            <p class="nome">
                {{$aluno->name}}
            </p>
        </div>

        <div class="col" style="float: right; width:30%; position:relative">
            <p class="xp">
                {{$aluno->xp}} pontos
            </p>
        </div>
    </div>
    @endforeach
</main>
@endsection