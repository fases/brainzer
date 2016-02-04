<?php
include 'conexao.php';
?>
<html>
    <head>
        <title></title>
        <meta charset="utf-8"></head>
    <style type="text/css"> 
        a.nounderline:link 
        { 
            text-decoration:none; 
        } 

    </style>

    <body>
        <h3>Escolha o nível do jogo!</h3>
        <?php
        $jogo = $_GET["jogo"];
        $a = 0;
        $select_nivel = mysqli_query($con, "SELECT * FROM quesito where tipojogo_id = $jogo");
        if ($select_nivel){
            while ($registro = mysqli_fetch_array($select_nivel)) {
                $a++;
                if($jogo == 1){
                  echo "<a href='mentalizando_animais.php?jogo=$registro[tipojogo_id]&niveis=$a' class='nounderline'>Nível ".$a." </a><br>";
                }
                if($jogo == 2){
                    echo "<a href='quantos.php?jogo=$registro[tipojogo_id]&niveis=$a' class='nounderline'>Nível ".$a." </a><br>";
                }
                
            }
        }
        ?>


    </body>
</html>