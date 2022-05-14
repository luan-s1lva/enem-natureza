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

    <main>

        <div class="logo">
            <div class="text-center">
                <img src="/img/logoNatureza.jpeg" class="img-fluid" alt="Logo do ENEM NATUREZA">
            </div>

        </div>
        <h1 class="text-center text-light">
            CADASTRO:
        </h1>
        <div class="container">
            <div class="msg" style="margin:10px auto; width:40%;">
                @if(session('msg2'))
                <p class="msg alert-danger p-3">{{session('msg2')}}</p>
                @endif
            </div>
        </div>
        <form action="/student/store" id="cadastro" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="txt_nome">Nome: </label>
                <input type="text" class="campo form-control" id="txt_nome" name="name" placeholder="Digite seu nome" required>
            </div>

            <div class="form-group">
                <label for="txt_org">Instituição: </label>
                <input type="text" class="campo form-control" id="txt_org" name="org" placeholder="Digite o nome da sua instituição" required>
            </div>

            <!--div class="form-group">
                <label for="file_img">Foto de Perfil: </label>
                <input type="file" class="form-control-file" id="file_img" name="img" required>
            </div>-->

            <div class="form-group">
                <label for="txt_email">E-mail: </label>
                <input type="email" class="campo form-control" id="txt_email" name="email" placeholder="Digite seu email" required>
            </div>

            <div class="form-group">
                <label for="txt_password">Senha:</label>
                <input type="password" class="campo form-control" id="txt_password" name="password" placeholder="Digite sua senha" required>
            </div>

            <div class="form-group">
                <label for="date_Nasci">Data de nascimento:</label>
                <input type="date" class="campo form-control" id="date_Nasci" name="dataNas" required>
            </div>

            <div onchange="trocar();">
                <div>
                    <input type="radio" name="radClasse" id="isProfessor" value="1" required>
                    <label class="radioLabel" for="isProfessor">Sou Professor</label>
                </div>

                <div class="form-group" id="m1" hidden>
                    <label for="txt_lattes">Lattes:</label>
                    <input id="check_professor" type="text" class="campo form-control" id="txt_lattes" name="lattes" placeholder="Informe seu lattes">
                </div>

                <div>
                    <input type="radio" name="radClasse" id="isEstudante" value="2">
                    <label class="radioLabel" for="isEstudante">Sou Estudante</label>
                </div>

                <div class="form-group" id="m2" hidden>
                    <label for="sel_serie">Série:</label>

                    <select id="check_aluno" name="serie" id="sel_serie" class="campo custom-select">
                        <option value="">Selecione...</option>
                        <option value="1">1° ano</option>
                        <option value="2">2° ano</option>
                        <option value="3">3° ano</option>
                    </select>
                </div>

            </div>


            <div class="btnSpace">
                <button class="botao btn btn-primary"><a href="/">Voltar</a></button>
            </div>
            <div class="btnSpace">
                <input class="botao btn btn-primary" type="submit" value="Cadastrar">

            </div>

        </form>


    </main>
</body>

</html>