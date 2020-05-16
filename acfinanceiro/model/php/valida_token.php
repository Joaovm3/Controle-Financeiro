<?php
session_start();
include_once("conn.php");

if (empty($_POST['email']) || empty($_POST['token']) || empty($_POST['senha'])) {
    header('Location: /404');
    exit();
}

$email = test_input($_POST["email"]);
$token = test_input($_POST["token"]);
$senha = test_input($_POST["senha"]);

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$token = mysqli_real_escape_string($conn, $_POST['token']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT email, token FROM tokens WHERE email = '{$email}' AND token = '{$token}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $sqlSenha = "UPDATE usuarios SET senha = md5('{$senha}') WHERE email = '{$email}'";

    if ($conn->query($sqlSenha) === TRUE) {
        // sql to delete a record
        $sqlDelToken = "DELETE FROM tokens WHERE email = '{$email}'";

        if ($conn->query($sqlDelToken) === TRUE) {
            header('Location: /app/acfinanceiro/view/login/');
        } else {
            header('Location: /app/acfinanceiro/view/login/');
        }
    } else {
        $_SESSION['senha_not'] = true;
        header('Location: /app/acfinanceiro/view/login/recover.php');
        exit();
    }
} else {
    $_SESSION['senha_not'] = true;
    header('Location: /app/acfinanceiro/view/login/recover.php');
    exit();
}

mysqli_close($conn);