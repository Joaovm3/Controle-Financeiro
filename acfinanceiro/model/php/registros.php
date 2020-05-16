<?php
    include_once('conn.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = test_input($_POST["email"]);
        $diretorio = test_input($_POST["diretorio"]);
        $caracteristica = test_input($_POST["caracteristica"]);

        $nome = test_input($_POST["nome"]);
        $moeda = test_input($_POST["moeda"]);
        $categorias = test_input($_POST["categorias"]);
        $data_registro = test_input($_POST["data_registro"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $moeda = array(".", ",");
    $valor = str_replace($moeda,"",$_POST['moeda']);
    
    $tam = strlen($valor);
    $final = substr_replace($valor, ".", $tam-2).substr($valor, $tam-2);
    
    $sql = "INSERT INTO $diretorio (caracteristica, id_email, datas, nome, categoria, valor)
    VALUES ('$caracteristica', '$email', '$data_registro', '$nome', '$categorias', '$final')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();