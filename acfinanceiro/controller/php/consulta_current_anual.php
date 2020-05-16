<?php
    $usuario = $_SESSION['email'];
    $ano = $_GET['ano'];
    include_once('../../model/php/conn.php');

    $sqlAtivos = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-12-31' AND datas >= '2020-01-01'";
    $resultadoAtivos = mysqli_query($conn, $sqlAtivos);
    $somasAtivos = mysqli_fetch_array($resultadoAtivos);

    $sqlPassivos = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-12-31' AND datas >= '2020-01-01'";
    $resultadoPassivos = mysqli_query($conn, $sqlPassivos);
    $somasPassivos = mysqli_fetch_array($resultadoPassivos);

    $sqlPatrimonio = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-12-31' AND datas >= '2020-01-01'";
    $resultadoPatrimonio = mysqli_query($conn, $sqlPatrimonio);
    $somasPatrimonio = mysqli_fetch_array($resultadoPatrimonio);

    $somasTotal = ($somasAtivos['total'] - $somasPassivos['total']) + $somasPatrimonio['total'];


    //-------------------------JAN---------------------------------
    $sqlAtivosJan = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-01-31' AND datas >= '$ano-01-01'";
    $resultadoAtivosJan = mysqli_query($conn, $sqlAtivosJan);
    $saldoAtivosJan = mysqli_fetch_array($resultadoAtivosJan);

    $sqlPassivosJan = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-01-31' AND datas >= '$ano-01-01'";
    $resultadoPassivosJan = mysqli_query($conn, $sqlPassivosJan);
    $saldoPassivosJan = mysqli_fetch_array($resultadoPassivosJan);

    $sqlPatrimonioJan = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-01-31' AND datas >= '$ano-01-01'";
    $resultadoPatrimonioJan = mysqli_query($conn, $sqlPatrimonioJan);
    $saldoPatrimonioJan = mysqli_fetch_array($resultadoPatrimonioJan);

    $saldoMesAtualJan = $saldoAtivosJan['total'] - $saldoPassivosJan['total'];


    //-------------------------FEV---------------------------------
    $sqlAtivosFev = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-02-31' AND datas >= '$ano-02-01'";
    $resultadoAtivosFev = mysqli_query($conn, $sqlAtivosFev);
    $saldoAtivosFev = mysqli_fetch_array($resultadoAtivosFev);

    $sqlPassivosFev = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-02-31' AND datas >= '$ano-02-01'";
    $resultadoPassivosFev = mysqli_query($conn, $sqlPassivosFev);
    $saldoPassivosFev = mysqli_fetch_array($resultadoPassivosFev);

    $sqlPatrimonioFev = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-02-31' AND datas >= '$ano-02-01'";
    $resultadoPatrimonioFev = mysqli_query($conn, $sqlPatrimonioFev);
    $saldoPatrimonioFev = mysqli_fetch_array($resultadoPatrimonioFev);

    $saldoMesAtualFev = $saldoAtivosFev['total'] - $saldoPassivosFev['total'];


    //-------------------------MAR---------------------------------
    $sqlAtivosMar = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-03-31' AND datas >= '$ano-03-01'";
    $resultadoAtivosMar = mysqli_query($conn, $sqlAtivosMar);
    $saldoAtivosMar = mysqli_fetch_array($resultadoAtivosMar);

    $sqlPassivosMar = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-03-31' AND datas >= '$ano-03-01'";
    $resultadoPassivosMar = mysqli_query($conn, $sqlPassivosMar);
    $saldoPassivosMar = mysqli_fetch_array($resultadoPassivosMar);

    $sqlPatrimonioMar = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-03-31' AND datas >= '$ano-03-01'";
    $resultadoPatrimonioMar = mysqli_query($conn, $sqlPatrimonioMar);
    $saldoPatrimonioMar = mysqli_fetch_array($resultadoPatrimonioMar);

    $saldoMesAtualMar = ($saldoAtivosMar['total'] + $saldoPatrimonioMar['total']) - $saldoPassivosMar['total'];

    //-------------------------ABR---------------------------------
    $sqlAtivosAbr = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-04-31' AND datas >= '$ano-04-01'";
    $resultadoAtivosAbr = mysqli_query($conn, $sqlAtivosAbr);
    $saldoAtivosAbr = mysqli_fetch_array($resultadoAtivosAbr);

    $sqlPassivosAbr = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-04-31' AND datas >= '$ano-04-01'";
    $resultadoPassivosAbr = mysqli_query($conn, $sqlPassivosAbr);
    $saldoPassivosAbr = mysqli_fetch_array($resultadoPassivosAbr);

    $sqlPatrimonioAbr = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-04-31' AND datas >= '$ano-04-01'";
    $resultadoPatrimonioAbr = mysqli_query($conn, $sqlPatrimonioAbr);
    $saldoPatrimonioAbr = mysqli_fetch_array($resultadoPatrimonioAbr);

    $saldoMesAtualAbr = $saldoAtivosAbr['total'] - $saldoPassivosAbr['total'];


    //-------------------------MAI---------------------------------
    $sqlAtivosMai = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-05-31' AND datas >= '$ano-05-01'";
    $resultadoAtivosMai = mysqli_query($conn, $sqlAtivosMai);
    $saldoAtivosMai = mysqli_fetch_array($resultadoAtivosMai);

    $sqlPassivosMai = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-05-31' AND datas >= '$ano-05-01'";
    $resultadoPassivosMai = mysqli_query($conn, $sqlPassivosMai);
    $saldoPassivosMai = mysqli_fetch_array($resultadoPassivosMai);

    $sqlPatrimonioMai = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-05-31' AND datas >= '$ano-05-01'";
    $resultadoPatrimonioMai = mysqli_query($conn, $sqlPatrimonioMai);
    $saldoPatrimonioMai = mysqli_fetch_array($resultadoPatrimonioMai);

    $saldoMesAtualMai = $saldoAtivosMai['total'] - $saldoPassivosMai['total'];


    //-------------------------JUN---------------------------------
    $sqlAtivosJun = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-06-31' AND datas >= '$ano-06-01'";
    $resultadoAtivosJun = mysqli_query($conn, $sqlAtivosJun);
    $saldoAtivosJun = mysqli_fetch_array($resultadoAtivosJun);

    $sqlPassivosJun = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-06-31' AND datas >= '$ano-06-01'";
    $resultadoPassivosJun = mysqli_query($conn, $sqlPassivosJun);
    $saldoPassivosJun = mysqli_fetch_array($resultadoPassivosJun);

    $sqlPatrimonioJun = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-06-31' AND datas >= '$ano-06-01'";
    $resultadoPatrimonioJun = mysqli_query($conn, $sqlPatrimonioJun);
    $saldoPatrimonioJun = mysqli_fetch_array($resultadoPatrimonioJun);

    $saldoMesAtualJun = $saldoAtivosJun['total'] - $saldoPassivosJun['total'];


    //-------------------------JUL---------------------------------
    $sqlAtivosJul = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-07-31' AND datas >= '$ano-07-01'";
    $resultadoAtivosJul = mysqli_query($conn, $sqlAtivosJul);
    $saldoAtivosJul = mysqli_fetch_array($resultadoAtivosJul);

    $sqlPassivosJul = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-07-31' AND datas >= '$ano-07-01'";
    $resultadoPassivosJul = mysqli_query($conn, $sqlPassivosJul);
    $saldoPassivosJul = mysqli_fetch_array($resultadoPassivosJul);

    $sqlPatrimonioJul = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-07-31' AND datas >= '$ano-07-01'";
    $resultadoPatrimonioJul = mysqli_query($conn, $sqlPatrimonioJul);
    $saldoPatrimonioJul = mysqli_fetch_array($resultadoPatrimonioJul);

    $saldoMesAtualJul = $saldoAtivosJul['total'] - $saldoPassivosJul['total'];

    //-------------------------AGO---------------------------------
    $sqlAtivosAgo = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-08-31' AND datas >= '$ano-08-01'";
    $resultadoAtivosAgo = mysqli_query($conn, $sqlAtivosAgo);
    $saldoAtivosAgo = mysqli_fetch_array($resultadoAtivosAgo);

    $sqlPassivosAgo = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-08-31' AND datas >= '$ano-08-01'";
    $resultadoPassivosAgo = mysqli_query($conn, $sqlPassivosAgo);
    $saldoPassivosAgo = mysqli_fetch_array($resultadoPassivosAgo);

    $sqlPatrimonioAgo = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-08-31' AND datas >= '$ano-08-01'";
    $resultadoPatrimonioAgo = mysqli_query($conn, $sqlPatrimonioAgo);
    $saldoPatrimonioAgo = mysqli_fetch_array($resultadoPatrimonioAgo);

    $saldoMesAtualAgo = $saldoAtivosAgo['total'] - $saldoPassivosAgo['total'];


    //-------------------------SET---------------------------------
    $sqlAtivosSet = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-09-31' AND datas >= '$ano-09-01'";
    $resultadoAtivosSet = mysqli_query($conn, $sqlAtivosSet);
    $saldoAtivosSet = mysqli_fetch_array($resultadoAtivosSet);

    $sqlPassivosSet = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-09-31' AND datas >= '$ano-09-01'";
    $resultadoPassivosSet = mysqli_query($conn, $sqlPassivosSet);
    $saldoPassivosSet = mysqli_fetch_array($resultadoPassivosSet);

    $sqlPatrimonioSet = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-09-31' AND datas >= '$ano-09-01'";
    $resultadoPatrimonioSet = mysqli_query($conn, $sqlPatrimonioSet);
    $saldoPatrimonioSet = mysqli_fetch_array($resultadoPatrimonioSet);

    $saldoMesAtualSet = $saldoAtivosSet['total'] - $saldoPassivosSet['total'];


    //-------------------------OUT---------------------------------
    $sqlAtivosOut = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-10-31' AND datas >= '$ano-10-01'";
    $resultadoAtivosOut = mysqli_query($conn, $sqlAtivosOut);
    $saldoAtivosOut = mysqli_fetch_array($resultadoAtivosOut);

    $sqlPassivosOut = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-10-31' AND datas >= '$ano-10-01'";
    $resultadoPassivosOut = mysqli_query($conn, $sqlPassivosOut);
    $saldoPassivosOut = mysqli_fetch_array($resultadoPassivosOut);

    $sqlPatrimonioOut = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-10-31' AND datas >= '$ano-10-01'";
    $resultadoPatrimonioOut = mysqli_query($conn, $sqlPatrimonioOut);
    $saldoPatrimonioOut = mysqli_fetch_array($resultadoPatrimonioOut);

    $saldoMesAtualOut = $saldoAtivosOut['total'] - $saldoPassivosOut['total'];


    //-------------------------NOV---------------------------------
    $sqlAtivosNov = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-11-31' AND datas >= '$ano-11-01'";
    $resultadoAtivosNov = mysqli_query($conn, $sqlAtivosNov);
    $saldoAtivosNov = mysqli_fetch_array($resultadoAtivosNov);

    $sqlPassivosNov = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-11-31' AND datas >= '$ano-11-01'";
    $resultadoPassivosNov = mysqli_query($conn, $sqlPassivosNov);
    $saldoPassivosNov = mysqli_fetch_array($resultadoPassivosNov);

    $sqlPatrimonioNov = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-11-31' AND datas >= '$ano-11-01'";
    $resultadoPatrimonioNov = mysqli_query($conn, $sqlPatrimonioNov);
    $saldoPatrimonioNov = mysqli_fetch_array($resultadoPatrimonioNov);

    $saldoMesAtualNov = $saldoAtivosNov['total'] - $saldoPassivosNov['total'];


    //-------------------------DEZ---------------------------------
    $sqlAtivosDez = "SELECT SUM(valor) AS 'total' FROM ativos WHERE id_email = '{$usuario}' AND datas <= '$ano-12-31' AND datas >= '$ano-12-01'";
    $resultadoAtivosDez = mysqli_query($conn, $sqlAtivosDez);
    $saldoAtivosDez = mysqli_fetch_array($resultadoAtivosDez);

    $sqlPassivosDez = "SELECT SUM(valor) AS 'total' FROM passivos WHERE id_email = '{$usuario}' AND datas <= '$ano-12-31' AND datas >= '$ano-12-01'";
    $resultadoPassivosDez = mysqli_query($conn, $sqlPassivosDez);
    $saldoPassivosDez = mysqli_fetch_array($resultadoPassivosDez);

    $sqlPatrimonioDez = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}' AND datas <= '$ano-12-31' AND datas >= '$ano-12-01'";
    $resultadoPatrimonioDez = mysqli_query($conn, $sqlPatrimonioDez);
    $saldoPatrimonioDez = mysqli_fetch_array($resultadoPatrimonioDez);

    $saldoMesAtualDez = $saldoAtivosDez['total'] - $saldoPassivosDez['total'];
    