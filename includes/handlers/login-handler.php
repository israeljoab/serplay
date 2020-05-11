<?php
if(isset($_POST['botaoLogin'])) {
    $matricula = $_POST['loginMatricula'];
    $matricula = $_POST['loginSenha'];

    $result = $conta->login($matricula, $senha);

    if($result == true) {
        header("Location: index.php");
    }

}

?>