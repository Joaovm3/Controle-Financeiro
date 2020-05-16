<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content='...' />
    <meta name="theme-color" content="#000000" />
    <meta name="robots" content="noindex" />
    <link rel="shortcut icon" href="/app/acfinanceiro/view/images/icons/favico.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/app/acfinanceiro/controller/css/formularios.css" type="text/css" />
    <title>Perguntas Analista Code</title>
</head>
<body>
    <!-- CONTAINER HEADER-->
    <?php include_once('../../../../app/acfinanceiro/controller/html/header.html');?>

    <!--CONTAINER FORMULÁRIO -->
    <main id="formulario" class="container">
        <div class="container txt">
            <h1>Perguntas ou Dúvidas</h1>
        </div>
        <fieldset>
            <form id="form" action="/app/acfinanceiro/controller/php/perguntas.php" method="post">
                <input type="txt" name="nome" id="nome" placeholder="Nome" title="nome" maxlength="20" required />
                <input type="email" name="email" id="email" placeholder="E-mail" title="email" maxlength="50" required />
                <textarea name="msg" id="msg" cols="30" rows="1" placeholder="Mensagem"></textarea>
                <input class="submite" type="submit" value="enviar">
                <p>Analista Code</p>
            </form>
        </fieldset>
    </main>

    <!--CONTAINER RODAPÉ -->
    <?php include_once('../../../../app/acfinanceiro/controller/html/footer.html');?>

    <script>
        var form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
        e.preventDefault(); // <--- isto pára o envio da form
        var url = this.action; // <--- o url que processa a form
        var formData = new FormData(this); // <--- os dados da form
        var ajax = new XMLHttpRequest();
        ajax.open("POST", url, true);
        ajax.onload = function() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById('nome').value='';
                document.getElementById('email').value='';
                document.getElementById('msg').value='';
                }
            };
            xhttp.open("GET", true);
            xhttp.send();
                };
        ajax.send(formData);
        });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153427274-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-153427274-1');
    </script>
</body>
</html>