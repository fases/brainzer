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
    <?php
        if (isset($_GET["erro"])) {
            echo $_GET["erro"];
        }
        if (isset($_GET["certo"])) {
            echo $_GET["certo"];
        }
    ?>
    <body>
        <input type="button" name="login" id="login_button" value="Login"/>
        <input type="button" name="cadastro" id="cadastro_button" value="Cadastrar"/>
        <div id="formulario_login" style="display:none;">
            <h1>Login:</h1>
            <form action="verificalogin.php" method="post">
                Usuário: <input type="text" name="usuario" required/></br><br />
                Senha: <input type="password" name="senha" required/></br> </br>
                <a href="recuperarSenha.php" style="text-decoration:none;">Esqueci minha senha</a></br><br />
                <input type="submit" value="Entrar"/>
            </form>
        </div>
        <div id="formulario_cadastro" style="display:none;">
            <h1>Cadastro:</h1>
            <form action="validacao.php" method="post">
                Nome: <input type="text" name="nome" placeholder="Digite seu nome" required/><br /><br/> 
                Email: <input type="email" name="email" placeholder="Digite seu email" required/><br /><br/> 
                Idade: <input type="number" name="idade" min="5" max="100" placeholder="Digite sua idade" required/><br /><br/> 
                Usuario: <input type="text" name="usuario" placeholder="Digite seu usuário" required/><br /><br/> 
                Senha: <input type="password" name="senha" placeholder="Digite sua senha" required/><br /><br/> 
                Confirmar senha: <input type="password" name="senha_c" placeholder="Digite novamente sua senha" required/><br /><br/> 
                <input type="submit" value="Cadastrar"/></br>
            </form>
        </div>
    </body>  
</html>

