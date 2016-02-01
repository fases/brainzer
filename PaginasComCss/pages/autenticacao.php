<?php
//inicio da sessão
session_start();
//inclui conexão no banco de dados
include "conexao.php";

//Recebendo parametros
$userio = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

//seleciona a tabela usuario
$query = "SELECT id FROM usuario WHERE usuario = '$user' AND senha = '$senha' ";

$res = mysqli_query($con, $query);

if (!isset($_SESSION["usuario"])){ 
    header("Location: login.html");
} else {
    header("Location: index.html");
}
?>