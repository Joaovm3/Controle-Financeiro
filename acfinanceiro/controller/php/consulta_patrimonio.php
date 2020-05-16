<?php
    $usuario = $_SESSION['email'];
    include_once('../../model/php/conn.php');

    $extract_patrimonio = "SELECT SUM(valor) AS 'total' FROM patrimonio WHERE id_email = '{$usuario}'";
    $resultado_patrimonio = mysqli_query($conn, $extract_patrimonio);
    $somas_patrimonio = mysqli_fetch_array($resultado_patrimonio);
    $total_patrimonio = $somas_patrimonio['total'];

    $sql_patrionio = "SELECT id, caracteristica, id_email, datas, nome, categoria, valor FROM patrimonio 
    WHERE id_email = '{$usuario}' ORDER BY datas DESC";
    $result = mysqli_query($conn, $sql_patrionio);
    
    mysqli_close($conn);