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

<body class="container-fluid">
    <main class="container">
        <div class="msg row alert-success" style="margin:10px auto; width:40%;">
            @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>
            @endif
        </div>
        <div class="msg row alert-danger" style="margin:10px auto; width:40%;">
            @if(session('msg2'))
            <p class="msg">{{session('msg2')}}</p>
            @endif
        </div>

        <div style="margin-bottom:100px;">
            <a style="float:right" href="/ajuda"><img src="/img/confuso.png" alt="Imagem retirada do Flaticon" style="width: 50px;"></a>
        </div>
<div class="text-center"></div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-2 row-cols-lg-2 container" style="margin:auto;">

            <div class="col">
                <img src="/img/logoNatureza.jpeg" class="img-fluid" alt="Logo do ENEM NATUREZA">
            </div>

            <div class="col container">

                <h1 class="text-center text-light">
                    LOGIN:
                </h1>

                <form action="/login/check" method="POST" class="container">
                    @csrf
                    <div class="form-group">
                       
                        <label for="txt_email">E-mail: </label>
                        <input type="email" class="campo container" id="txt_email" name="email" placeholder="Digite seu email">
                    </div>

                    <div class="form-group">
                        <label for="txt_password">Senha:</label>
                        <input style="display:inline" type="password" class="campo container" id="txt_password" name="password" placeholder="Digite sua senha">
                        <img id="senhaImg" src="/img/mostrarSenha.png" class="img-fluid" alt="Mostrar Senha">
                        <input type="button" id="showPassword" value="Mostrar Senha" class="button" />
                    </div>

                    <div class="text-center">

                        <button class="botao" type="submit">Logar</button>
                        <button class="botao" type="button"><a href="/cadastro">Cadastrar</a></button>

                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="/js/scriptLogin.js"></script>
</body>

</html>