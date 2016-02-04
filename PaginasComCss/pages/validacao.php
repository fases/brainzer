<?php
session_start();
?>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        include "conexao.php";

//Pegando os valores do formulario
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = $_POST["idade"];
        $usuario = $_POST["usuario"];


        $sql_usuario = mysqli_query($con, "SELECT id FROM usuario WHERE user='$usuario'");
        $sql_email = mysqli_query($con, "SELECT id FROM usuario WHERE email='$email'");

        $res_usuario = mysqli_num_rows($sql_usuario);
        $res_email = mysqli_num_rows($sql_email);


        if (($res_email > 0) || ($res_usuario > 0)) {
            if ($res_usuario > 0) {
                //TA DANDO BUG
                header("Location: cadastrar.html");
                echo "<script type='javascript'>alert('Já existe um usuário cadastrado com esse usuário. </br>');";
                unset($usuario);
            }
            if ($res_email > 0) {
                //TA DANDO BUG
                echo "<script type='javascript'>alert('Já existe um usuário cadastrado com esse email. </br>');";
                header("Location: cadastrar.html");
                unset($email);
            }

            include "index.html";
        } else {
            //Inserindo os valores no banco e validando a senha 
//Verificando se a senha foi digitada duas vezes é a mesma
            $senha = $_POST["senha"];
            $senhac = $_POST["senha_c"];

            if ($senha != $senhac) {
                header("Location: cadastrar.html?certo=As senhas não conferem!</br>");
            } else {
//Se a verificação estiver certa a senha vai ser codificada em md5
                $senha_codificada = md5($senha);

//Cadastrando todos os dados verificados no banco
                $cadastro = "insert into usuario (nome, email, senha, idade, user) values ('$nome', '$email', '$senha_codificada', '$idade', '$usuario')";
                $sql = mysqli_query($con, $cadastro);
            }
//Se o sql rodar certinho, redireciona para a página inicial com a mensagem 
            if ($sql) {
                $_SESSION["usuario"] = $usuario;
                header("Location: index.html?usuario='$usuario'");
            }
        }
        ?>  
    </body>
</html>
