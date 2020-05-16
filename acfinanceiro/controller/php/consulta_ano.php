<?php
    $usuario = $_SESSION['email'];
    $ano = date('Y');
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
