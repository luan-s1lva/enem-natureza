@extends('layouts.telaQuest2')
@section('css', '/css/listarPerguntas.css')
@section('content')

<main class="container-fluid-md">
  <div class="container fundoh1">
    <h1>Lista de Perguntas</h1>
  </div>  
  

  <div class="disciplinas container row row-cols-3">
    <button onclick="exibir(3)"><img class="icons" src="/img/timer_química.gif" alt="Gif: Temporizador de Química">Química</button>
    <button onclick="exibir(2)"><img class="icons" src="/img/timer_física.gif" alt="Gif: Temporizador de Física">Física</button>
    <button onclick="exibir(1)"><img class="icons" src="/img/timer_biologia.gif" alt="Gif: Temporizador de Biologia">Biologia</button>
  </div>

  <div id="assuntosQ" class="assuntosQ container row row-cols-1">    
            
  </div>

</main>
<a href="#topo" class="topopag" >TOPO</a>

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
            url: "/listar/Perguntas/" + id,
            success: function(data) {
                data.forEach(function(obj) {
                    var p = $("<p>").html(obj.textQuest).attr({
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