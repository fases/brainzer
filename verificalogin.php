<?php
//inicio da sessão
session_start();
//inclui conexão no banco de dados
include "conexao.php";

//Recebendo parametros
$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

//seleciona a tabela usuario
$query = mysqli_query($con, "SELECT id FROM usuario WHERE user = '$usuario' AND senha = '$senha' ");
$res = mysqli_num_rows($query);
if ( $res = 1){
    $_SESSION["usuario"] = $usuario;
    header("Location: menu.php");
}else{
    header("Location: pagina_inicial.php?$erro= Usuário ou senha errados. </br>");
}


?>