<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="/img/logo_icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Enem Natureza</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="@yield('css')">
</head>

<body>
    @yield('content')
    <footer class="container-fluid text-center">
        <p>Todos os direitos reservados <span class="copyleft font-weight-bold">&copy; ENEM NATUREZA </span> </p>

        <div style="margin-bottom:30px;">
            <p class="font-weight-bold" style="margin-bottom:0;">Contato</p>
            <a href="mailto:enem.naturezaadm@gmail.com">enem.naturezaadm@gmail.com</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="/js/scriptQuest.js"></script>
    <script src="/js/editor/ckeditor.js"></script>
</body>
<script>
    CKEDITOR.replace('editor1');
</script>

<script>
    $(function(){
        $("#assuntos").hide();

        $("#matSel").on('change', function(){
            var select_default = $("<option>").val("").html("Selecione...");
            if ($(this).val() === '') {
                $("#assuntos").hide();
            } else {
                var select = $("select[name=tema_id]");
                select.empty();
                select.append(select_default);
                $.ajax({
                    url : "/temas/listar/" + $(this).val(),
                    success : function(data) {
                        data.forEach(function(obj) {
                            select.append($("<option>").val(obj.id).html(obj.theme));
                        });
                        $("#assuntos").show();
                    },
                    type : 'GET',
                    dataType : 'json'
                });
            }
        });
    });
    //autocomplete(document.getElementById("myInput"), assuntos);
</script>
</html>