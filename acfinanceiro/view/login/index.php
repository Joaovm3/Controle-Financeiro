<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content='Uma startup focada no desenvolvimento de software de código aberto, o famoso "open source", no site você encontrará protótipos para realização de testes.' />
    <link rel="stylesheet" href="/app/acfinanceiro/controller/css/formularios.css" type="text/css" />
    <link rel="shortcut icon" href="/app/acfinanceiro/view/images/icons/favico.ico" type="image/x-icon" />
    <title>Login - Analista Code</title>

    <!-- CODELAB: Add iOS meta tags and icons -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="AC Financeiro" />
    <link rel="apple-touch-icon" href="/app/acfinanceiro/view/images/icons/152.png" />
    <meta name="theme-color" content="#000000" />
    <link rel="manifest" href="/app/acfinanceiro/controller/javascript/manifest.json" />
    <script>
        if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/app/acfinanceiro/sw.js').then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
            }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
            });
        });
        }
    </script>
</head>
</head>
<body>
    <!-- CONTAINER HEADER-->
    <?php include_once('../../../../app/acfinanceiro/controller/html/header.html');?>

    <!--CONTAINER FORMULÁRIO -->
    <main id="formulario" class="container">
        <div class="container txt">
            <h1>Login</h1>
        </div>
        <fieldset>
            <form id="form" action="/app/acfinanceiro/model/php/validation.php" method="post">
                <div class="container row paragrafos">
                    <p><a href="/app/acfinanceiro/view/login/registrar.php">Registrar</a></p>
                    <p><a href="/app/acfinanceiro/view/login/recover.php">Recuperar Senha</a></p>
                </div>
                <input type="email" name="email" id="email" placeholder="E-mail" title="email" maxlength="50" required />
                <div class="container mostrar-senha row">
                    <input class="pass" type="password" name="senha" id="senha" placeholder="Senha" 
                    title="senha" minlength="6" maxlength="10" required />
                    <span id="marcar" onclick="marcar()" class="container olhor">&#9744;</span>
                    <span id="desmarcar" onclick="desmarcar()" class="container olhor">&#9745;</span>
                </div>

                <!--CASO SENHA OU USUÁRIO ERRADOS-->
                <?php if(isset($_SESSION['nao_autenticado'])):?>
                    <div class="notification is-danger">
                        <p>Email ou senha inválidos.<br></p>
                    </div>
                <?php endif; unset($_SESSION['nao_autenticado']);?>
                <input class="submite" type="submit" value="entrar">
                <p>Analista Code</p>
            </form>
        </fieldset>
    </main>

    <!--CONTAINER RODAPÉ -->
    <?php include_once('../../../../app/acfinanceiro/controller/html/footer.html');?>
   
    <!--CONTAINER OLHOR SENHA -->
    <script>
        function marcar(){
            document.getElementById('senha').type = 'text';
            document.getElementById('desmarcar').style.display = 'flex';
            document.getElementById('marcar').style.display = 'none';
        }

        function desmarcar(){
            document.getElementById('senha').type = 'password';
            document.getElementById('marcar').style.display = 'flex';
            document.getElementById('desmarcar').style.display = 'none';
        }
    </script>

    <script data-ad-client="ca-pub-9749684125060902" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

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