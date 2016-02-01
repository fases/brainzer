<?php
session_start();

if(isset($_SESSION["usuario"])){
	session_unset($_SESSION["usuario"]);
}

header("Location: login.html");
?>