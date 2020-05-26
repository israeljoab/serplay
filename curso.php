<?php include("includes/header.php"); 

if(isset($_GET['id'])) {
	$cursoId = $_GET['id'];
}
else {
	header("Location: index.php");
}

$curso = new Curso($conex, $cursoId);
$lecionador = $curso->getLecionador();
?>

<div class="infoCurso">

	<div class="leftSection">
		<img src="<?php echo $curso->getCaminhoCapa(); ?>">
	</div>

	<div class="rightSection">
		<h2><?php echo $curso->getTitulo(); ?></h2>
		<p>Lecionador: <?php echo $lecionador->getNome(); ?></p>
        <p><?php echo $curso->getQtdMedia(); ?> - Aula(s)</p>
	</div>

</div>

<div class="tracklistContainer">
	<ul class="tracklist">

		<?php 
		$mediaIdArray = $curso->getMediaIds();

		$i = 1;
		foreach($mediaIdArray as $mediaId) {

			$cursoMedia = new Media($conex, $mediaId);
			$cursoLecionador = $cursoMedia->getLecionador();

			echo "<li class='tracklistRow'>
					<div class='trackCount'>
						<img class='play' src='assets/imagens/icons/play-white.png'>
						<span class='trackNumeros'>$i</span>
					</div>

					<div class='trackInfo'>
						<span class='trackNome'>" . $cursoMedia->getTitulo() . "</span>
						<span class='lecionadorNome'>" . $cursoLecionador->getNome() . "</span>
					</div>

					<div class='trackOpcoes'>
						<img class='opcoesBotao' src='assets/imagens/icons/more.png'>
					</div>

					<div class='trackduracao'>
						<span class'duracao'>" . $cursoMedia->getDuracao() . "</span>

					</div>
				

				</li>";

			$i = $i + 1;

		}

		?>

	</ul>
</div>


<?php include("includes/footer.php"); ?>