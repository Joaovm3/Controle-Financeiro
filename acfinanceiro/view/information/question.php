<?php
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
    session_start();
    if (!$_SESSION['email']) {
        header('Location: /app/acfinanceiro/view/login/');
        exit();
    }
    include_once('../../controller/php/consulta_ano.php');
?>
<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="..." />
    <meta name="robots" content="noindex" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="/app/acfinanceiro/view/icons/favico.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/app/acfinanceiro/controller/css/current.css" type="text/css" />
    <title>Dúvidas</title>
    <style>
        #global .valor { padding: 3%;}
        input, textarea {
            margin-bottom:5px;
            padding:5px;
            border-radius:5px;
            border: 1px solid #9FA9BC;
        }
        .submite {
            color:#fff;
            background: rgb(0, 0, 0);
            background: linear-gradient(180deg, rgb(0, 0, 0) 50%, rgb(0, 17, 29) 100%);
        }
    </style>
</head>
<body>
    <!-- CONTAINER BARRA MENU E RODAPÉ-->
    <?php include_once('../../controller/html/header_footer.html');?>

    <!-- CONTAINER GLOBAL INFORMATIONS -->
    <main id="global" class="container">
        <div class="container valor">
            <h1>Dúvidas</h1>
            <p>Este é apenas um protótipo de apresentação, dúvida, sugestão ou erro, envie-nos uma mensagem.</p>
        </div>

        <div class="container informations">
            <fieldset>
                <form action="/app/acfinanceiro/controller/php/formulario.php" method="post">
                    <input type="text" name="nome" id="nome" title="nome" placeholder="Seu nome" required />
                    <input type="email" name="email" id="email" title="email" placeholder="Seu email" required />
                    <textarea title="app" name="msg" id="msg" cols="30" rows="5" placeholder="mensagem"></textarea>
                    <input title="app" class="submite" type="submit" value="enviar">
                </form>
            </fieldset>
        </div>
    </main>

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