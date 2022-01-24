<!DOCTYPE html>
<html lang="pt">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="/img/logo_icon.png" type="image/x-icon" />
    <title>Enem Natureza</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/jogoStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <main class="container">

        <header class="row row-cols-xs-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-3">

            <div class="text-center container">
                <img id="timer_img" src="/img/timer_química.gif" alt="Cronometro" style="height:120px;">
                <p id="cronometro" class="text-light text-center" style="font-size:2em; display:inline;">Aguarde...</p>
            </div>

                <!--TITULO-->
            <h2 class="text-light text-center container-fluid"><span id="disciplina">Aguarde...</span>: Nível <span id="nivel">Aguarde...</span></h2>

            <div class="text-center container" id="vidas">
                <img src="/img/heart.gif" alt="imagem de um coração" style="height:80px;">
                <img src="/img/heart.gif" alt="imagem de um coração" style="height:80px;">
                <img src="/img/heart.gif" alt="imagem de um coração" style="height:80px;">
            </div>

        </header>

            <!--Pergunta-->
        <div class="container text-justify" style="padding: 26px; background-color: white; border-radius: 20px; margin-top:25px; margin-bottom:25px;">
        
         <p id="titulo">Aguarde...</p>
       
        </div>

            <!--Alternativas-->
        <div class="row row-cols-2 " style="margin:auto;">
            <button type="button" data-pos="0" class="col resposta">Aguarde...</button>
            <button type="button" data-pos="1" class="col resposta">Aguarde...</button>
            <button type="button" data-pos="2" class="col resposta">Aguarde...</button>
            <button type="button" data-pos="3" class="col resposta">Aguarde...</button>
        </div>
    </main>


    <footer class="container-fluid text-center">
        <p>Todos os direitos reservados <span class="copyleft font-weight-bold">&copy; ENEM NATUREZA </span> </p>
        <div style="margin-bottom:30px;">
            <p class="font-weight-bold" style="margin-bottom:0;">Contato</p>
            <a href="mailto:enem.naturezaadm@gmail.com">enem.naturezaadm@gmail.com</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="/js/scriptPlay.js"></script>
</body>

</html>
