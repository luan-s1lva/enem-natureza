@extends('layouts.telas')
@section('css', '/css/listPerguntasProf.css')


@section('content')
<div class="container">
    <div class="voltar" style="float:left"><a href="/"><button>Voltar</button></a></div>
    <header class="">
        <h1 class="fundo">Suas Perguntas Cadastradas</h1>
    </header>
</div>

<main>

@foreach($perguntas as $pergunta)
    <div class="espaco">
        <section class="pergunta bg-white container-fluid">
           
            <h3>Questão: </h2>
                {{$pergunta->textQuest}} 
                <a href="" style="float:right"><button><img class="img-fluid icon" src="/img/editar.png" alt="Icone Feito por Freepik: https://www.freepik.com"> EDITAR </button></a>

        </section>
    </div>
    @endforeach



</main>
@endsection