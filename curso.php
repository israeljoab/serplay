<?php include("includes/header.php"); 

if(isset($_GET['id'])) {
	$cursoId = $_GET['id'];
}
else {
	header("Location: index.php");
}

$cursosQuery = mysqli_query($conex, "SELECT * FROM cursos WHERE id='$cursoId'");
$cursos = mysqli_fetch_array($cursosQuery);

$lecionadorId = $cursos['lecionador'];

$lecionadorQuery = (mysqli_query($conex, "SELECT * FROM lecionadores WHERE id='$lecionadorId'"));

$lecionadores = mysqli_fetch_array($lecionadorQuery);

echo $cursos['titulo'] . "<br>";
echo $lecionadores['nome'];

?>







<?php include("includes/footer.php"); ?>