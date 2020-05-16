<?php
include('conn.php');

$id = $_GET['id'];
$caracteristica = $_GET['caracteristica'];

switch ($caracteristica) {
    case 'Ativo':
        $directory = "ativos";
        break;

    case 'Passivos':
        $directory = "passivos";
        break;

    case 'Patrimônio':
        $directory = "patrimonio";
        break;
    
    default:
        $directory = $caracteristica;
        break;
}

$sql = "DELETE FROM $directory WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header('Location: /app/acfinanceiro/view/information/extract_patrimonio.php?');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>