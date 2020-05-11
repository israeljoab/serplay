<?php

function limparDadosDoAluno($entradaDados) {
    $entradaDados = strip_tags($entradaDados);
    $entradaDados = str_replace(" ", "", $entradaDados);
    return $entradaDados;

}

function limparEntradaSenha($entradaDados) {
        $entradaDados = strip_tags($entradaDados);
        return $entradaDados;
    }

function limparEntradasGerais($entradaDados) {
    $entradaDados = strip_tags($entradaDados);
    $entradaDados = str_replace(" ", "", $entradaDados);
    return $entradaDados;
}

if(isset($_POST['botaoRegistar'])) {
    $matricula = $_POST['matricula'];
    $matricula = limparDadosDoAluno($_POST['matricula']);
    $nomeCompleto = limparDadosDoAluno($_POST['nomeCompleto']);
    $email = limparDadosDoAluno($_POST['email']);
    $emailConfirmacao = limparDadosDoAluno($_POST['emailConfirmacao']);
    $senha = limparEntradaSenha($_POST['senha']);
    $senhaConfirmacao = limparEntradaSenha($_POST['senhaConfirmacao']);

    $comSucesso = $conta->registrar($matricula, $nomeCompleto, $email, $emailConfirmacao, $senha, $senhaConfirmacao);

    if($comSucesso == true) {
        $_SESSION['usuarioLogado'] = $matricula;
        header("Location: index.php");
    }

}

?>