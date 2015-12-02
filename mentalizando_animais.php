<?php include "conexao.php" ?>
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
                display: none;
            }
            #finalizar1,#finalizar2, #finalizar3, #finalizar4{
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
            $(document).ready(function () {
                $('#comecar').click(function () {
                    $('#video').show('fast');
                    $('#orientacao').hide('fast');

                });
            });
            $(document).ready(function () {
                $('#perguntas').click(function () {
                    $('#perg1').show('fast');
                    $('#video').hide('fast');

                });
            });
            $(document).ready(function () {
                $('#proximo1').click(function () {
                    $('#perg2').show('fast');
                    $('#perg1').hide('fast');

                });
            });
            $(document).ready(function () {
                $('#proximo2').click(function () {
                    $('#perg3').show('fast');
                    $('#perg2').hide('fast');

                });
            });
            $(document).ready(function () {
                $('#proximo3').click(function () {
                    $('#perg4').show('fast');
                    $('#perg3').hide('fast');
                    $('#finalizar4').show('fast');
                    $('#proximo4').hide('fast');

                });
            });
            $(document).ready(function () {
                $('#finalizar4').click(function () {
                    $('#final').show('fast');
                    $('#perg4').hide('fast');

                });
            });
            function selecaoBotao(){
                
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
            $video = "select * from jogo where id =$id_jogo";

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
        $a = 0;
        $quesito = "select * from quesito where jogo_id=$id_jogo";
        $result = mysqli_query($con, $quesito);
        if ($result) {
            while ($reg = mysqli_fetch_array($result)) {
                $a++;
                echo "<div id='perg$a'> ";
                echo "<h2>$a" . "ª Pergunta </h2>";
                echo "<h3>" . $reg['pergunta'] . "</h3> ";
                if ($reg['id']) {
                    $pergunta = $reg['id'];
                    $resp = "select * from respostas where quesito_id = '$pergunta'";
                    $resultado = mysqli_query($con, $resp);
                    if ($resultado) {
                        while ($regis = mysqli_fetch_array($resultado)) {
                            echo "<input type='button' class='div' onclick='selecaoBotao()' id='resp1$a' value= '".$regis['alternativa1']."'/>";
                            echo "<input type='button' class='div' onclick='selecaoBotao()' id='resp2$a' value= '".$regis['alternativa2']."'/> <br> <br>";
                            echo "<input type='button' class='div' onclick='selecaoBotao()' id='resp3$a' value= '".$regis['alternativa3']."'/>";
                            echo "<input type='button' class='div' onclick='selecaoBotao()' id='resp4$a' value= '".$regis['alternativa4']."'/> <br>";

                            echo "<input type='button' id='proximo$a' value='Próximo'/>";
                            echo "<input type='button' id='finalizar$a' value='Finalizar'/>";
                        }
                    }
                }
                echo "</div>";
            }
        }
        //$mysqli_close($con);
        ?>

        <div id="final">
            <h3> Você errou tantas questões! </h3>
            <input type='button' id='correcao' value='Ver Correção'/>
            <input type='button' id='respnova' value='Responder Novamente'/>
            <input type='button' id='sair' value='Sair'/>
            
        </div>


    </body>
</html>
