<?php
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
    session_start();
    if (!$_SESSION['email']) {
        header('Location: /app/acfinanceiro/view/login/');
        exit();
    }
    date_default_timezone_set('America/Belem');
    $data_atual = date('Y/m/d');
    include_once('../../controller/php/consulta_mes.php');
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
    <title>Histórico Financeiro</title>
    <style>
        #global h3 { text-align:center; font-size:110%;}
        #global .cor { opacity: 0.3; }
        #global .informations a { margin-top:0px; }
    </style>
</head>
<body>
    <!-- CONTAINER BARRA MENU E RODAPÉ-->
    <?php include_once('../../controller/html/header_footer.html');?>

    <!-- CONTAINER GLOBAL INFORMATIONS -->
    <main id="global" class="container">

        <div class="container valor">
            <p>Saldo</p>
            <h1>R$<?php echo number_format($somasTotalMes,2,",",".");?></h1>
            <p><?php echo $mesTxt.' / '.$ano;?></p>
        </div>
 
        <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo '
                        <div class="container informations">
                            <h3>'.date('d/m/Y', strtotime($row['datas'])).'</h3>
                            <div class="container row">
                                <p class="txt">'.$row['nome'].'<br/><span class="cor">'.$row['categoria'].'</span></p>
                                <p>R$'.number_format($row['valor'],2,",",".").'</p>
                            </div>
                            <div class="container">
                                <a href="/app/acfinanceiro/model/php/deletar.php?id='.$row['id'].'&caracteristica='.$row['caracteristica'].'&mes='.$mes.'&ano='.$ano.'">Deletar '.$row['caracteristica'].'</a>
                            </div>
                        </div>
                    ';
                }
            } else {
                echo '
                    <div class="container informations">
                        <h3>Sem Registros</h3>
                    </div>
                ';
            }
        ?>
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