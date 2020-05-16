<?php
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
    session_start();
    if (!$_SESSION['email']) {
        header('Location: /app/acfinanceiro/view/login/');
        exit();
    }
    include_once('../../controller/php/consulta_ano.php');
    include_once('../../controller/php/consulta_mes_atual.php');
    include_once('../../controller/php/function_mes_br.php');
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
                    if($somasTotal > 0){
                        echo '
                            <p>Saldo</p>
                            <h1>R$'. number_format($somasTotal,2,",",".").'</h1>
                            <p>Ficando Rico!</p>
                        ';
                    } elseif($somasTotal < 0) {
                        echo '
                            <p>Saldo</p>
                            <h1>R$'. number_format($somasTotal,2,",",".").'</h1>
                            <p>Ficando Pobre!</p>
                        ';
                    } elseif($somasTotal == 0) {
                        echo '<h1>Busque Ativos</h1>';
                    }
                ?>
            </div>

        <?php echo '
            <div class="container informations">
                <h2>'.$mesTxt.' / '.$ano.'</h2>
                <!--ATIVOS-->
                <div class="container row">
                    <p class="txt">Ativos</p>
                    <p>R$ '. number_format($saldoAtivosMes['total'],2,",",".").'</p>
                </div>

                <!--PASSIVOS-->
                <div class="container row">
                    <p class="txt">Passivos</p>
                    <p>R$ -'. number_format($saldoPassivosMes['total'],2,",",".").'</p>
                </div>

                <!--SALDO MÊS-->
                <div class="container row">
                    <p class="txt">Saldo Mês</p>
                    <p>R$ '. number_format($saldoMesAtual,2,",",".").'</p>
                </div>

                <!--PATRIMÔNIO-->
                <div class="container row">
                    <p class="txt">Patrimônio</p>
                    <p>R$ '. number_format($saldoPatrimonioMes['total'],2,",",".").'</p>
                </div>

                <div class="container row">
                    <a href="/app/acfinanceiro/view/information/extract.php?mes='.$mes.'&ano='.$ano.'">Detalhes</a>
                </div>
            </div>
        ';   
        mysqli_close($conn);?>
    </main>
    
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