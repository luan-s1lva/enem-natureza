<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="/img/logo_icon.png" type="image/x-icon" />
    <title>Enem Natureza</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/matchStyle.css">
</head>

<body>
    <header class="container text-center">
        <h1>Histórico de Partidas</h1>
    </header>
    <div class="voltar"><a href="/"><button>Voltar</button></a></div>
    <main>
        
        <div style="width:60%; margin:auto;">

            <canvas class="line-chart"></canvas>

        </div>

    </main>

    <div class="footerBottom">
        <footer class="text-center">
            <div class="container">
                <p>Todos os direitos reservados <span class="copyleft font-weight-bold">&copy; ENEM NATUREZA </span> </p>
                <p class="font-weight-bold" style="margin-bottom:0;">Contato</p>
                <a href="mailto:enem.naturezaadm@gmail.com">enem.naturezaadm@gmail.com</a>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/match.js"></script>

    <script>
        $.ajax({
            type: "GET",
            url: "/historico/listar/partidas",
            datatype: "json"
        })
    </script>
</body>

</html>