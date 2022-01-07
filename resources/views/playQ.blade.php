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
                <img src="/img/timer_quimica.gif" alt="Cronometro" style="height:120px;">
                <p class="text-light text-center" style="font-size:2em; display:inline;">2:30</p>
            </div>

                <!--TITULO-->
            <h2 class="text-light text-center container-fluid">Química: Nível Difícil</h2>

            <div class="text-center container">
                <img src="/img/heart.gif" alt="imagem de um coração" style="height:80px;">
                <img src="/img/heart.gif" alt="imagem de um coração" style="height:80px;">
                <img src="/img/heart.gif" alt="imagem de um coração" style="height:80px;">
            </div>

        </header>

            <!--Pergunta-->
        <div class="container text-justify" style="padding: 26px; background-color: white; border-radius: 20px; margin-top:25px; margin-bottom:25px;">
        
         <p>{!! $perguntas->textQuest !!}</p>
       
        </div>

            <!--Alternativas-->
        <div class="row row-cols-2 " style="margin:auto;">

        @foreach($perguntas->alternatives()->get() as $alt)
            <button type="button" class="col">{{ $alt->texto }}</button>
        @endforeach

        </div>
    </main>


    <footer class="container-fluid text-center">
        <p>Todos os direitos reservados <span class="copyleft font-weight-bold">&copy; ENEM NATUREZA </span> </p>
        <div style="margin-bottom:30px;">
            <p class="font-weight-bold" style="margin-bottom:0;">Contato</p>
            <a href="mailto:enem.naturezaadm@gmail.com">enem.naturezaadm@gmail.com</a>
        </div>
    </footer>
</body>

</html>
