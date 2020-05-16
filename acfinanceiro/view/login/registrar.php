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
    <title>Registrar Usuário Analista Code</title>
</head>
<body>
    <!-- CONTAINER HEADER-->
    <?php include_once('../../../../app/acfinanceiro/controller/html/header.html');?>

    <!--CONTAINER FORMULÁRIO -->
    <main id="formulario" class="container">
        <div class="container txt">
            <h1>Registrar</h1>
        </div>
        <fieldset>
            <form id="form" action="/app/acfinanceiro/model/php/register_user.php" method="post">
                <div class="container row paragrafos">
                    <p><a href="/app/acfinanceiro/view/login/">Login</a></p>
                    <p class="right"><a href="/app/acfinanceiro/view/login/recover.php">Recuperar Senha</a></p>
                </div>
                <input type="txt" name="nome" id="nome" placeholder="Nome" title="nome" maxlength="20" required />
                <input type="email" name="email" id="email" placeholder="E-mail" title="email" maxlength="50" required />
                <div class="container mostrar-senha row">
                    <input class="pass" type="password" name="senha" id="senha" placeholder="Senha" 
                    title="senha" minlength="6" maxlength="10" required />
                    <span id="marcar" onclick="marcar()" class="container olhor">&#9744;</span>
                    <span id="desmarcar" onclick="desmarcar()" class="container olhor">&#9745;</span>
                </div>
                <!--CASO EMAIL JÁ ESTEJA REGISTRADO-->
                <?php if(isset($_SESSION['email-cadastrado'])):?>
                    <div class="notification is-danger">
                        <p>Ops! email já está registrado</p>
                    </div>
                <?php endif; unset($_SESSION['email-cadastrado']);?>
                <input class="submite" type="submit" value="registrar">
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