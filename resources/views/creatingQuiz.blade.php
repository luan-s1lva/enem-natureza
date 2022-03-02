@extends('layouts.telas')
@section('css', '/css/assuntosStyle.css')
@section('content')
<header class="container text-center">
    <h1>Escolha o tema das perguntas para iniciar seu Quiz:</h1>
</header>
<main class="container">

    <div class="disciplinas container row row-cols-3">
        <button onclick="exibir(3)"><img class="icons" src="/img/timer_química.gif" alt="Gif: Temporizador de Química">Química</button>
        <button onclick="exibir(2)"><img class="icons" src="/img/timer_física.gif" alt="Gif: Temporizador de Física">Física</button>
        <button onclick="exibir(1)"><img class="icons" src="/img/timer_biologia.gif" alt="Gif: Temporizador de Biologia">Biologia</button>
    </div>

    <form action="/play/assunto" method="POST">
        {{ csrf_field() }}
        <div id="assuntosQ" class="assuntosQ container row row-cols-1">    
            
        </div>

        <button type="submit" style="float:right;">Iniciar Quiz!</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</main>

<script>
    function exibir(id) {

        var escolher = $("#assuntosQ");
        
        var div = $("<div>").attr({
            id : "assuntos",
            style : "background-color:white; padding-top:15px"
        });
        escolher.empty();
        escolher.append(div);
        
        $.ajax({
            url: "/assuntos/listar/" + id,
            success: function(data) {
                data.forEach(function(obj) {
                    var p = $("<p>").append($("<input>").attr({
                        type : "checkbox",
                        name : "temas[]",
                        value : obj.id
                    })).append(obj.theme).attr({
                        style : "padding-bottom:10px; padding-top:10px"
                    });
                    div.append(p);
                });
            },
            type : 'GET',
            dataType : 'json'
        });
    }
</script>
@endsection