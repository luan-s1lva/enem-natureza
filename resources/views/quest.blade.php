@extends('layouts.telaQuest')
@section('css', '/css/questStyle.css')


@section('content')
<header>
    <h1 class="fundo container-fluid-md col-md">Crie sua pergunta</h1>
</header>

<main class="container-fluid-md">
    <div class="row">

        <form action="/quest/store" method="POST" class="container-fluid">
            @csrf
            <fieldset>
                <br>

                <div class="col-md">
                    <div class="container-fluid-md">
                        <label for="txt_nome">Seu nome: *</label>
                        <input class="container-fluid box" type="text" name="nome" id="txt_nome" required>
                    </div>
                </div>

                <br>
                <div class="row"></div>

                <div class="col-md">
                    <div class="container-fluid-md">
                        <label for="txt_enun">Enunciado: *</label>
                        <textarea name="editor" required></textarea>
                    </div>
                </div>

                <br>
                <div class="row"></div>

                <div class="col-md">
                    <div class="container-fluid-md">

                        <label>Selecione a matéria *</label>
                        <br>
                        <div>
                            <select name="disciplina" id="matSel" required>
                                <option value="">Selecione...</option>
                                @foreach($disciplinas as $disciplina)
                                <option value="{{ $disciplina->id }}">{{ $disciplina->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <br>

                        <div>

                            <label>Assuntos da matéria relacionada: *</label>
                            <br>

                            <select name="assuntos" id="assunMat" required>
                                <option value="0">Selecione...</option>

                                  <!--Química-->
                                <option value="1">Unidades de Medidas</option>
                                <option value="2">Constituição da Matéria</option>
                                <option value="3">Substâncias Químicas</option>
                                <option value="4">Misturas Heterogêneas e Homogêneas</option>
                                <option value="5">Separação de Misturas</option>
                                <option value="6">Propriedades Periódicas</option>
                                <option value="7">Tabela Periódica</option>
                                <option value="8">Dalton</option>
                                <option value="9">Thompson</option>
                                <option value="10">Rutherford</option>
                                <option value="11">Bohr</option>
                                <option value="12">Estabilidade dos Gases Nobres</option>
                                <option value="13">Ligação Iônica</option>
                                <option value="14">Ligação Covalente</option>
                                <option value="15">Ligação Metálica</option>
                                <option value="16">Regra do Octeto</option>
                                <option value="17">Ligações Intermoleculares</option>
                                <option value="18">Geometria Molecular</option>
                                <option value="19">Desintegração Radiativa</option>
                                <option value="20">Decaimento e Meia-vida</option>
                                <option value="21">Massa Atômica (u)</option>
                                <option value="22">Massa Molecular (MM)</option>
                                <option value="23">Calor</option>
                                <option value="24">Reações Endotermicas</option>
                                <option value="25">Reações Exotermicas</option>
                                <option value="26">Equilibrio Químico</option>
                                <option value="27">Indicadores Ácido-Base e pH</option>
                                <option value="28">Átomo de Carbono</option>
                                <option value="29">Cadeias Carbônicas</option>
                                <option value="30">Funções Orgânicas</option>
                                <option value="31">Isomeria Plana</option>
                                <option value="32">Isomeria Espacial</option>

                                <!--FÍSICA-->
                                <option value="34">Bases da Cinemática Escalar</option>
                                <option value="35">Movimento Uniforme</option>
                                <option value="36">Movimento Uniformemente Variado</option>
                                <option value="37">Movimentos Circulares</option>
                                <option value="38">Cinemática Vetorial</option>
                                <option value="39">Princípios da Dinâmica</option>
                                <option value="40">Leis de Newton</option>
                                <option value="41">Atrito entre Sólidos</option>
                                <option value="42">Gravitação</option>
                                <option value="43">Resultantes Tangencial e Cetrípeta</option>
                                <option value="44">Trabalho e Potência</option>
                                <option value="45">Energia Mecânica</option>
                                <option value="46">Quantidade de Movimento</option>
                                <option value="47">Estática dos Sólidos</option>
                                <option value="48">Estática dos Fluídos</option>
                                <option value="49">Fundamentos da Óptica</option>
                                <option value="50">Reflexão da Luz</option>
                                <option value="51">Refração da Luz</option>
                                <option value="52">Lentes Esféricas</option>
                                <option value="53">Instrumentos Ópticos</option>
                                <option value="54">MHS</option>
                                <option value="55">Acústica</option>
                                <option value="56">Ondas</option>
                                <option value="57">Termometria</option>
                                <option value="58">Calorimetria</option>
                                <option value="59">Termodinâmica</option>
                                <option value="60">Eletroestática</option>
                                <option value="61">Eletrodinâmica</option>
                                <option value="62">Campo Magnético</option>
                                <option value="63">Força Magnética</option>
                                <option value="64">Indução Magnética</option>

                                
                                 <!--Biologia-->
                                <option value="65">Ecologia</option>
                                <option value="66">Citologia</option>
                                <option value="67">Citoplasma</option>
                                <option value="68">Núcleo Celular</option>
                                <option value="69">Reprodução</option>
                                <option value="70">Genética</option>
                                <option value="71">Embriologia</option>
                                <option value="72">Evolução</option>
                                <option value="73">Bioquímica</option>
                                <option value="74">Parasitologia</option>
                                <option value="75">Botânica</option>
                                <option value="76">Fisiologia Animal</option>
                            </select>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row"></div>

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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="/js/scriptQuest.js"></script>
@endsection