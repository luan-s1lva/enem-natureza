@extends('layouts.telaQuest')
@section('css', '/css/questStyle.css')

@section('content')
<header>
    <h1 class="fundo container-fluid-md col-md">Crie sua pergunta</h1>
</header>

<main class="container-fluid-md">
    <div class="row">

        <form action="" method="POST" class="container-fluid">

            <fieldset>
                <br>

                <div class="col-md">
                    <div class="container-fluid-md">
                        <label for="txt_nome">Seu nome: *</label>
                        <input class="container-fluid box" type="text" name="seu_nome" id="txt_nome" required>
                    </div>
                </div>

                <br>
                <div class="row"></div>

                <div class="col-md">
                    <div class="container-fluid-md">
                        <label for="txt_enun">Enunciado: *</label>
                        <textarea name="editor" id="editor" cols="100" rows="100"></textarea>
                    </div>
                </div>

                <br>
                <div class="row"></div>

                <div class="col-md">
                    <div class="container-fluid-md">
                        <label for="txt_arq">Adicionar imagem?</label>
                        <br>
                        <input type="checkbox" id="myCheck" onclick="myFunction()">
                        <p id="text" style="display:none"><input type="file" name="arq" id="txt_arq"></p>
                    </div>
                </div>

                <br>
                <div class="row"></div>

                <div class="col-md">
                    <div class="container-fluid-md">

                    <label>Selecione a matéria *</label>
                            <br>
                            <div>
                              <select name="materia" id="matSel">
                                    <option value="">Selecione...</option>
                                    <option value="opQuímica">Química</option>
                                    <option value="opFísica">Física</option>
                                    <option value="opBiologia">Biologia</option>
                              </select>
                            </div>  

                            <br>

                            <div>
                                
                                <label>Assuntos da matéria relacionada: *</label>
                                <br> 

                                <select name="assuntos" id="assunMat">
                                    <option value="">Selecione...</option>
                                    <option value="uniMedidas">Unidades de Medidas</option>
                                    <option value="constMateria">Constituição da Matéria</option>
                                    <option value="subsQuimi">Substâncias Químicas</option>
                                    <option value="mistHeteroHomo">Misturas Heterogêneas e Homogêneas</option>
                                    <option value="sepaMist">Separação de Misturas</option>
                                    <option value="propriPeriod">Propriedades Periódicas</option>
                                    <option value="tabelaPeriod">Tabela Periódica</option>
                                    <option value="dalton">Dalton</option>
                                    <option value="thompson">Thompson</option>
                                    <option value="rutherford">Rutherford</option>
                                    <option value="bohr">Bohr</option>
                                    <option value="gasesNobres">Estabilidade dos Gases Nobres</option>
                                    <option value="ligIon">Ligação Iônica</option>
                                    <option value="ligCova">Ligação Covalente</option>
                                    <option value="LigMeta">Ligação Metálica</option>
                                    <option value="octeto">Regra do Octeto</option>
                                    <option value="ligInter">Ligações Intermoleculares</option>
                                    <option value="geoMolecular">Geometria Molecular</option>
                                    <option value="desinRadia">Desintegração Radiativa</option>
                                    <option value="meiavida">Decaimento e Meia-vida</option>
                                    <option value="massaAt">Massa Atômica (u)</option>
                                    <option value="massaMo">Massa Molecular (MM)</option>
                                    <option value="calor">Calor</option>
                                    <option value="endotermica">Reações Endotermicas</option>
                                    <option value="exotermica">Reações Exotermicas</option>
                                    <option value="esquilibrioQ">Equilibrio Químico</option>
                                    <option value="ph">Indicadores Ácido-Base e pH</option>
                                    <option value="carbono">Átomo de Carbono</option>
                                    <option value="cadeiasCarb">Cadeias Carbônicas</option>
                                    <option value="FuncOrgan">Funções Orgânicas</option>
                                    <option value="isoPLana">Isomeria Plana</option>
                                    <option value="isoEsp">Isomeria Espacial</option>
                                    
                                    <option value="">Selecione...</option>
                                    <option value="baseCinEs">Bases da Cinemática Escalar</option>
                                    <option value="movUni">Movimento Uniforme</option>
                                    <option value="movUniVar">Movimento Uniformemente Variado</option>
                                    <option value="movCircu">Movimentos Circulares</option>
                                    <option value="cinVetor">Cinemática Vetorial</option>
                                    <option value="dinam">Princípios da Dinâmica</option>
                                    <option value="newton">Leis de Newton</option>
                                    <option value="atrito">Atrito entre Sólidos</option>
                                    <option value="gravi">Gravitação</option>
                                    <option value="tangCentri">Resultantes Tangencial e Cetrípeta</option>
                                    <option value="trabalho">Trabalho e Potência</option>
                                    <option value="enerMeca">Energia Mecânica</option>
                                    <option value="qntdMov">Quantidade de Movimento</option>
                                    <option value="estaSoli">Estática dos Sólidos</option>
                                    <option value="estaFlui">Estática dos Fluídos</option>
                                    <option value="funndOpt">Fundamentos da Óptica</option>
                                    <option value="reflex">Reflexão da Luz</option>
                                    <option value="refra">Refração da Luz</option>
                                    <option value="lentes">Lentes Esféricas</option>
                                    <option value="instruOpt">Instrumentos Ópticos</option>
                                    <option value="mhs">MHS</option>
                                    <option value="acus">Acústica</option>
                                    <option value="ondas">Ondas</option>
                                    <option value="termoMet">Termometria</option>
                                    <option value="calori">Calorimetria</option>
                                    <option value="termoDi">Termodinâmica</option>
                                    <option value="eletroEs">Eletroestática</option>
                                    <option value="eletroDi">Eletrodinâmica</option>
                                    <option value="campoMag">Campo Magnético</option>
                                    <option value="forMag">Força Magnética</option>
                                    <option value="indMag">Indução Magnética</option>

                                    <option value="">Selecione...</option>
                                    <option value="ecologia">Ecologia</option>
                                    <option value="citologia">Citologia</option>
                                    <option value="citoplasma">Citoplasma</option>
                                    <option value="nucleo">Núcleo Celular</option>
                                    <option value="reproduz">Reprodução</option>
                                    <option value="genetica">Genética</option>
                                    <option value="embriologia">Embriologia</option>
                                    <option value="evolucao">Evolução</option>
                                    <option value="bioQui">Bioquímica</option>
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
                        <input type="radio" id="alt1" name="txt_alt" required><input class="container-fluid box" type="text" name="seu_nome" required><br>

                        <label for="alt2"></label>
                        <input type="radio" id="alt2" name="txt_alt" required><input class="container-fluid box" type="text" name="seu_nome" required><br>

                        <label for="alt3"></label>
                        <input type="radio" id="alt3" name="txt_alt" required><input class="container-fluid box" type="text" name="seu_nome" required><br>

                        <label for="alt4"></label>
                        <input type="radio" id="alt4" name="txt_alt" required><input class="container-fluid box" type="text" name="seu_nome" required><br>
                    </div>
                </div>

                <br>
                <div class="row"></div>

                <div class="col-md">
                    <div class="container-fluid-md">
                        <label>Dificuldade: *</label><br>

                        <input type="radio" value="#" id="altFa" name="txt_alt_Difi" required>
                        <label for="altFa">Fácil</label><br>

                        <input type="radio" value="#" id="altMe" name="txt_alt_Difi" required>
                        <label for="altMe">Médio</label><br>

                        <input type="radio" value="#" id="altDi" name="txt_alt_Difi" required>
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
<script src="/js/editor.js"></script>
<script>
    var editor = new CDEditor('#editor');
</script>
<script src="/js/scriptQuest.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@endsection