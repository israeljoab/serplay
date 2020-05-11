<?php
if(isset($_POST['botaoLogin'])) {
    $matricula = $_POST['loginMatricula'];
    $senha = $_POST['loginSenha'];

    $comSucesso = $conta->login($matricula, $senha);

    if($comSucesso == true) {
        $_SESSION['usuarioLogado'] = $matricula;
        header("Location: index.php");
    }

}

?>