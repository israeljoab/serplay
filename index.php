<?php
include("includes/config.php");

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

        </div>

        <div id="nowPlayingBarContainer">

            <div id="nowPlayingBar">

                <div id="nowPlayingLeft">
                    <div class="content">
                        <span class="capaLink">
                            <img src="https://noticias.unisanta.br/wp-content/uploads/2017/07/games_site.jpg" class="albumArtwork">
                        </span>

                        <div class="trackInfo">

                            <span class="trackName">
                                <span>Desenvolvimento 3D</span>
                            </span>

                            <span class="nomeLecionador">
                                <span>Gustavo Guanabara</span>
                            </span>

                        </div>



                    </div>
                </div>

                <div id="nowPlayingCenter">

                    <div class="content playerControls">

                        <div class="buttons">

                            <button class="controlButton shuffle" title="Aleatório">
                                <img src="assets/imagens/icons/shuffle.png" alt="Shuffle">
                            </button>

                            <button class="controlButton previous" title="Anterior">
                                <img src="assets/imagens/icons/previous.png" alt="Previous">
                            </button>

                            <button class="controlButton play" title="Play">
                                <img src="assets/imagens/icons/play.png" alt="Play">
                            </button>

                            <button class="controlButton pause" title="Pause" style="display: none;">
                                <img src="assets/imagens/icons/pause.png" alt="Pause">
                            </button>

                            <button class="controlButton next" title="Próximo">
                                <img src="assets/imagens/icons/next.png" alt="Next">
                            </button>

                            <button class="controlButton repeat" title="Repetir">
                                <img src="assets/imagens/icons/repeat.png" alt="Repeat">
                            </button>

                        </div>


                        <div class="playbackBar">

                            <span class="progressTime current">0.00</span>

                            <div class="progressBar">
                                <div class="progressBarBg">
                                    <div class="progress"></div>
                                </div>
                            </div>

                            <span class="progressTime remaining">0.00</span>


                        </div>


                    </div>


                </div>

                <div id="nowPlayingRight">
                    <div class="volumeBar">

                        <button class="controlButton volume" title="Volume">
                            <img src="assets/imagens/icons/volume.png" alt="Volume">
                        </button>

                        <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress"></div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


</body>

</html>