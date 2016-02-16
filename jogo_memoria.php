<?php
include 'conexao.php';

/* session_start();

  if (!isset($_SESSION["usuario"])) {
  header("Location: ../pagina_inicial.php");
  } else {
  $pegar = "SELECT id FROM usuario WHERE user = '".$_SESSION["usuario"]."'";
  $sql = mysqli_query($con, $pegar);
  if ($sql) {
  while ($reg = mysqli_fetch_array($sql)) {
  $id_user = $reg["id"];
  }
  }
  } */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            table{
                width: 200px;
                height: 40%;
            }
            img{
                width: 200px;
                height: 200px   ;
            }
            #img_0, #img_1,#img_2, #img_3, #img_4, #img_5, #img_6, #img_7, #img_8, #img_9, #img_10, #img_11{
                display: none;
            }

        </style>
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script>
            //EXIBINDO AS CARTAS E DESVIRANDO NOVAMENTE
            setTimeout(function() {
                $("#img_0, #img_1,#img_2, #img_3, #img_4, #img_5, #img_6, #img_7, #img_8, #img_9, #img_10, #img_11").show(2000);
                $("#verso_0, #verso_1,#verso_2, #verso_3, #verso_4, #verso_5, #verso_6, #verso_7, #verso_8, #verso_9, #verso_10, #verso_11").hide(2000);
            }, 2000);
            setTimeout(function() {
                $("#img_0, #img_1,#img_2, #img_3, #img_4, #img_5, #img_6, #img_7, #img_8, #img_9, #img_10, #img_11").hide(2000);
                $("#verso_0, #verso_1,#verso_2, #verso_3, #verso_4, #verso_5, #verso_6, #verso_7, #verso_8, #verso_9, #verso_10, #verso_11").show(2000);
            }, 2000);

            //EXIBINDO AS CARTAS
            $(document).ready(function() {
                $('#verso_0').click(function() {
                    $('#img_0').show('fast');
                    $('#verso_0').hide('fast');
                    //$("#verso_0").attr("src","imagens/banana.png");
                });
            });
            $(document).ready(function() {
                $('#verso_1').click(function() {
                    $('#img_1').show('fast');
                    $('#verso_1').hide('fast');

                });
            });
            $(document).ready(function() {
                $('#verso_2').click(function() {
                    $('#img_2').show('fast');
                    $('#verso_2').hide('fast');

                });
            });
            $(document).ready(function() {
                $('#verso_3').click(function() {
                    $('#img_3').show('fast');
                    $('#verso_3').hide('fast');

                });
            });
            $(document).ready(function() {
                $('#verso_4').click(function() {
                    $('#img_4').show('fast');
                    $('#verso_4').hide('fast');

                });
            });
            $(document).ready(function() {
                $('#verso_5').click(function() {
                    $('#img_5').show('fast');
                    $('#verso_5').hide('fast');

                });
            });
            $(document).ready(function() {
                $('#verso_6').click(function() {
                    $('#img_6').show('fast');
                    $('#verso_6').hide('fast');

                });
            });
            $(document).ready(function() {
                $('#verso_7').click(function() {
                    $('#img_7').show('fast');
                    $('#verso_7').hide('fast');

                });
            });
            $(document).ready(function() {
                $('#verso_8').click(function() {
                    $('#img_8').show('fast');
                    $('#verso_8').hide('fast');

                });
            });
            $(document).ready(function() {
                $('#verso_9').click(function() {
                    $('#img_9').show('fast');
                    $('#verso_9').hide('fast');

                });
            });
            $(document).ready(function() {
                $('#verso_10').click(function() {
                    $('#img_10').show('fast');
                    $('#verso_10').hide('fast');

                });
            });
            $(document).ready(function() {
                $('#verso_11').click(function() {
                    $('#img_11').show('fast');
                    $('#verso_11').hide('fast');

                });
            });
        </script>
    </head>
    <body><h1>teste</h1>
        <div id="princy">
            <?php
            $a = 0;
            $id_jogo = 3;
            $nivel = 1;
            $tipo_jogo = 4;


            echo "<div id='verso'>";
            $quesitos = "select * from tipo_jogo where jogo_id = $id_jogo and nivel = $nivel";
            $results = mysqli_query($con, $quesitos);
            if ($results) {
                while ($verso = mysqli_fetch_array($results)) {
                    $parteTras = $verso["complemento"];
                }
            }
            echo "<div id='img'>";

            $quesito = "select * from quesito where jogo_id = $id_jogo and tipojogo_id = $tipo_jogo";
            $result = mysqli_query($con, $quesito);



            if ($result) {

                $imagens = array();


                while ($reg = mysqli_fetch_array($result)) {
                    array_push($imagens, $reg['pergunta']);
                    array_push($imagens, $reg['respostaCorreta']);
                }
                echo "<table>";
                shuffle($imagens);
                //echo sizeof($imagens);
                $i = 0;
                for ($l = 0; $l <= 2; $l++) {
                    echo "<tr id='i.l_$i'>";
                    for ($c = 0; $c <= 3; $c++) {
                        echo "<td><img src=" . $imagens[$i] . " alt='Bugou' id='img_$i'>
                              <img src = '$parteTras' alt= 'verso' id='verso_$i'/> </td> ";
                        ;
                        $i++;
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
            echo "</div>";
            //$mysqli_close($con);
            ?>
        </div>
    </body>
</html>
