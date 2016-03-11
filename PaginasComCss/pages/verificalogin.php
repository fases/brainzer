<?php
//inicio da sessão

//inclui conexão no banco de dados
include "conexao.php";

//Recebendo parametros
$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

$senha = md5($senha);

//seleciona a tabela usuario
$query = mysqli_query($con, "SELECT id FROM usuario WHERE user = '$usuario' AND senha = '$senha' ");
$res = mysqli_num_rows($query);



if ($res == 1){
	session_start();
	$_SESSION["usuario"] = $usuario;
    header("Location: index.php?usuario=$usuario");
}else{
   //header("Location: login.html?erro=1");
   echo $senha;
   echo $usuario;
}


?>