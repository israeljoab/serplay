<?php
include("includes/config.php");
include("includes/classes/Lecionador.php");
include("includes/classes/Curso.php");
include("includes/classes/Media.php");

//session_destroy();

if (isset($_SESSION['usuarioLogado'])) {
    $usuarioLogado = $_SESSION['usuarioLogado'];
} else {
    header("Location: registro.php");
}

?>

<html>

<head>
    <title>Bem Vindo ao SerPlay!</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

    <div id="mainContainer">

        <div id="topContainer">

            <?php include("includes/navBarContainer.php");?>

            <div id="mainViewContainer">

                <div id="mainContent">