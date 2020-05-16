<?php 
$name = $email = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["nome"]);
    $email = test_input($_POST["email"]);
    $msg = test_input($_POST["msg"]);
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$para = "dev.rsanttos@gmail.com";
$assunto = "Site";
$mensagem = $msg;
$headers = $email;

mail($para, $assunto, $mensagem, $headers);