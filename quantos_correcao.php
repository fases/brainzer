<?php include 'conexao.php'; ?>
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
                location.href="menu.php";
            }
   
        </script>
    </head>
    <body>
        <div id="final">

            <?php
            $id_jogo = 2;
            $nivel = 3;


            $resposta[1] = (isset($_POST["respcerta1"]) ? $_POST["respcerta1"] : null);
            $resposta[2] = (isset($_POST["respcerta2"]) ? $_POST["respcerta2"] : null);
            $resposta[3] = (isset($_POST["respcerta3"]) ? $_POST["respcerta3"] : null);
            $resposta[4] = (isset($_POST["respcerta4"]) ? $_POST["respcerta4"] : null);
            $resposta[5] = (isset($_POST["respcerta5"]) ? $_POST["respcerta5"] : null);
            $resposta[6] = (isset($_POST["respcerta6"]) ? $_POST["respcerta6"] : null);

            $erros = 0;
            //for ($numero = 0; $numero <= 3; $numero++) {
            //$quesito_atual = $_GET["quesito".$numero];
            $numero = 0;
            $query = "SELECT respostaCorreta FROM quesito where jogo_id ='$id_jogo' and tipojogo_id='$nivel';";
            $results = mysqli_query($con, $query);
            if ($results) {
                while ($registro = mysqli_fetch_array($results)) {
                    $numero++;
                    if ($registro["respostaCorreta"] != $resposta[$numero]) {
                        //echo "$resposta[$numero]<br>";
                        //echo $registro["respostaCorreta"];
                        $erros++;
                    } else {
                        //echo"Deu errado";
                        //echo "$resposta[$numero]<br>";
                        //echo $registro["respostaCorreta"];
                    }
                }
            }
            //}
            if ($erros == 0) {
                echo "<h3> Você acertou todas as questões Parabéns!</h3>";
            } else {
                echo "<h3> Você errou " . $erros . " questões.</h3>";
            }
            mysqli_close($con);
            ?>
            <input type='button' id='correcao' value='Ver Correção'/>
            <input type='button' id='respnova' value='Responder Novamente' onclick="responderNovamente()"/>
            <input type='button' id='sair' value='Sair' onclick="sair()"/>
            
              </div>
        
        
                <?php
                include "conexao.php";
               echo "<div id='respostascertas' style='display: none;'>";

                $a = 0;
                $quesitos = "select * from quesito where jogo_id = $id_jogo and tipojogo_id = $nivel";
                $resultados = mysqli_query($con, $quesitos);
                if ($resultados) {
                    while ($reg = mysqli_fetch_array($resultados)) {
                    $a++;
                        echo "<h3>$a" . "ª Pergunta: ". $reg['pergunta'] . "</h3> ";
                        $quesito_id = $reg['id'];
                if ($reg['id']) {
                    $pergunta = $reg['id'];
                    $resp = "select respostaCorreta from quesito where jogo_id = $id_jogo and tipojogo_id = $nivel and id= $pergunta";
                    $resultado = mysqli_query($con, $resp);
                    if ($resultado) {
                        while ($regis = mysqli_fetch_array($resultado)) {
                            echo "<h4>".$regis['respostaCorreta']."</h4>";
                        }
                    }
                }
            }
        }
         echo "<input type='button' value='Sair' onclick='sair()'>";
         echo '</div>';
                        ?>
                   


    </body>
</html>
