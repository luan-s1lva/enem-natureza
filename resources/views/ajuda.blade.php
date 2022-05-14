@extends('layouts.telas')
@section('css','/css/ajudaStyle.css')
@section('content')
<main class="container-fluid">
    <header class="text-center bg-light text-dark">
        <h1>Sobre o Enem Natureza</h1>
    </header>
    <div class="voltar"><a href="/"><button>Voltar</button></a></div>

    <section class="text-dark bg-light text-center">
        <h2>O que é o Enem Natureza?</h2>
        <img class="img-fluid" src="/img/logoNatureza.jpeg" alt="Logo Enem Natureza">
        <p>O propósito geral do Enem é trazer a tona um novo metódo de estudo que não seja enfadonho
            e que ao mesmo tempo mantenha o estudante engajado e com vontade de estudar, por consequência,
            maximizando seu aprendizado para que, no futuro, este estudante possa obter uma boa nota na prova
            de <strong>Ciências da Natureza (Química, Física e Biologia)</strong> do ENEM ou em trabalhos escolares.</p>
    </section>

    <section class="text-dark bg-light text-center">
        <h2>Como se Cadastrar:</h2>
        <p>Para realizar seu cadastro nesta platafoma, basta clicar no botão <a href="/cadastro"><strong>Cadastre-se</strong></a>,
            após preencher os dados de acesso volte a tela de Login e confirme sua entrada. <br>
            <strong>OBS: Se for um professor, terá de esperar algumas horas até provarmos a veracidade dos dados de cadastro.</strong>
        </p>
    </section>

    <section class="text-dark bg-light text-center">
        <h2>Aos Estudantes:</h2>
        <img class="img-fluid btnImg" src="/img/btnsAlunos.png" alt="Botões dos Alunos">
        <p>Os Estudantes cadastrados poderão escolher dentre dois modos de jogo: </p>
        <p class="text-left"><strong> O Aleatório:</strong> Entrega um Quiz de 10 perguntas com disciplinas e temas aleatórios.</p>
        <p class="text-left"><strong>O Dividido por Assuntos:</strong> Dá ao estudante a capacidade de escolher os temas e a disciplina que ele quer estudar no momento,
            ou seja, escolher as perguntas que irão aparecer no Quiz.</p>
        <p>Os estudantes ainda contam com um sistema de ranking para exibir os melhores jogadores da plataforma
            a partir de sua pontuação dada ao responder corretamente uma pergunta.<br> Por fim, há um histórico de partidas visível
            para análise de desempenho do estudante conforme utiliza o Enem Natureza em seus estudos práticos. </p>
    </section>

    <section class="text-dark bg-light text-center">
        <h2 class="text-center">Aos Professores:</h2>
        <img class="img-fluid btnImg" src="/img/btnsProfessor.png" alt="Botões dos Professores">
        <p>Para manter o Enem Natureza ativo e com uma variedade de perguntas,
            os professores podem cadastrar perguntas autorais ou de provas/livros anteriores, assim contribuindo mais com os alunos. <br>
            Além de criar perguntas, o professor também pode rêve-las, editá-las e ver as perguntas que outros professores cadastraram.</p>
    </section>

</main>
@endsection