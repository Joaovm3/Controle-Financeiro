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
    <title>Recuperar Senha - Analista Code</title>
</head>
<body>
    <!-- CONTAINER HEADER-->
    <?php include_once('../../../../app/acfinanceiro/controller/html/header.html');?>

    <!--CONTAINER FORMULÁRIO -->
    <main id="formulario" class="container">
        <div class="container txt">
            <h1>Recuperar Senha</h1>
        </div>
        <fieldset>
            <form id="form" action="/app/acfinanceiro/model/php/register_token.php" method="post">
                <div class="container row paragrafos">
                    <p><a href="/app/acfinanceiro/view/login/">Login</a></p>
                    <p><a href="/app/acfinanceiro/view/login/registrar.php">Registrar</a></p>
                </div>
                <input type="email" name="email" id="email" placeholder="E-mail" title="email" maxlength="50" required />
                <!--Email OK-->
                <?php if(isset($_SESSION['ok_email'])):?>
                    <div class="notification is-danger">
                        <p>Senha enviar para seu email</p>
                    </div>
                <?php endif; unset($_SESSION['ok_email']);?>

                <!--CASO EMAIL JÁ ESTEJA REGISTRADO-->
                <?php if(isset($_SESSION['nao_autenticado'])):?>
                    <div class="notification is-danger">
                        <p>Ops! email não está registrado</p>
                    </div>
                <?php endif; unset($_SESSION['nao_autenticado']);?>

                <!--Senha Error-->
                <?php if(isset($_SESSION['senha_not'])):?>
                    <div class="notification is-danger">
                        <p>Ops! esse token está vencido...</p>
                    </div>
                <?php endif; unset($_SESSION['senha_not']);?>
                
                <input class="submite" type="submit" value="recuperar">
                <p>Analista Code</p>
            </form>
        </fieldset>
    </main>

    <!--CONTAINER RODAPÉ -->
    <?php include_once('../../../../app/acfinanceiro/controller/html/footer.html');?>

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