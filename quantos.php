<?php include "conexao.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            *{
                text-align: center;
                background-color: #F5F5F5;


            }

            h1{
                font-family: 'Pacifico', cursive;
                color: #008cde;
                font-size: 70px;
            }
            h2{
                font-family: 'Exo 2', sans-serif;
                background-color: #008cde;
            }
            h3{
                font-family: 'Exo 2', sans-serif;
                color: white;
                font-size: 25px;
                background-color: #008cde;
            } 
            .butao {
                background: #50b6fa;
                background-image: -webkit-linear-gradient(top, #50b6fa, #378abd);
                background-image: -moz-linear-gradient(top, #50b6fa, #378abd);
                background-image: -ms-linear-gradient(top, #50b6fa, #378abd);
                background-image: -o-linear-gradient(top, #50b6fa, #378abd);
                background-image: linear-gradient(to bottom, #50b6fa, #378abd);
                -webkit-border-radius: 10;
                -moz-border-radius: 10;
                border-radius: 10px;
                font-family: Arial;
                color: #ffffff;
                font-size: 20px;
                padding: 10px 20px 10px 20px;
                text-decoration: none;
                margin-bottom: 20px
            }

            .butao:hover {
                background: #3cb0fd;
                background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
                background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
                background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
                background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
                background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
                text-decoration: none;
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
                color: #B52139;
                background-color: #008cde;            
            }
            #orientacao{
                background-color: #008cde;
                border-top:1px solid #ddd;
                padding:10px 15px;
                border-bottom:1px solid transparent;
                border-top-left-radius:15px;
                border-top-right-radius:15px;
                border-bottom-left-radius:15px;
                border-bottom-right-radius:15px;
                width: 50%;
                background-color:#008cde;
                border-color:#ddd;
                margin: 0 auto;
            }
            .perguntas{
                background-color: #008cde;
                border-top:1px solid #ddd;
                padding:10px 15px;
                border-bottom:1px solid transparent;
                border-top-left-radius:15px;
                border-top-right-radius:15px;
                border-bottom-left-radius:15px;
                border-bottom-right-radius:15px;
                width: 50%;
                background-color:#008cde;
                border-color:#ddd;
                margin: 0 auto;
            }
            .texto{
                background-color: #008cde;
                color: #f5f5f5;
            }
            .div{
                width: 130px;
                height: 80px;
                margin: 20px;
                background:  #fff;
            }
        </style> 
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script>
            //EXIBINDO A PRIMEIRA PERGUNTA
            $(document).ready(function () {
                $('#comecar').click(function () {
                    $('#perg1').show('fast');
                    $('#orientacao').hide('fast');

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

                });
            });
            //EXIBINDO A QUINTA PERGUNTA
            $(document).ready(function () {
                $('#proximo4').click(function () {
                    $('#perg5').show('fast');
                    $('#perg4').hide('fast');
                });
            });
            //EXIBINDO A SEXTA PERGUNTA
            $(document).ready(function () {
                $('#proximo5').click(function () {
                    $('#perg6').show('fast');
                    $('#perg5').hide('fast');
                    $('#finalizar').show('fast');
                    $('#proximo6').hide('fast');

                });
            });
            //EXIBINDO A DIV FINAL
            // $(document).ready(function() {
            // $('#finalizar').click(function() {
            //   $('#final').show('fast');
            //  $('#perg6').hide('fast');

            // });
            //});
            //ONMOUSEOVER E ONMOUSEOUT - BOTÕES DAS RESPOSTAS
            $(document).ready(function () {
                $('#resp11, #resp12, #resp13, #resp14, #resp15,#resp16').mouseover(function () {
                    $('#resp11, #resp12, #resp13, #resp14, #resp15,#resp16').css('background-color', '#008CDE');
                });
                $('#resp11, #resp12, #resp13, #resp14, #resp15,#resp16').mouseout(function () {
                    $('#resp11, #resp12, #resp13, #resp14, #resp15,#resp16').css('background-color', '#fff');
                });
                //
                $('#resp21, #resp22, #resp23, #resp24, #resp25,#resp26').mouseover(function () {
                    $('#resp21, #resp22, #resp23, #resp24, #resp25,#resp26').css('background-color', '#008CDE');
                });
                $('#resp21, #resp22, #resp23, #resp24, #resp25,#resp26').mouseout(function () {
                    $('#resp21, #resp22, #resp23, #resp24, #resp25,#resp26').css('background-color', '#fff');
                });
                //
                $('#resp31, #resp32, #resp33, #resp34, #resp35,#resp36').mouseover(function () {
                    $('#resp31, #resp32, #resp33, #resp34,#resp35,#resp36').css('background-color', '#008CDE');
                });
                $('#resp31, #resp32, #resp33, #resp34, #resp35,#resp36').mouseout(function () {
                    $('#resp31, #resp32, #resp33, #resp34, #resp35,#resp36').css('background-color', '#fff');
                });
                //
                $('#resp41, #resp42, #resp43, #resp44, #resp45,#resp46').mouseover(function () {
                    $('#resp41, #resp42, #resp43, #resp44, #resp45,#resp46').css('background-color', '#008CDE');
                });
                $('#resp41, #resp42, #resp43, #resp44, #resp45,#resp46').mouseout(function () {
                    $('#resp41, #resp42, #resp43, #resp44, #resp45,#resp46').css('background-color', '#fff');
                });
            });

            $(function () {
                $('#resp11, #resp12, #resp13, #resp14, #resp15,#resp16').click(function () {
                    $('#resp11,#resp12, #resp13, #resp14, #resp15,#resp16').css('background', '#008CDE');
                });
                $('#resp21, #resp22, #resp23, #resp24, #resp25,#resp26').click(function () {
                    $('#resp21, #resp22, #resp23, #resp24, #resp25,#resp26').css('background', '#008CDE');
                });
                $('#resp31, #resp32, #resp33, #resp34, #resp35,#resp36').click(function () {
                    $('#resp31, #resp32, #resp33, #resp34,#resp35,#resp36').css('background', '#008CDE');
                });
                $('#resp41, #resp42, #resp43, #resp44, #resp45,#resp46').click(function () {
                    $('#resp41, #resp42, #resp43, #resp44, #resp45,#resp46').css('background', '#008CDE');
                });
            })
            //PASSANDO OS VALORES DOS BOTÕES PARA O HIDDEN
            function passar(valor, elemento) {
                document.getElementById('respcerta' + elemento).value = valor;
            }
        </script>
    </head>

    <body>
        <h1> "Quantos?" </h1>
        <div id="orientacao">
            <h3> No jogo dos "Quantos?" você terá que: <br><br>
                - Responder perguntas sobre quantidades. </h3>
            <input type="button" class="butao" value="Começar" id="comecar"/>
        </div>
        <div>
            <?php
            $id_jogo = 2;
            $nivel = 3;
            $a = 0;

            $quesito = "select * from quesito where jogo_id = $id_jogo and tipojogo_id = $nivel";
            $result = mysqli_query($con, $quesito);
            if ($result) {
                echo "<form method='post' action='quantos_correcao.php'>";
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
        </div>
    </body>
</html>
