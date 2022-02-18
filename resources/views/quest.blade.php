@extends('layouts.telaQuest')
@section('css', '/css/questStyle.css')


@section('content')
<header>
    <h1 class="fundo container-fluid-md col-md">Crie sua pergunta</h1>
</header>

<main class="container-fluid-md" style="padding-top:20px;">
    <div class="row">

        <form action="/quest/store" method="POST" autocomplete="off" class="container-fluid">
            @csrf
            <fieldset>
                <div class="col-md">
                    <div class="container-fluid-md">
                        <label for="txt_enun">Enunciado: *</label>
                        <textarea name="editor1" id="editor1" required></textarea>
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
                                <option value="{{ $disciplina->id }}">{{ $disciplina->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <br>
                            <div id="assuntos"> 
                                <label for="assuntos">Assuntos da matéria relacionada: *</label>

                                <select name="tema_id" class="select" required>
                                    <option value="">Selecione...</option>
                                </select>
                                <!-- <div class="autobox">
                                    <div class="autocomplete" style="width:300px;">
                                        <input class="dosIrmao" id="myInput" type="text" name="assuntos" placeholder="Ex: Ecologia">
                                    </div>
                                </div> --> 
                            </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="container-fluid-md">
                        <label>Alternativas da sua pergunta: * (Selecione apenas o botão da resposta correta)</label>
                        <br>

                        <label for="alt1"></label>
                        <input type="radio" id="alt1" name="alt_cert" value="0" required></input><input class="container-fluid box" type="text" name="alt_txt[]" required><br></input>

                        <label for="alt2"></label>
                        <input type="radio" id="alt2" name="alt_cert" value="1" required></input><input class="container-fluid box" type="text" name="alt_txt[]" required><br></input>

                        <label for="alt3"></label>
                        <input type="radio" id="alt3" name="alt_cert" value="2" required></input><input class="container-fluid box" type="text" name="alt_txt[]" required><br></input>

                        <label for="alt4"></label>
                        <input type="radio" id="alt4" name="alt_cert" value="3" required></input><input class="container-fluid box" type="text" name="alt_txt[]" required><br></input>
                    </div>
                </div>

                <br>
                <div class="row"></div>

                <div class="col-md">
                    <div class="container-fluid-md">
                        <label>Dificuldade: *</label><br>

                        <input type="radio" value="1" id="altFa" name="dificulty" required>
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
</main>
@endsection