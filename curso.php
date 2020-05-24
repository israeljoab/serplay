<?php include("includes/header.php"); 

if(isset($_GET['id'])) {
	$cursoId = $_GET['id'];
}
else {
	header("Location: index.php");
}

$cursosQuery = mysqli_query($conex, "SELECT * FROM cursos WHERE id='$cursoId'");
$cursos = mysqli_fetch_array($cursosQuery);

echo $cursos['titulo'];

?>







<?php include("includes/footer.php"); ?>