@extends('layouts.telaQuest')
@section('css', '/css/questStyle.css')


@section('content')
<header>
    <h1 class="fundo">Crie sua pergunta</h1>
</header>

<main class="container-fluid" style="padding-top:20px;">

    <form action="/quest/store" method="POST">
        @csrf

        <div class="form-group">
            <label for="txt_enun">Enunciado: *</label>
            <textarea name="editor1" id="editor1" required></textarea>
        </div>

        <div class="form-group">

            <label>Selecione a matéria *</label>
            <select id="matSel" class="select" required>
                <option value="">Selecione...</option>

                @foreach($disciplinas as $disciplina)
                <option value="{{ $disciplina->id }}">{{ $disciplina->name }}</option>
                @endforeach

            </select>

            <div id="assuntos" style="display:none;" class="form-group">
                <label for="assuntos">Assuntos da matéria relacionada: *</label>
                <select name="tema_id" class="select" required>
                    <option value="">Selecione...</option>
                </select>
            </div>

        </div>

        <div class="form-group">
            <label>Alternativas da sua pergunta: * (Selecione apenas o botão da resposta correta)</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="alt1" name="alt_cert" value="0" required></input>
                <input class="box form-check-label" type="text" name="alt_txt[]" required></input>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" id="alt2" name="alt_cert" value="1" required></input>
                <input class="box form-check-label" type="text" name="alt_txt[]" required></input>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" id="alt3" name="alt_cert" value="2" required></input>
                <input class="box form-check-label" type="text" name="alt_txt[]" required></input>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" id="alt4" name="alt_cert" value="3" required></input>
                <input class="box form-check-label" type="text" name="alt_txt[]" required></input>
            </div>
        </div>


        <div class="form-group">

            <label>Dificuldade: *</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="1" id="altFa" name="dificulty" required>
                <label class="form-check-label" for="altFa">Fácil</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="2" id="altMe" name="dificulty" required>
                <label class="form-check-label" for="altMe">Médio</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="3" id="altDi" name="dificulty" required>
                <label class="form-check-label" for="altDi">Difícil</label>
            </div>
        </div>

        <div class="form-group">
            <div class="text-right">
                <input class="botao" type="submit" value="Enviar">
            </div>
        </div>
        </div>
    </form>
</main>
@endsection