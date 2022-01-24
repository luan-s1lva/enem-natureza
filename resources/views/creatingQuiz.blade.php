@extends('layouts.telas')
@section('css', '/css/assuntosStyle.css')
@section('content')
<header class="container text-center">
    <h1>Escolha o tema das perguntas para iniciar seu Quiz:</h1>
</header>
<main class="container">

    <div class="disciplinas container row row-cols-3">
        <button id="quimica" onclick="exibirQuimica()"><img class="icons" src="/img/timer_química.gif" alt="Gif: Temporizador de Química">Química</button>
        <button id="fisica" onclick="exibirFisica()"><img class="icons" src="/img/timer_física.gif" alt="Gif: Temporizador de Física">Física</button>
        <button id="biologia" onclick="exibirBiologia()"><img class="icons" src="/img/timer_biologia.gif" alt="Gif: Temporizador de Biologia">Biologia</button>
    </div>

    <form action="" method="POST">
        <div id="assuntosQ" class="assuntosQ container row row-cols-1">

            <div class="col">
                <div onclick="exibirCon()" class="drop">
                    <p>Conceitos Fundamentais<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoCon" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_uniMed" id="uniMed">
                    <label for="uniMed">Unidades de Medidas</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_consMat" id="constiMat">
                    <label for="constiMat">Constituição da Matéria</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_subsQui" id="subsQui">
                    <label for="subsQui">Substâncias Químicas</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirMis()" class="drop">
                    <p>Misturas<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoMis" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_tiposMis" id="tiposMis">
                    <label for="tiposMis">Misturas Heterogêneas e Homogêneas</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_sepMis" id="sepMis">
                    <label for="sepMis">Separação de Misturas</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirTab()" class="drop">
                    <p>Tabela Periódica<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoTab" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_propPeri" id="propPeri">
                    <label for="propPeri">Propriedades Periódicas</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_tabela" id="tabela">
                    <label for="tabela">Tabela Periódica</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirMod()" class="drop">
                    <p>Modelos Atômicos<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoMod" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_dalton" id="dalton">
                    <label for="dalton">Dalton</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_thomp" id="thomp">
                    <label for="thomp">Thompson</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_ruther" id="ruther">
                    <label for="ruther">Rutherford</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_bohr" id="bohr">
                    <label for="bohr">Bohr</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirLigQ()" class="drop">
                    <p>Ligações Químicas<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoLigQ" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_gases" id="gases">
                    <label for="gases">Estabilidade dos Gases Nobres</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_ligIon" id="ligIon">
                    <label for="ligIon">Ligação Iônica</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_ligCov" id="ligCov">
                    <label for="ligCov">Ligação Covalente</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_ligMet" id="ligMet">
                    <label for="ligMet">Ligação Metálica</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_octeto" id="octeto">
                    <label for="octeto">Regra do Octeto</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_ligInter" id="ligInter">
                    <label for="ligInter">Ligações Intermoleculares</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_geoMole" id="geoMole">
                    <label for="geoMole">Geometria Molecular</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirRadio()" class="drop">
                    <p>Radioatividade<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoRadio" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_desRad" id="desRad">
                    <label for="desRad">Desintegração Radiativa</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_meiaVida" id="meiaVida">
                    <label for="meiaVida">Decaimento e Meia-vida</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirEsteq()" class="drop">
                    <p>Estequiometria<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoEsteq" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_massaU" id="massaU">
                    <label for="massaU">Massa Atômica (u)</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_massaM" id="massaM">
                    <label for="massaM">Massa Molecular (MM)</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirTermQ()" class="drop">
                    <p>Termoquímica<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoTermQ" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_calor" id="calor">
                    <label for="calor">Calor</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_reaEndo" id="reaEndo">
                    <label for="reaEndo">Reações Endotermicas</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_reaExo" id="reaExo">
                    <label for="reaExo">Reações Exotermicas</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirEqui()" class="drop">
                    <p>Equilibrio Químico<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>

            <div id="conteudoEquiQ" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_equilibrio" id="equilibrio">
                    <label for="equilibrio">Equilibrio</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_indPH" id="indPH">
                    <label for="indPH">Indicadores Ácido-Base e pH</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirOrgan()" class="drop">
                    <p>Química Orgânica<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoOrgan" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_atomoCarbo" id="atomoCarbo">
                    <label for="atomoCarbo">Átomo de Carbono</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_cadCarb" id="cadCarb">
                    <label for="cadCarb">Cadeias Carbônicas</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_funcOrg" id="funcOrg">
                    <label for="funcOrg">Funções Orgânicas</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirIso()" class="drop">
                    <p>Isomeria<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoIso" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_isoPlana" id="isoPlana">
                    <label for="isoPlana">Plana</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_isoEspacial" id="isoEspacial">
                    <label for="isoEspacial">Espacial</label>
                </div>
            </div>

            <button type="submit" style="float:right;">Iniciar Quiz!</button>

        </div>
        <div id="assuntosF" class="assuntosF container row row-cols-1">


            <div class="col">
                <div onclick="exibirCin()" class="drop">
                    <p>Cinemática <img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoCin" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_bce" id="bce">
                    <label for="bce">Bases da Cinemática Escalar</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_mu" id="mu">
                    <label for="mu">Movimento Uniforme</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_muv" id="muv">
                    <label for="muv">Movimento Uniformemente Variado</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_mc" id="mc">
                    <label for="mc">Movimentos Circulares</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_cv" id="cv">
                    <label for="cv">Cinemática Vetorial</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirDin()" class="drop">
                    <p>Dinâmica <img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoDin" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_princ" id="principios">
                    <label for="principios">Princípios da Dinâmica</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_newton" id="newton">
                    <label for="newton">Leis de Newton</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_atri" id="atrito">
                    <label for="atrito">Atrito entre Sólidos</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_gravi" id="gravit">
                    <label for="gravit">Gravitação</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_resuTC" id="resuTC">
                    <label for="resuTC">Resultantes Tangencial e Cetrípeta</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_trabalho" id="trabalho">
                    <label for="trabalho">Trabalho e Potência</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_energiaM" id="energiaM">
                    <label for="energiaM">Energia Mecânica</label>

                </div>
                <div class="col">
                    <input type="checkbox" name="check_CV" id="qntdM">
                    <label for="qntdM">Quantidade de Movimento</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirEs()" class="drop">
                    <p>Estática <img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>

            <div id="conteudoEs" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_es" id="es">
                    <label for="es">Estática dos Sólidos</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_ef" id="ef">
                    <label for="ef">Estáticas dos Fluidos</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirOp()" class="drop">
                    <p>Óptica <img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>

            <div id="conteudoOp" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_fundOpt" id="fundOpt">
                    <label for="fundOpt">Fundamentos da Óptica</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_reflexLuz" id="reflexLuz">
                    <label for="reflexLuz">Reflexão da Luz</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_refrLuz" id="refrLuz">
                    <label for="refrLuz">Refração da Luz</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_lentesEs" id="lentesEs">
                    <label for="lentesEs">Lentes Esféricas</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_insOpt" id="insOpt">
                    <label for="insOpt">Instrumentos Ópticos</label>
                </div>
            </div>


            <div class="col">
                <div onclick="exibirOnd()" class="drop">
                    <p>Ondulatória<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoOnd" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_mhs" id="mhs">
                    <label for="mhs">MHS</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_acus" id="acus">
                    <label for="acus">Acústica</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_ondas" id="ondas">
                    <label for="ondas">Ondas</label>
                </div>
            </div>


            <div class="col">
                <div onclick="exibirTerm()" class="drop">
                    <p>Termologia<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>

            <div id="conteudoTerm" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_termoM" id="termoM">
                    <label for="termoM">Termometria</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_calori" id="calori">
                    <label for="calori">Calorimetria</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_termoD" id="termoD">
                    <label for="termoD">Termodinâmica</label>
                </div>
            </div>


            <div class="col">
                <div onclick="exibirElet()" class="drop">
                    <p>Eletromagnetismo <img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>

            <div id="conteudoElet" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_eletroEs" id="eletroEs">
                    <label for="eletroEs">Eletroestática</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_eletroDi" id="eletroDi">
                    <label for="eletroDi">Eletrodinâmica</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_campoM" id="campoM">
                    <label for="campoM">Campo Magnético</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_forcaM" id="forcaM">
                    <label for="forcaM">Força Magnética</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="check_indM" id="indM">
                    <label for="indM">Indução Magnética</label>
                </div>
            </div>

            <button type="submit" style="float:right;">Iniciar Quiz!</button>
        </div>

        <div id="assuntosB" class="assuntosB container row row-cols-1">

            <div class="col">
                <div onclick="exibirEco()" class="drop">
                    <p>Ecologia<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoEco" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_ecologia" id="ecologia">
                    <label for="ecologia">Ecologia</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirCito()" class="drop">
                    <p>Citologia<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoCito" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_Citologia" id="citologia">
                    <label for="citologia">Citologia</label>
                </div>
            </div>
            <div class="col">
                <div onclick="exibirCitoplas()" class="drop">
                    <p>Citoplasma<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoCitoplas" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_Citoplasma" id="citoplasma">
                    <label for="citoplasma">Citoplasma</label>
                </div>
            </div>
            <div class="col">
                <div onclick="exibirNucleo()" class="drop">
                    <p>Núcleo Celular<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoNucleo" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_Nucleo" id="nucleo">
                    <label for="nucleo">Núcleo Celular</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirRepro()" class="drop">
                    <p>Reprodução<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoRepro" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_repro" id="repro">
                    <label for="repro">Reprodução</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirGen()" class="drop">
                    <p>Genetica<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoGen" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_Genetica" id="genetica">
                    <label for="genetica">Genética</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirEmbrio()" class="drop">
                    <p>Embriologia<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoEmbrio" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_Embrio" id="embrio">
                    <label for="embrio">Embriologia</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirEvo()" class="drop">
                    <p>Evolução<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoEvo" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_Evolucao" id="evolucao">
                    <label for="evolucao">Evolução</label>
                </div>
            </div>

            <div class="col">
                <div onclick="exibirBioQ()" class="drop">
                    <p>Bioquímica<img class="dropIcon" src="/img/drop.png" alt="dropdown icon"></p>
                </div>
            </div>
            <div id="conteudoBioQ" class="conteudo">
                <div class="col">
                    <input type="checkbox" name="check_Bioquimica" id="bioquimica">
                    <label for="bioquimica">Bioquímica</label>
                </div>
            </div>
            <button type="submit" style="float:right;">Iniciar Quiz!</button>
        </div>
    </form>
</main>

<script src="/js/scriptAssunto.js"></script>
@endsection