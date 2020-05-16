<?php
    $usuario = $_SESSION['email'];
    $mes = $_GET['mes'];
    $ano = $_GET['ano'];
    include_once('../../model/php/conn.php');

    $sqlAtivosMes = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-$mes-31' AND datas >= '$ano-$mes-01'";
    $resultadoAtivosMes = mysqli_query($conn, $sqlAtivosMes);
    $somasAtivosMes = mysqli_fetch_array($resultadoAtivosMes);

    $sqlPassivosMes = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-$mes-31' AND datas >= '$ano-$mes-01'";
    $resultadoPassivosMes = mysqli_query($conn, $sqlPassivosMes);
    $somasPassivosMes = mysqli_fetch_array($resultadoPassivosMes);

    $sqlPatrimonioMes = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-$mes-31' AND datas >= '$ano-$mes-01'";
    $resultadoPatrimonioMes = mysqli_query($conn, $sqlPatrimonioMes);
    $somasPatrimonioMes = mysqli_fetch_array($resultadoPatrimonioMes);

    $somasTotalMes = $somasAtivosMes['total'] - $somasPassivosMes['total'];    



    $sql = "SELECT id, caracteristica, id_email, datas, nome, categoria, valor FROM ativos 
    WHERE id_email = '{$usuario}' AND datas <= '$ano-$mes-31' AND datas >= '$ano-$mes-01'
    UNION ALL SELECT id, caracteristica, id_email, datas, nome, categoria, valor FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-$mes-31' AND datas >= '$ano-$mes-01' ORDER BY datas DESC";
    $result = mysqli_query($conn, $sql);
    
    mysqli_close($conn);
