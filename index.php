<?php
include("includes/config.php");

//session_destroy();

if(isset($_SESSION['usuarioLogado'])) {
    $usuarioLogado = $_SESSION['usuarioLogado'];
}
else {
    header("Location: registro.php");
}

?>

<html>
<head>
    <title>Bem vindo ao SerPlay!</title>
</head>

<body>
    Olá, Mundo!
</body>

</html>