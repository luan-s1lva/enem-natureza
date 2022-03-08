@extends('layouts.telas')
@section('css', '/css/listPerguntasProf.css')


@section('content')
<div class="container">
    <header class="container">
        <h1 class="fundo">Suas Perguntas Cadastradas</h1>
    </header>
</div>

<div class="voltar"><a href="/"><button>Voltar</button></a></div>

<main>

@foreach($perguntas as $pergunta)
    <div class="espaco">
        <section class="pergunta bg-white container-fluid">
            <h3>Questão: </h2>
                {!!$pergunta->textQuest!!} 
                <a href="/editar/pergunta/{{ $pergunta->id }}" style="float:right"><img class="img-fluid icon" src="/img/editar.png" alt="Icone Feito por Freepik: https://www.freepik.com"> EDITAR </a>
            </h3>
        </section>
    </div>
@endforeach



</main>
@endsection