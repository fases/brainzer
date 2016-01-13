<?php
session_start();

if(isset($_SESSION["usuario"])){
	session_unset($_SESSION["usuario"]);
}

header("Location: pagina_inicial.php?sair=Volte sempre! </br>");
?>