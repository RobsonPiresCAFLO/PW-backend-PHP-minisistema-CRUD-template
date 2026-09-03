<?php
    $servidor = "db";
    $usuario = "root";
    $senha = "root";
    $bd = "4301-LAYOUT";

    if (!$conn = mysqli_connect($servidor, $usuario, $senha, $bd)) {
        echo "erro!!!";
    } 
       
?>
