<?php
    include("includes/config.php");
    include("includes/classes/Conta.php");
    include("includes/classes/Constantes.php");

    $conta = new Conta ($conex);

    include("includes/handlers/registro-handler.php");
    include("includes/handlers/login-handler.php");

    function getEntradaDados($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrever-se - SerPlay Educacional</title>
</head>
<body>

    <div id="entradaDados">
        <form id="formularioLogin" action="registro.php" method="POST"> 
            <h2>Login</h2>
            <p>
                <input id="loginMatricula" name="loginMatricula" type="text" placeholder="Digite sua matrícula" required>
            </p>
            
            <p>
                <input id="loginSenha" name="loginSenha" type="password" placeholder="Senha" required>
            </p>

            <button type="submit" name="botaoLogin">Entrar</button>
            
        </form>

        <form id="formularioRegistro" action="registro.php" method="POST"> 
            <h2>Inscrever-se no SerPlay</h2>
            <p>
                <?php echo $conta->getErro(Constantes::$matriculaTamanho); ?>
                <?php echo $conta->getErro(Constantes::$matriculaExistente); ?>
                <input id="matricula" name="matricula" type="text" placeholder="Digite sua matrícula" value="<?php getEntradaDados('matricula') ?>" required>
            </p>

            <p>
                <?php echo $conta->getErro(Constantes::$nomeCompleto); ?>
                <input id="nomeCompleto" name="nomeCompleto" type="text" placeholder="Digite seu nome" value="<?php getEntradaDados('nomeCompleto') ?>" required>
            </p>

            <p>
                <?php echo $conta->getErro(Constantes::$emailsDiferentes); ?>
				<?php echo $conta->getErro(Constantes::$emailInvalido); ?>
                <?php echo $conta->getErro(Constantes::$emailExistente); ?>
                <input id="email" name="email" type="email" placeholder="exemplo@exemplo.com" value="<?php getEntradaDados('email') ?>" required>
            </p>

            <p>
                <input id="emailConfirmacao" name="emailConfirmacao" type="email" placeholder="Confirmar E-mail" value="<?php getEntradaDados('emailConfirmacao') ?>" required>
            </p>

            <p>
                <?php echo $conta->getErro(Constantes::$senhasDiferentes); ?>
				<?php echo $conta->getErro(Constantes::$senhasAlfanumericas); ?>
				<?php echo $conta->getErro(Constantes::$senhasTamanho); ?>
                <input id="senha" name="senha" type="password" placeholder="Senha" required>
            </p>

            <p>
                <input id="senhaConfirmacao" name="senhaConfirmacao" type="password" placeholder="Confirme sua Senha" required>
            </p>

            <button type="submit" name="botaoRegistar">INSCREVER-SE</button>
            
        </form>
    </div>
    
</body>
</html>