<?php
session_start();
include_once("conn.php");

if (empty($_POST['email'])) {
    header('Location: https://analistacode.com/404');
    exit();
}

$email = test_input($_POST["email"]);

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$email = mysqli_real_escape_string($conn, $_POST['email']);

$query = "SELECT email FROM usuarios WHERE email = '{$email}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $token = md5($email);
    $sql = "INSERT INTO tokens (email, token) VALUES ('$email', '$token')";
    
    if ($conn->query($sql) === TRUE) {
        // Enviando email
        $para = $email;
        $assunto = "Recupera Senha";
        $mensagem = '
            Click no link abaixo para trocar sua senha.
            https://analistacode.com/app/acfinanceiro/controller/php/valida_token.php?token='.$token.'&email='.$email.'
        ';
        $headers = $email;
        
        mail($para, $assunto, $mensagem, $headers);
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: /app/acfinanceiro/view/login/recover.php');
        exit();
    }

    $_SESSION['ok_email'] = true;
    header('Location: /app/acfinanceiro/view/login/recover.php');
    exit();

} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: /app/acfinanceiro/view/login/recover.php/');
    exit();
}

mysqli_close($conn);