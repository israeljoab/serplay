<?php
    ob_start();
    session_start();
    
    $timezone = date_default_timezone_set("America/Recife");

    $conex = mysqli_connect("localhost", "usuario", "senha", "BD");

    if(mysqli_connect_errno()) {
        echo "Falha na Conexão: " . mysqli_connect_errno();
    }



?>