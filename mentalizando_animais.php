<?php
include "conexao.php";
$a = 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            #video{
                display: none;
            }
            #perg1, #perg2, #perg3, #perg4{
                display: none;
            }
            #final{
                display: block;
            }
            #finalizar{
                display: none;
            }
            #h3{
                color: red;
            }
            .div{
                width: 130px;
                height: 80px;
                color: white;
                margin: 20px;
                background:  #0066ff;
            }
        </style>
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script type="text/javascript">
            //EXIBINDO O VÍDEO
            $(document).ready(function () {
                $('#comecar').click(function () {
                    $('#video').show('fast');
                    $('#orientacao').hide('fast');

                });
            });
            //EXIBINDO A PRIMEIRA PERGUNTA
            $(document).ready(function () {
                $('#perguntas').click(function () {
                    $('#perg1').show('fast');
                    $('#video').hide('fast');

                });
            });
            //EXIBINDO A SEGUNDA PERGUNTA
            $(document).ready(function () {
                $('#proximo1').click(function () {
                    $('#perg2').show('fast');
                    $('#perg1').hide('fast');

                });
            });
            //EXIBINDO A TERCEIRA PERGUNTA
            $(document).ready(function () {
                $('#proximo2').click(function () {
                    $('#perg3').show('fast');
                    $('#perg2').hide('fast');

                });
            });
            //EXIBINDO A QUARTA PERGUNTA
            $(document).ready(function () {
                $('#proximo3').click(function () {
                    $('#perg4').show('fast');
                    $('#perg3').hide('fast');
                    $('#finalizar').show('fast');
                    $('#proximo4').hide('fast');

                });
            });
            //EXIBINDO A DIV FINAL
            $(document).ready(function () {
                $('#finalizar').click(function () {
                    $('#final').show('fast');
                    $('#perg4').hide('fast');

                });
            });
            //ONMOUSEOVER E ONMOUSEOUT - BOTÕES DAS RESPOSTAS
            $(document).ready(function () {
                $('#resp1, #resp2, #resp3, #resp4').mouseover(function () {
                    $('#resp1, #resp2, #resp3, #resp4').css('background-color', '#fc510d');
                });
                $('#resp11, #resp12, #resp13, #resp14').mouseout(function () {
                    $('#resp11, #resp12, #resp13, #resp14').css('background-color', '#0066ff');
                });
                //
                $('#resp21, #resp22, #resp23, #resp24').mouseover(function () {
                    $('#resp21, #resp22, #resp23, #resp24').css('background-color', '#fc510d');
                });
                $('#resp21, #resp22, #resp23, #resp24').mouseout(function () {
                    $('#resp21, #resp22, #resp23, #resp24').css('background-color', '#0066ff');
                });
                //
                $('#resp31, #resp32, #resp33, #resp34').mouseover(function () {
                    $('#resp31, #resp32, #resp33, #resp34').css('background-color', '#fc510d');
                });
                $('#resp31, #resp32, #resp33, #resp34').mouseout(function () {
                    $('#resp31, #resp32, #resp33, #resp34').css('background-color', '#0066ff');
                });
                //
                $('#resp41, #resp42, #resp43, #resp44').mouseover(function () {
                    $('#resp41, #resp42, #resp43, #resp44').css('background-color', '#fc510d');
                });
                $('#resp41, #resp42, #resp43, #resp44').mouseout(function () {
                    $('#resp41, #resp42, #resp43, #resp44').css('background-color', '#0066ff');
                });
            });
            //PASSANDO OS VALORES DOS BOTÕES PARA O HIDDEN
            function passar(valor, elemento) {
                document.getElementById('respcerta' + elemento).value = valor;
            }
        </script>
    </head>

    <body>
        <h1> Mentalizando </h1>
        <div id="orientacao">
            <h3> No jogo mentalizando você terá que: <br>
                - Assistir um vídeo; <br>
                - Responder perguntas sobre o vídeo. </h3>
            <h3 id="h3"> Preste bastante atenção no vídeo. </h3>
            <input type="button" value="Começar" id="comecar"/>
        </div>
        <div id = "video">
            <?php
            $id_jogo = 1;
            $video = "select * from jogo where id ='$id_jogo'";

            $res = mysqli_query($con, $video);
            if ($res) {
                while ($registro = mysqli_fetch_array($res)) {
                    echo "<video width = '560' height = '315' controls = 'controls' >";
                    echo "<source src = " . $registro['complemento'] . " type = 'video/mp4'>";
                    echo "<object data = '' width = '560' height = '315'>";
                    echo "<embed width = '560' height = '315' src = " . $registro['complemento'] . "/>";
                    echo "</object>";
                    echo "</video>";
                    echo "<br>";
                    echo "<br>";
                    echo "<input type='button' value='Ir para as perguntas' id='perguntas'/>";
                }
            }
            ?> 
        </div>

        <?php
        //$a = 0;
        $quesito = "select * from quesito where jogo_id='$id_jogo'";
        $result = mysqli_query($con, $quesito);
        if ($result) {
            //echo "<form /action='mentalizando_animais_correcao.php' method='get'>";
            echo "<form action='mentalizando_animais_correcao.php' method='get'>";
            while ($reg = mysqli_fetch_array($result)) {
                $a++;
                echo "<div id='perg$a'> ";
                echo "<h2>$a" . "ª Pergunta </h2>";
                echo "<h3>" . $reg['pergunta'] . "</h3> ";
                $quesito_id = $reg['id'];
                if ($reg['id']) {
                    $pergunta = $reg['id'];
                    $resp = "select * from respostas where quesito_id = '$pergunta'";
                    $resultado = mysqli_query($con, $resp);
                    if ($resultado) {
                        while ($regis = mysqli_fetch_array($resultado)) {
                            echo "<input type='button' class='div' id='resp1$a' onclick='passar(this.value,$a);' name='resp1'  value= '" . $regis['alternativa1'] . "'/>";
                            echo "<input type='button' class='div' id='resp2$a' onclick='passar(this.value,$a);' name='resp2'  value= '" . $regis['alternativa2'] . "'/> <br> <br>";
                            echo "<input type='button' class='div' id='resp3$a' onclick='passar(this.value,$a);' name='resp3'  value= '" . $regis['alternativa3'] . "'/>";
                            echo "<input type='button' class='div' id='resp4$a' onclick='passar(this.value,$a);' name='resp4'  value= '" . $regis['alternativa4'] . "'/> <br>";
                            echo "<input type='hidden' class='div' id='respcerta$a' name='respcerta$a' value=''/> <br>";
                            echo "<input type='hidden' class='div' id='quesito_id' name='quesito$a' value='$quesito_id'/> <br>";
                            echo "<input type='button' id='proximo$a' value='Próximo'/>";
                        }
                    }
                }
                echo "</div>";
            }

            echo "<input type='submit' id='finalizar' value='Finalizar'/>";
            echo "</form>";
        }
        //$mysqli_close($con);
        ?>

        <div id="final">
            <?php
            $resposta[0] = (isset($_GET["respcerta1"]) ? $_GET["respcerta1"] : null);
            $resposta[1] = (isset($_GET["respcerta2"]) ? $_GET["respcerta2"] : null);
            $resposta[2] = (isset($_GET["respcerta3"]) ? $_GET["respcerta3"] : null);
            $resposta[3] = (isset($_GET["respcerta4"]) ? $_GET["respcerta4"] : null);

            /*$erros = 0;
            for ($numero = 0; $numero <= 3; $numero++) {
                $quesito_atual = $_POST["quesito".$numero];
                $query = "SELECT * FROM respostas inner join quesito on (respostas.quesito_id = quesito.id) where quesito.jogo_id = 1 and quesito.id = $quesito_atual";

                $results = mysqli_query($con, $query);
                if ($results) {
                    while ($registro = mysqli_fetch_array($results)) {
                        if ($registro["correta"] == $resposta[$numero]) {
                            $erros++;
                        }
                    }
                }
            }
            if ($erros == 0) {
                echo "<h3> Você acertou todas as questões Parabéns!</h3>";
            } else {
                echo "<h3> Você errou " . $erros . " questões.</h3>";
            }
            mysqli_close($con);*/
            ?>
            <input type='button' id='correcao' value='Ver Correção'/>
            <input type='button' id='respnova' value='Responder Novamente'/>
            <input type='button' id='sair' value='Sair'/>

        </div>


    </body>
</html>
