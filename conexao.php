<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con){
    die("Erro: ".mysqli_error($con));
}
if (!mysqli_select_db($con, "brainzer")){
    die("Erro: ".mysqli_error($con));
}
?>
