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

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div id="playBarConteiner">

    </div>
</body>

</html>