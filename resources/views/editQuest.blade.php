@extends('layouts.telaQuest')
@section('css', '/css/questStyle.css')


@section('content')
<header>
    <h1 class="fundo container-fluid-md col-md">Edite sua pergunta</h1>
</header>

<main class="container-fluid-md" style="padding-top:20px;">
    <div class="row">

        <form action="/quest/update" method="POST" autocomplete="off" class="container-fluid">
            @csrf
            <input type="hidden" name="id" value="{{ $pergunta->id }}"> 
            <fieldset>
                <div class="col-md">
                    <div class="container-fluid-md">
                        <label for="txt_enun">Enunciado: *</label>
                        <textarea name="editor1" id="editor1" required>{{$pergunta->textQuest}}</textarea>
                    </div>
                </div>
                <div class="col-md">
                    <div class="container-fluid-md">

                        <label>Selecione a matéria *</label>
                        <br>
                        <div>
                            <select id="matSel" class="select" required>
                                <option value="">Selecione...</option>
                                @foreach($disciplinas as $disciplina)
                                <option value="{{ $disciplina->id }}"
                                @if($disciplina->id == $pergunta->theme->discipline->id)
                                     selected="selected"
                                @endif
                                >{{ $disciplina->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <br>
                            <div id="assuntos"> 
                                <label for="assuntos">Assuntos da matéria relacionada: *</label>

                                <select name="tema_id" class="select" required>
                                    <option value="">Selecione...</option>
                                    @foreach($pergunta->theme->discipline->temas as $theme)
                                    @if($theme->id == $pergunta->theme->id)
                                        <option value="{{ $theme->id }}" selected="selected">{{ $theme->theme }}</option>
                                    @else
                                        <option value="{{ $theme->id }}" >{{ $theme->theme }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="container-fluid-md">
                        <label>Alternativas da sua pergunta: * (Selecione apenas o botão da resposta correta)</label>
                        <br>

                    @foreach($pergunta->alternatives as $alt)
                        <label for="alt1"></label>
                        <input type="radio" id="alt1" name="alt_cert" value="{{ $alt->id }}" required
                        @if ($alt->isTrue)
                        checked="checked"
                        @endif
                        ></input>
                        <input type="hidden" name="alt_id[]" value="{{ $alt->id }}">
                        <input class="container-fluid box" type="text" name="alt_txt[]" data-pos="0" required value="{{ $alt->texto }}"><br></input>
                    @endforeach
                    </div>
                </div>

                <br>
                <div class="row"></div>

                <div class="col-md">
                    <div class="container-fluid-md">
                        <label>Dificuldade: *</label><br>

                        <input type="radio" value="1" id="altFa" name="dificulty" required >
                        <label for="altFa">Fácil</label><br>

                        <input type="radio" value="2" id="altMe" name="dificulty" required>
                        <label for="altMe">Médio</label><br>

                        <input type="radio" value="3" id="altDi" name="dificulty" required>
                        <label for="altDi">Difícil</label><br>
                    </div>
                </div>

                <br>
                <div class="row"></div>

                <div class="col-md">
                    <div class="container-fluid-md">
                        <div class="text-right">
                            <input class="botao" type="submit" value="Enviar">
                        </div>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    <script src="/js/editQuest.js"></script>
</main>
@endsection