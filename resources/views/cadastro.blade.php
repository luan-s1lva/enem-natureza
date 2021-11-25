<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="/img/logo_icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/cadastroStyle.css">
    <script src="/js/scriptCadastro.js" defer></script>
    <title>Enem Natureza</title>
</head>

<body class="container">

    <main class="container-fluid">

        <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-2 row-cols-lg-2 row-cols-xs-2  row-cols-md-2 container" id="centro">
            <div class="col">
                <img src="/img/logoNatureza.jpeg" class="img-fluid container-fluid" alt="Logo do ENEM NATUREZA">
            </div>

            <div class="col container">

                <h1 class="text-center text-light">
                    CADASTRO:
                </h1>

                <form action="/" method="POST" class="container">
                    @csrf
                    <div>
                        <br>
                        <label for="txt_nome">Nome: </label>
                        <br>
                        <input type="text" class="campo container" id="txt_nome" name="name" placeholder="Digite seu nome">
                    </div>
                    <div>
                        <br>
                        <label for="txt_org">Instituição: </label>
                        <br>
                        <input type="text" class="campo container" id="txt_org" name="org" placeholder="Digite o nome da sua instituição">
                    </div>
                    <div>
                        <br>
                        <label for="txt_email">E-mail: </label>
                        <br>
                        <input type="email" class="campo container" id="txt_email" name="email" placeholder="Digite seu email">
                    </div>

                    <div>
                        <br>
                        <label for="txt_password">Senha:</label>
                        <br>
                        <input type="password" class="campo container" id="txt_password" name="password" placeholder="Digite sua senha">
                    </div>

                        <div class="container" onchange="trocar();">

                        <input type="radio" name="serie" id="isProfessor" value="1">
                        <label class="radio" for="isProfessor">Sou Professor</label>
                        <div class="container" id="m1" hidden>
                            <label for="txt_lattes">Lattes:</label>
                            <br>
                            <input type="text" class="campo container" id="txt_lattes" name="lattes" placeholder="Informe seu lattes">
                        </div>
                        <br>
                        <input type="radio" name="serie" id="isEstudante" value="2">
                        <label class="radio" for="isEstudante">Sou Estudante</label>

                        <div class="container" id="m2" hidden>
                            <label for="numb_idade">Idade:</label>
                            <br>
                            <input type="number" class="campo container" id="numb_idade" name="age" placeholder="Informe sua idade">

                            <label for="txt_serie">Série:</label>
                            <br>
                            <input type="number" class="campo container" id="txt_serie" name="serie" placeholder="Informe sua série">


                        </div>
                    </div>


                    <div class="botoes text-center">
                        <input class="botao" type="submit" value="Voltar">

                        <input class="botao" type="submit" value="Cadastrar">
                    </div>

                </form>
            </div>
        </div>
    </main>
</body>

</html>