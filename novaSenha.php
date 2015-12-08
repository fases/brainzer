<!DOCTYPE>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Formulário da nova senha </title>
    </head>

    <body>

        <form name="form1" method="post" action="validacao_senha.php">

            <h3> Cadastre uma nova senha no banco de dados:</h3> <br />

            Usuario: <input type="text" name="usuario" placeholder="Digite seu usuário" required/><br /><br/> 
            Senha atual:<input type="password" name="senha_a" placeholder="Digite a senha atual" required/><br /><br/>
            Nova senha:<input type="password" name="senha" placeholder="Digite sua senha" required/><br /><br/> 
            Confirmar senha: <input type="password" name="senha_c" placeholder="Digite novamente a nova senha" required/><br /><br/> 

            <input type="submit" value="Atualizar senha"/></br>

        </form>
</html>