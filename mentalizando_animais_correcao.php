<?php
include "conexao.php";

            $resposta1 = $_GET["respcerta1"];
            $resposta2 = $_GET["respcerta2"];
            $resposta3 = $_GET["respcerta3"];
            $resposta4 = $_GET["respcerta4"];
            
            $pergunta0 = $_GET["quesito0"];
            $pergunta2 = $_GET["quesito1"];
            $pergunta3 = $_GET["quesito2"];
            $pergunta4 = $_GET["quesito3"];
            
            //$conf = "select * from quesito where jogo_id=$id_jogo and id= $pergunta";
            $conf = "SELECT * FROM respostas inner join quesito on (respostas.quesito_id = quesito.id) where quesito.jogo_id = 1 and quesito.id = $quesito_atual";
            $results = mysqli_query($con, $conf);
            if ($results) {
                while ($regis = mysqli_fetch_array($results)) {
                    if (($resposta1 == $regis["correta"]) && ($resposta2 == $regis["correta"]) && ($resposta3 == $regis["correta"]) && ($resposta4 == $regis["correta"])) {

                        echo "<h3> Você acertou todas as questões Parabéns!</h3>";
                    } else {
                        $erros = 0;

                        if ($resposta1 != $regis["correta"]) {
                            $erros++;
                        }
                        if ($resposta2 != $regis["correta"]) {
                            $erros++;
                        }
                        if ($resposta3 != $regis["correta"]) {
                            $erros++;
                        }
                        if ($resposta4 != $regis["correta"]) {
                            $erros++;
                        }
                        echo "<h3> Você errou " . $erros . " questões.</h3>";
                        return false;
                    }
                }
            }
            ?>