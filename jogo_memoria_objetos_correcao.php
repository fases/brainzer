<?php
include 'conexao.php';

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: ../pagina_inicial.php");
} else {
    $pegar = "SELECT id FROM usuario WHERE user = '" . $_SESSION["usuario"] . "'";
    $sql = mysqli_query($con, $pegar);
    if ($sql) {
        while ($reg = mysqli_fetch_array($sql)) {
            $id_user = $reg["id"];
        }
    }
}

$id_jogo = 3;
$pontuacao = $_GET["pontuacao"];
//$pontos = (isset($_POST["pontuacao"]) ? $_POST["pontuacao"] : null);
  //INSERINDO OS DADOS NA TABELA RANKING

 $ranking = "INSERT INTO ranking(usuario_id, jogo_id, pontuacao, dh) VALUES ('$id_user','$id_jogo','$pontuacao', now())";
 $sql = mysqli_query($con, $ranking);

 header("LOCATION: PaginasComCss/pages/nivel_memoria.php?jogo=$id_jogo");
 //echo $pontos;
?>


