<?php include "conexao.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
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
                font-size: 18px;
                border-radius: 6px;
                display: inline-block;
                padding: 15px 20px;
                font-size: 18px;
                background-color: #fff;
            }
            #video{
                display: none;
            }
            #perg1, #perg2, #perg3, #perg4, #perg5, #perg6{
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
        <script>
            //EXIBINDO O VÍDEO
            $(document).ready(function() {
                $('#comecar').click(function() {
                    $('#video').show('fast');
                    $('#orientacao').hide('fast');

                });
            });
            //EXIBINDO A PRIMEIRA PERGUNTA
            $(document).ready(function() {
                $('#perguntas').click(function() {
                    $('#perg1').show('fast');
                    $('#video').hide('fast');

                });
            });
            //EXIBINDO A SEGUNDA PERGUNTA
            $(document).ready(function() {
                $('#proximo1').click(function() {
                    $('#perg2').show('fast');
                    $('#perg1').hide('fast');

                });
            });
            //EXIBINDO A TERCEIRA PERGUNTA
            $(document).ready(function() {
                $('#proximo2').click(function() {
                    $('#perg3').show('fast');
                    $('#perg2').hide('fast');

                });
            });
            //EXIBINDO A QUARTA PERGUNTA
            $(document).ready(function() {
                $('#proximo3').click(function() {
                    $('#perg4').show('fast');
                    $('#perg3').hide('fast');

                });
            });
            //EXIBINDO A QUINTA PERGUNTA
            $(document).ready(function() {
                $('#proximo4').click(function() {
                    $('#perg5').show('fast');
                    $('#perg4').hide('fast');
                });
            });
            //EXIBINDO A SEXTA PERGUNTA
            $(document).ready(function() {
                $('#proximo5').click(function() {
                    $('#perg6').show('fast');
                    $('#perg5').hide('fast');
                    $('#finalizar').show('fast');
                    $('#proximo6').hide('fast');

                });
            });
            //EXIBINDO A DIV FINAL
            //$(document).ready(function() {
                //$('#finalizar').click(function() {
                   // $('#final').show('fast');
                   // $('#perg6').hide('fast');

               // });
            //});
            //ONMOUSEOVER E ONMOUSEOUT - BOTÕES DAS RESPOSTAS
            $(document).ready(function() {
                $('#resp11, #resp12, #resp13, #resp14, #resp15,#resp16').mouseover(function() {
                    $('#resp11, #resp12, #resp13, #resp14, #resp15,#resp16').css('background-color', '#fc510d');
                });
                $('#resp11, #resp12, #resp13, #resp14, #resp15,#resp16').mouseout(function() {
                    $('#resp11, #resp12, #resp13, #resp14, #resp15,#resp16').css('background-color', '#0066ff');
                });
                //
                $('#resp21, #resp22, #resp23, #resp24, #resp25,#resp26').mouseover(function() {
                    $('#resp21, #resp22, #resp23, #resp24, #resp25,#resp26').css('background-color', '#fc510d');
                });
                $('#resp21, #resp22, #resp23, #resp24, #resp25,#resp26').mouseout(function() {
                    $('#resp21, #resp22, #resp23, #resp24, #resp25,#resp26').css('background-color', '#0066ff');
                });
                //
                $('#resp31, #resp32, #resp33, #resp34, #resp35,#resp36').mouseover(function() {
                    $('#resp31, #resp32, #resp33, #resp34,#resp35,#resp36').css('background-color', '#fc510d');
                });
                $('#resp31, #resp32, #resp33, #resp34, #resp35,#resp36').mouseout(function() {
                    $('#resp31, #resp32, #resp33, #resp34, #resp35,#resp36').css('background-color', '#0066ff');
                });
                //
                $('#resp41, #resp42, #resp43, #resp44, #resp45,#resp46').mouseover(function() {
                    $('#resp41, #resp42, #resp43, #resp44, #resp45,#resp46').css('background-color', '#fc510d');
                });
                $('#resp41, #resp42, #resp43, #resp44, #resp45,#resp46').mouseout(function() {
                    $('#resp41, #resp42, #resp43, #resp44, #resp45,#resp46').css('background-color', '#0066ff');
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
            <input type="button" class="butao" value="Começar" id="comecar"/>
        </div>
        <div id = "video">
            <?php
            $id_jogo = 1;
            $nivel = 1;
            $video = "SELECT * FROM tipo_jogo where jogo_id = $id_jogo and nivel =$nivel";

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
                    echo "<input type='button' class='butao' value='Ir para as perguntas' id='perguntas'/>";
                }
            }
            ?> 
        </div>

        <?php
        $a = 0;
        $quesito = "select * from quesito where jogo_id = $id_jogo and tipojogo_id = $id_jogo";
        $result = mysqli_query($con, $quesito);
        if ($result) {
            echo "<form method='post' action='mentalizando_frutas_correcao.php'>";
            while ($reg = mysqli_fetch_array($result)) {
                $a++;
                echo "<div id='perg$a'> ";
                echo "<h2>$a" . "ª Pergunta </h2>";
                echo "<h3>" . $reg['pergunta'] . "</h3> ";
                $quesito_id = $reg['id'];
                if ($reg['id']) {
                    $pergunta = $reg['id'];
                    $resp = "select * from respostas as r inner join quesito as q on ( r.quesito_id = q.id) where q.jogo_id=$id_jogo and r.quesito_id = $pergunta";

                    $resultado = mysqli_query($con, $resp);
                    if ($resultado) {
                        while ($regis = mysqli_fetch_array($resultado)) {
                            echo "<input type='button' class='div' id='resp1$a' onclick='passar(this.value,$a);' name='resp1'  value= '" . $regis['alternativa1'] . "'/>";
                            echo "<input type='button' class='div' id='resp2$a' onclick='passar(this.value,$a);' name='resp2'  value= '" . $regis['alternativa2'] . "'/> <br> <br>";
                            echo "<input type='button' class='div' id='resp3$a' onclick='passar(this.value,$a);' name='resp3'  value= '" . $regis['alternativa3'] . "'/>";
                            echo "<input type='button' class='div' id='resp4$a' onclick='passar(this.value,$a);' name='resp4'  value= '" . $regis['alternativa4'] . "'/> <br>";
                            echo "<input type='hidden' class='div' id='respcerta$a' name='respcerta$a' value=''/> <br>";
                            echo "<input type='hidden' class='div' id='quesito_id' name='quesito$a' value='$quesito_id'/> <br>";
                            echo "<input type='button' class='butao' id='proximo$a' value='Próximo'/>";
                        }
                    }
                }
                echo "</div>";
            }

            echo "<input type='submit' class='butao' id='finalizar' value='Finalizar'/>";

            echo "</form>";
        }
        //$mysqli_close($con);
        ?>
        

    </body>
</html>
