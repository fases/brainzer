<html>
    <head>
        <title>BrainZer</title>
        <meta charset="utf-8">
    </head>
    <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#login_button').click(function () {
                $('#formulario_login').show('slow');
                $('#formulario_cadastro').hide('slow');
            });
        });
        $(document).ready(function () {
            $('#cadastro_button').click(function () {
                $('#formulario_cadastro').show('slow');
                $('#formulario_login').hide('slow');
            });
        });
    </script>
    <body>
        <?php
        if (isset($_GET["erro"])) {
            echo $_GET["erro"];
        }
        if (isset($_GET["certo"])) {
            echo $_GET["certo"];
        }
        ?>
        <input type="button" name="login" id="login_button" value="Login"/>
        <input type="button" name="cadastro" id="cadastro_button" value="Cadastrar"/>
        <div id="formulario_login" style="display:none;">
            <h1>Login:</h1>
            <form action="autenticacao.php" method="post">
                Usuário: <input type="text" name="usuario" required/></br>
                Senha: <input type="password" name="senha" required/></br>
                <a href="esquecisenha.php" style="text-decoration:none;">Esqueci minha senha</a></br>
                <input type="submit" value="Entrar"/>
            </form>
        </div>
        <div id="formulario_cadastro" style="display:none;">
            <h1>Cadastro:</h1>
            <form action="validacao.php" method="post">
                Nome: <input type="text" name="nome" required/></br>
                Email: <input type="email" name="email" required/></br>
                Idade: <input type="number" name="idade" required/></br>
                Usuario: <input type="text" name="usuario" required/><input type="button" value="Verificar usuário"/></br>
                Senha: <input type="password" name="senha" required/></br>
                Confirmar senha: <input type="password" name="senha_c" required/></br>
                <input type="submit" value="Cadastrar"/></br>
            </form>
        </div>
    </body>  
</html>

