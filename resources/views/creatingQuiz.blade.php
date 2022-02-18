@extends('layouts.telas')
@section('css', '/css/assuntosStyle.css')
@section('content')
<header class="container text-center">
    <h1>Escolha o tema das perguntas para iniciar seu Quiz:</h1>
</header>
<main class="container">

    <div class="disciplinas container row row-cols-3">
        <button id="quimica" onclick="exibir(id)"><img class="icons" src="/img/timer_química.gif" alt="Gif: Temporizador de Química">Química</button>
        <button id="fisica" onclick="exibirFisica()"><img class="icons" src="/img/timer_física.gif" alt="Gif: Temporizador de Física">Física</button>
        <button id="biologia" onclick="exibirBiologia()"><img class="icons" src="/img/timer_biologia.gif" alt="Gif: Temporizador de Biologia">Biologia</button>
    </div>

    <form action="" method="POST">
        <div id="assuntosQ" class="assuntosQ container row row-cols-1"></div>    
            <button type="submit" style="float:right;">Iniciar Quiz!</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</main>

<script>
    function exibir(id) {

        var escolher = document.getElementById("assuntosQ")
        
        var div = document.createElement("div");
        div.id = "teste";
        div.style = "background-color:white;";
        div.style.height = "50px";

        escolher.appendChild(div);
        
        if (id === "quimica") {
            $.ajax({
                url: "/assuntos/listar/",
                success: function(data) {
                    data.forEach(function(obj) {
                        console.log("FOI");
                    });
                },
                type : 'GET',
                dataType : 'json'
            });
        }
    }
</script>
@endsection