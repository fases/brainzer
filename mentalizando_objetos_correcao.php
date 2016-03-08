<?php include 'conexao.php';

        session_start();
/*
        if (!isset($_SESSION["usuario"])) {
            header("Location: pagina_inicial.php");
        } else {
            $pegar = "SELECT id FROM usuario WHERE user = '".$_SESSION["usuario"]."'";
            $sql = mysqli_query($con, $pegar);
            if ($sql) {
                while ($reg = mysqli_fetch_array($sql)) {
                    $id_user = $reg["id"];
                }
            }
        }*/
           ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #respostascertas{
                display: block;
            }
            *{
                text-align: center;
                background-color: #008cde;

            }

            h1{
                font-family: 'Pacifico', cursive;
                color: white;
                font-size: 70px;
            }
            h3{
                font-family: 'Exo 2', sans-serif;
                color: white;
                font-size: 25px;
            }
            .butao{
                font-size: 50%;
                border-radius: 6px;
                display: inline-block;
                padding: 15px 20px;
                font-size: 18px;
                background-color: #fff;
            }
        </style>
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script>
         //EXIBINDO A CORREÇÃO
            $(document).ready(function() {
                $('#correcao').click(function() {
                    $('#respostascertas').show('fast');
                    $('#final').hide('fast');

                });
            });
            function responderNovamente(){
                    location.href="mentalizando_frutas.php";

            }
            function sair(){
                location.href="PaginasComCss/pages/index.php";
            }

        </script>
    </head>
    <body>
        <div id="final">

            <?php
            $id_jogo = 1;
            $tipo = 7;


            $resposta[1] = (isset($_POST["respcerta1"]) ? $_POST["respcerta1"] : null);
            $resposta[2] = (isset($_POST["respcerta2"]) ? $_POST["respcerta2"] : null);
            $resposta[3] = (isset($_POST["respcerta3"]) ? $_POST["respcerta3"] : null);
            $resposta[4] = (isset($_POST["respcerta4"]) ? $_POST["respcerta4"] : null);
            $resposta[5] = (isset($_POST["respcerta5"]) ? $_POST["respcerta5"] : null);
            $resposta[6] = (isset($_POST["respcerta6"]) ? $_POST["respcerta6"] : null);
            $resposta[7] = (isset($_POST["respcerta7"]) ? $_POST["respcerta7"] : null);
            $resposta[8] = (isset($_POST["respcerta8"]) ? $_POST["respcerta8"] : null);

            $erros = 0;
            $numero = 0;
            $pontos = 0;
            $query = "SELECT * FROM quesito where jogo_id ='$id_jogo' and tipojogo_id='$tipo';";
            $results = mysqli_query($con, $query);
            if ($results) {
                while ($registro = mysqli_fetch_array($results)) {
                    $numero++;
                    if ($registro["respostaCorreta"] != $resposta[$numero]) {
                        $erros++;
                    } else {
                  $pontos = $pontos + $registro["pontuacao_padrao"];

                    }
                }
            }
            //INSERINDO OS DADOS NA TABELA RANKING

                  $ranking = "INSERT INTO ranking(usuario_id, jogo_id, pontuacao, dh) VALUES ('$id_user','$id_jogo','$pontos', now())";
                  $sql = mysqli_query($con, $ranking);

                // ~~~~ //

            if ($erros == 0) {
                echo "<h3> Você acertou todas as questões Parabéns!</h3>";
         echo $pontos;
            } else {
                echo "<h3> Você errou " . $erros . " questões.</h3>";
                echo $pontos;
            }
            mysqli_close($con);
            ?>
            <input type='button' class='butao' id='correcao' value='Ver Correção'/>
            <input type='button' class='butao' id='respnova' value='Responder Novamente' onclick="responderNovamente()"/>
            <input type='button' class='butao' id='sair' value='Sair' onclick="sair()"/>

              </div>


        <?php
                include "conexao.php";
        echo "<div id='respostascertas' style='display: none; text-align: center'>";

        $a = 0;
        $quesitos = "select * from quesito where jogo_id = $id_jogo and tipojogo_id = $tipo";
        $resultados = mysqli_query($con, $quesitos);
        if ($resultados) {
            while ($reg = mysqli_fetch_array($resultados)) {
                $a++;
                echo "<h3>$a" . "ª Pergunta: " . $reg['pergunta'] . "</h3> ";
                $quesito_id = $reg['id'];
                if ($reg['id']) {
                    $pergunta = $reg['id'];
                    $resp = "select respostaCorreta from quesito where jogo_id = $id_jogo and tipojogo_id = $id_jogo and id= $pergunta";
                    $resultado = mysqli_query($con, $resp);
                    if ($resultado) {
                        while ($regis = mysqli_fetch_array($resultado)) {
                            echo "<h4>" . $regis['respostaCorreta'] . "</h4>";
                        }
                    }
                }
            }
        }
        echo "<input type='button' class='butao' value='Sair' onclick='sair()'>";
        echo '</div>';
        ?>



    </body>
</html>