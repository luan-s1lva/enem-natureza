@extends('layouts.telaQuest2')
@section('css', '/css/listarPerguntas.css')
@section('content')

<main class="container-fluid-md">
  <div class="container fundoh1">
    <h1>Lista de Perguntas</h1>
  </div>  
  
  <div class="container">
    <select id="matSel" class="select">
      <option id='option' value="">Selecione...</option>
      @foreach($disciplinas as $disciplina)
        <option value="{{ $disciplina->id }}">{{ $disciplina->name}}</option>
      @endforeach
    </select>

    <div id="assuntos" style="display:none;" class="form-group">
      <label for="assuntos">Assuntos da matéria relacionada: *</label>
      <select name="tema_id" class="select" required>
          <option value="">Selecione...</option>
      </select>
    </div>
    
    <button type="submit" id="filtrar" class="texto">FILTRAR POR ASSUNTO</button>
  </div>
  @foreach($perguntas as $pergunta)
  <div class="marg" style="display:none;">
    <div class="nome">teste</div>
    <hr>

    <div class="matAssun">Assunto -> </div>
    <hr>

    <div class="dataCri">Data de Crição: {{ $pergunta->created_at}}</div>
    <hr>

    <div class="enunciado">{!!$pergunta->textQuest!!}</div>
    <hr>

    <div>
      <div class="alt1">
        <p>
          <img src="/img/rErrada.png" 
            width="20px" 
            height="20px" 
            style="margin-bottom: 30px 0px; margin-right: 20px;">
              This is some text. This is some text. This is some text.
        </p>
      </div>
    </div>
      
  </div>
  @endforeach

</main>
<a href="#topo" class="topopag" >TOPO</a>