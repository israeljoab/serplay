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
	<title>Bem Vindo ao SerPlay!</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
	

	<div id="nowPlayingBarContainer">

		<div id="nowPlayingBar">

			<div id="nowPlayingLeft">

			</div>

			<div id="nowPlayingCenter">

			</div>

			<div id="nowPlayingRight">

			</div>




		</div>

	</div>


</body>

</html>