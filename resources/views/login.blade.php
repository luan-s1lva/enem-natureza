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
        <div class="container-fluid">
            <div class="msg row text-center text-danger">
                @if(session('msg'))
                    <p class="msg">{{session('msg')}}</p> 
                @endif    
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-2 row-cols-lg-2 row-cols-md-2 container" id="centro">
            <div class="col">
                <img src="/img/logoNatureza.jpeg" class="img-fluid" alt="Logo do ENEM NATUREZA">
            </div>

            <div class="col container">

                <h1 class="text-center text-light">
                    LOGIN:
                </h1>

                <form action="/login/check" method="POST" class="container">
                @csrf
                    <div>
                        <br>
                        <label for="txt_email">E-mail: </label>
                        <br>
                        <input type="email" class="campo container" id="txt_email" name="email" placeholder="Ex.: aluno@gmail.com">
                    </div>

                    <div>
                        <br>
                        <label for="txt_password">Senha:</label>
                        <br>
                        <input type="password" class="campo container" id="txt_password" name="password" placeholder="Ex:user123">
                    </div>

                    <div class="text-center">
                        <br>

                        <button class="botao" type="submit">Logar</button>
                        <button class="botao"><a href="/cadastro">Cadastrar</a></button>

                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>