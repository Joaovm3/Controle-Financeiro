<?php
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
    session_start();
    if (!$_SESSION['email']) {
        header('Location: /app/acfinanceiro/view/login/');
        exit();
    }
    include_once('../../controller/php/consulta_current_anual.php');
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
    <title>AC Financeiro</title>
</head>
<body>
    <!-- CONTAINER BARRA MENU E RODAPÉ-->
    <?php include_once('../../controller/html/header_footer.html');?>

    <!-- CONTAINER GLOBAL INFORMATIONS -->
    <main id="global" class="container">
 
            <div class="container valor">
                <?php  
                    echo '
                        <h1>R$'. number_format($somasTotal,2,",",".").'</h1>
                        <p>Saldo / '.$ano.'</p>
                    ';
                ?>
            </div>

        <?php echo '
            <!--JAN-->
            <div class="container informations">
                <h2>JAN / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosJan['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosJan['total'],2,",",".").'</p>
                </div>

                <!--SALDO-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualJan,2,",",".").'</p>
                </div>

                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioJan['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=01&ano='.$ano.'">Detalhes</a>
                </div>
            </div>

            <!--FEV-->
            <div class="container informations">
                <h2>FEV / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosFev['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosFev['total'],2,",",".").'</p>
                </div>

                <!--SALDO-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualFev,2,",",".").'</p>
                </div>

                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioFev['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=02&ano='.$ano.'">Detalhes</a>
                </div>
            </div>

            <!--MAR-->
            <div class="container informations">
                <h2>MAR / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosMar['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosMar['total'],2,",",".").'</p>
                </div>

                <!--SALDO-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualMar,2,",",".").'</p>
                </div>

                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioMar['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=03&ano='.$ano.'">Detalhes</a>
                </div>
            </div>

            <!--ABR-->
            <div class="container informations">
                <h2>ABR / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosAbr['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosAbr['total'],2,",",".").'</p>
                </div>

                <!--SALDO-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualAbr,2,",",".").'</p>
                </div>

                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioAbr['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=04&ano='.$ano.'">Detalhes</a>
                </div>
            </div>

            <!--MAI-->
            <div class="container informations">
                <h2>MAI / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosMai['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosMai['total'],2,",",".").'</p>
                </div>

                <!--SALDO-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualMai,2,",",".").'</p>
                </div>

                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioMai['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=05&ano='.$ano.'">Detalhes</a>
                </div>
            </div>

            <!--JUN-->
            <div class="container informations">
                <h2>JUN / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosJun['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosJun['total'],2,",",".").'</p>
                </div>

                <!--SALDO-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualJun,2,",",".").'</p>
                </div>
                
                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioJun['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=06&ano='.$ano.'">Detalhes</a>
                </div>
            </div>

            <!--JUL-->
            <div class="container informations">
                <h2>JUL / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosJul['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosJul['total'],2,",",".").'</p>
                </div>

                <!--SALDO-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualJul,2,",",".").'</p>
                </div>

                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioJul['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=07&ano='.$ano.'">Detalhes</a>
                </div>
            </div>

            <!--AGO-->
            <div class="container informations">
                <h2>AGO / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosAgo['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosAgo['total'],2,",",".").'</p>
                </div>

                <!--SALDO-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualAgo,2,",",".").'</p>
                </div>

                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioAgo['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=08&ano='.$ano.'">Detalhes</a>
                </div>
            </div>

            <!--SET-->
            <div class="container informations">
                <h2>SET / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosSet['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosSet['total'],2,",",".").'</p>
                </div>

                <!--SALDO-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualSet,2,",",".").'</p>
                </div>

                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioSet['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=09&ano='.$ano.'">Detalhes</a>
                </div>
            </div>

            <!--OUT-->
            <div class="container informations">
                <h2>OUT / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosOut['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosOut['total'],2,",",".").'</p>
                </div>

                <!--SALDO-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualOut,2,",",".").'</p>
                </div>

                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioOut['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=10&ano='.$ano.'">Detalhes</a>
                </div>
            </div>

            <!--NOV-->
            <div class="container informations">
                <h2>NOV / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosNov['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosNov['total'],2,",",".").'</p>
                </div>

                <!--SALDO-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualNov,2,",",".").'</p>
                </div>

                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioNov['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=11&ano='.$ano.'">Detalhes</a>
                </div>
            </div>

            <!--DEZ-->
            <div class="container informations">
                <h2>DEZ / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosDez['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosDez['total'],2,",",".").'</p>
                </div>

                <!--SALDO MÊS-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtualDez,2,",",".").'</p>
                </div>

                <!--PATRIMONIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioDez['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes=12&ano='.$ano.'">Detalhes</a>
                </div>
            </div>
        ';?>
    </main>
    <?php mysqli_close($conn);?>

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