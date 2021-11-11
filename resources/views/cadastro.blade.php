<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="/img/logo_icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/indexStyle.css">
    <title>Enem Natureza</title>
</head>

<body class="container">

    <main class="container">

        <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-2 row-cols-lg-2 row-cols-xs-2  row-cols-md-2 container" id="centro">
            <div class="col">
                <img src="/img/logoNatureza.jpeg" class="img-fluid" alt="Logo do ENEM NATUREZA">
            </div>

            <div class="col container">

                <h1 class="text-center text-light">
                    CADASTRO:
                </h1>

                <form action="" method="POST" class="container">
                    <div>
                        <br>
                        <label for="txt_nome">Nome: </label>
                        <br>
                        <input type="text" class="campo container" id="txt_nome" name="nome" placeholder="Ex: Fulano Beltrano Silcrano">
                    </div>

                    <div>
                        <br>
                        <label for="txt_email">E-mail: </label>
                        <br>
                        <input type="email" class="campo container" id="txt_email" name="e-mail" placeholder="Ex: aluno@gmail.com">
                    </div>

                    <div>
                        <br>
                        <label for="txt_password">Senha:</label>
                        <br>
                        <input type="password" class="campo container" id="txt_password" name="senha" placeholder="Ex:user123">
                    </div>

                    <div class="container">
                        <input type="radio" name="radClasse" id="isProfessor">
                        <label class="radio" for="isProfessor">Sou Professor</label> <br>
                        <input type="radio" name="radClasse" id="isEstudante">
                        <label class="radio" for="isEstudante">Sou Estudante</label>
                    </div>

                    <div class="text-center">
                        <br>
                        <input class="botao" type="submit" value="Voltar">

                        <input class="botao" type="submit" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>