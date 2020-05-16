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

    <link rel="stylesheet" type="text/css" href="assets/css/registro.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/registro.js"></script>
</head>
<body>
    <div id="background">

        <div id="loginContainer">

            <div id="entradaDados">
                <form id="formularioLogin" action="registro.php" method="POST"> 
                    <h2>Login</h2>
                    <p>
                        <?php echo $conta->getErro(Constantes::$loginFalhou); ?>
                        <label for="loginMatricula">👨‍🎓 Matrícula</label>
                        <input id="loginMatricula" name="loginMatricula" type="text" placeholder="Digite sua matrícula" required>
                    </p>
                    
                    <p>
                        <label for="loginMatricula">🔑 Digite sua Senha</label>
                        <input id="loginSenha" name="loginSenha" type="password" placeholder="Digite sua senha" required>
                    </p>

                    <button type="submit" name="botaoLogin">Entrar</button>

                    <div class="criarContaTexto">
                        <span id="ocultarLogin">Não tem cadastro? Faça seu cadastro agora mesmo!🚩</span>
                    </div>
                    
                </form>

                <form id="formularioRegistro" action="registro.php" method="POST"> 
                    <h2>Inscrever-se no SerPlay</h2>
                    <p>
                        <?php echo $conta->getErro(Constantes::$matriculaTamanho); ?>
                        <?php echo $conta->getErro(Constantes::$matriculaExistente); ?>
                        <label for="username">👨‍🎓👩‍🎓 Matrícula</label>
                        <input id="matricula" name="matricula" type="text" placeholder="Digite sua matrícula" value="<?php getEntradaDados('matricula') ?>" required>
                    </p>

                    <p>
                        <?php echo $conta->getErro(Constantes::$nomeCompleto); ?>
                        <label for="username">💬 Nome Completo</label>
                        <input id="nomeCompleto" name="nomeCompleto" type="text" placeholder="Digite seu nome" value="<?php getEntradaDados('nomeCompleto') ?>" required>
                    </p>

                    <p>
                        <?php echo $conta->getErro(Constantes::$emailsDiferentes); ?>
                        <?php echo $conta->getErro(Constantes::$emailInvalido); ?>
                        <?php echo $conta->getErro(Constantes::$emailExistente); ?>
                        <label for="username">📧 Seu email</label>
                        <input id="email" name="email" type="email" placeholder="exemplo@exemplo.com" value="<?php getEntradaDados('email') ?>" required>
                    </p>

                    <p>
                        <label for="username">📩 Confirmar email</label>
                        <input id="emailConfirmacao" name="emailConfirmacao" type="email" placeholder="Confirmar E-mail" value="<?php getEntradaDados('emailConfirmacao') ?>" required>
                    </p>

                    <p>
                        <?php echo $conta->getErro(Constantes::$senhasDiferentes); ?>
                        <?php echo $conta->getErro(Constantes::$senhasAlfanumericas); ?>
                        <?php echo $conta->getErro(Constantes::$senhasTamanho); ?>
                        <label for="username">🔐 Digite sua senha</label>
                        <input id="senha" name="senha" type="password" placeholder="Senha" required>
                    </p>

                    <p>
                    <label for="username">🔏 Confirme sua senha</label>
                        <input id="senhaConfirmacao" name="senhaConfirmacao" type="password" placeholder="Confirme sua Senha" required>
                    </p>

                    <button type="submit" name="botaoRegistar">INSCREVER-SE</button>

                    <div class="criarContaTexto">
                        <span id="ocultarRegistro">Já tem uma conta? Fazer login.🚪</span>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>