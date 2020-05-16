<?php
    $usuario = $_SESSION['email'];
    $ano = date('Y');
    $mes = date('m');
    include_once('../../model/php/conn.php');

    $sqlAtivosMes = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-$mes-31' AND datas >= '$ano-$mes-01'";
    $resultadoAtivosMes = mysqli_query($conn, $sqlAtivosMes);
    $saldoAtivosMes = mysqli_fetch_array($resultadoAtivosMes);

    $sqlPassivosMes = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-$mes-31' AND datas >= '$ano-$mes-01'";
    $resultadoPassivosMes = mysqli_query($conn, $sqlPassivosMes);
    $saldoPassivosMes = mysqli_fetch_array($resultadoPassivosMes);

    $sqlPatrimonioMes = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-$mes-31' AND datas >= '$ano-$mes-01'";
    $resultadoPatrimonioMes = mysqli_query($conn, $sqlPatrimonioMes);
    $saldoPatrimonioMes = mysqli_fetch_array($resultadoPatrimonioMes);


    $saldoMesAtual = $saldoAtivosMes['total'] - $saldoPassivosMes['total'];