<?php
session_start();
include_once("conn.php");

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: /404');
    exit();
}

$email = test_input($_POST["email"]);
$senha = test_input($_POST["senha"]);

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT email FROM usuarios WHERE email = '{$email}' AND senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: /app/acfinanceiro/view/information/current.php/');
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: /app/acfinanceiro/view/login/');
    exit();
}

mysqli_close($conn);