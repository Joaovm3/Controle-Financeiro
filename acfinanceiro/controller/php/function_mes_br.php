<?php
$mesTxt = $mes;

switch ($mesTxt) {
    case "01":
        $mesTxt = "JAN";
        break;
    case "02":
        $mesTxt = "FEV";
        break;
    case "03":
        $mesTxt = "MAR";
        break;
    case "04":
        $mesTxt = "ABR";
        break;
    case "05":
        $mesTxt = "MAI";
        break;
    case "06":
        $mesTxt = "JUN";
        break;
    case "07":
        $mesTxt = "JUL";
        break;
    case "08":
        $mesTxt = "AGO";
        break;
    case "09":
        $mesTxt = "SET";
        break;
    case "10":
        $mesTxt = "OUT";
        break;
    case "11":
        $mesTxt = "NOV";
        break;
    case "12":
        $mesTxt = "DEZ";
        break;
    default:
        echo "Algo está errado, informe ao programador!";
}