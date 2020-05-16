<?php
session_start();
include_once("conn.php");

if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])) {
    include_once("https://analistacode.com/404");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
}
    $nome = test_input($_POST["nome"]);
    $email = test_input($_POST["email"]);
    $senha = test_input(md5($_POST["senha"]));

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sqlLogin = "INSERT INTO usuarios (nome, email, senha)
VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sqlLogin) === TRUE) {
    header('Location: /app/acfinanceiro/view/login/');
} else {
    $_SESSION['email-cadastrado'] = true;
    header('Location: /app/acfinanceiro/view/login/registrar.php');
    exit();
}

mysqli_close($conn);