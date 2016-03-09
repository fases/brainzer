<?php include "conexao.php" ?>
<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../pagina_inicial.php");
} else {
    echo "";
}
?>
<!DOCTYPE html>
<html lang="en">


    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="brainzer_icon.ico" TYPE="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <meta name="description" content="">
        <meta name="author" content="">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,700italic,900,400italic,300italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,200,100,300,500,600,800,900' rel='stylesheet' type='text/css'>

        <title>BrainZer</title>
        <!-- Bootstrap Core CSS -->
        <link href="../brainzer/PaginasComCss/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../brainzer/PaginasComCss/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../brainzer/PaginasComCss/dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../brainzer/PaginasComCss/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../brainzer/PaginasComCss/bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../brainzer/PaginasComCss/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <style>
            ment{
                text-align: center;
                background-color: #F5F5F5;

            }

            h1{
                font-family: 'Raleway',sans-serif;
                text-transform: uppercase;
                font-size: 50px;
                font-weight: 300;
                letter-spacing: 2px; 
                background-color: #fff;
                color: #337ab7;
                font-size: 80px; 
                text-align: center;
                margin-top: 0px;
                padding-bottom: 50px;


            }
            h2{
                font-family: 'Raleway',sans-serif;
                background-color: #337ab7;
            }
            h3{
                font-family: 'Raleway',sans-serif;
                color: white;
                font-size: 40px;
                background-color: #337ab7;
            }
            .butaoin{
                background: #D94848;
                background: #50b6fa;
                background-image: -webkit-linear-gradient(top, #50b6fa, #378abd);
                background-image: -moz-linear-gradient(top, #50b6fa, #378abd);
                background-image: -ms-linear-gradient(top, #50b6fa, #378abd);
                background-image: -o-linear-gradient(top, #50b6fa, #378abd);
                background-image: linear-gradient(to bottom, #50b6fa, #378abd);
                -webkit-border-radius: 10;
                -moz-border-radius: 10;
                border-radius: 10px;
                font-family: 'Raleway',sans-serif;
                color: #ffffff;
                font-size: 20px;
                padding: 10px 20px 10px 20px;
                text-decoration: none;
                margin-top: 115px;
                padding-right: 80px; 
                padding-left: 80px;
                text-align: center;
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
                font-family: 'Raleway',sans-serif;
                color: #ffffff;
                font-size: 20px;
                padding: 10px 20px 10px 20px;
                text-decoration: none;
                margin-top: 50px;
                padding-right: 80px; 
                padding-left: 80px;
                text-align: center;
            }

            .butao:hover {
                background: #50b6fa;
                background-image: -webkit-linear-gradient(top, #50b6fa, #378abd);
                background-image: -moz-linear-gradient(top, #50b6fa, #378abd);
                background-image: -ms-linear-gradient(top, #50b6fa, #378abd);
                background-image: -o-linear-gradient(top, #50b6fa, #378abd);
                background-image: linear-gradient(to bottom, #50b6fa, #378abd);
                text-decoration: none;
            }
            #video{
                display: none;
                text-align: center;
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
                background-color: #337ab7;
            }
            #orientacao{
                background-color: #337ab7;
                border-top:1px solid #ddd;
                padding:10px 15px;
                border-bottom:1px solid transparent;
                border-top-left-radius:15px;
                border-top-right-radius:15px;
                border-bottom-left-radius:15px;
                border-bottom-right-radius:15px;
                width: 60%;
                height: 500px;
                border-color:#ddd;
                margin: 0 auto;
                text-align: center;

            }
            .perguntas{
                background-color: #337ab7;
                border-top:1px solid #ddd;
                padding:10px 15px;
                border-bottom:1px solid transparent;
                border-top-left-radius:15px;
                border-top-right-radius:15px;
                border-bottom-left-radius:15px;
                border-bottom-right-radius:15px;
                width: 60%;
                height: 500px;
                margin: 0 auto;
                text-align: center;

            }
            .texto{
                background-color: #337ab7;
                color: #f5f5f5;
            }
            .div{
                width: 100px;
                height: 100px;
                background: #fff;
                margin: 0 auto; width: 30%;
                font-size: 14px;
                margin-top: 30px;
                margin-right: 35px;
                margin-left: 30px;
                color: #333;
                font-family: 'Raleway',sans-serif;
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

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #008DCE; padding-top: 10px;">
                <div class="navbar-header">

                    <a class="navbar-brand" style="background-color: #008DCE; color: #fff; height: auto !important; font-family: 'Pacifico',cursive; font-size: 34px !important; margin-left: 10px; margin-top: -8px;" href="../brainzer/PaginasComCss/pages/index.php">BrainZer</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a style="background-color: #008DCE;" data-toggle="dropdown" href="#">
                            <img src="../brainzer/PaginasComCss/images/lista.png" widht="20px" height="20px" style="margin-top: -8px;">
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Mentalizando Frutas</strong>
                                            <span class="pull-right text-muted">10% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                <span class="sr-only">10% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Mentalizando Animais</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Mentalizando Objetos</strong>
                                            <span class="pull-right text-muted">30% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                <span class="sr-only">30% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Quantos</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Caça-palavras</strong>
                                            <span class="pull-right text-muted">50% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                                <span class="sr-only">50% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Ver todos os jogos</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a style="background-color: #008DCE;" data-toggle="dropdown" href="#">
                            <img src="../brainzer/PaginasComCss/images/usuario.png" widht="20px" height="20px" style="margin-top: -8px;">
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="../brainzer/PaginasComCss/pages/logout.php"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation" style="width: 200px;">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu" style="font-family: 'Raleway',sans-serif; font-size: 18px; height: 800px;">

                            <li>
                                <a style="color: #008DCE;" href="ranking.php"><img src="../brainzer/PaginasComCss/images/ranking.png" widht="25px" height="25px"> Ranking</a>
                            </li>


                            <li>
                                <a style="color: #008DCE;" href="../brainzer/PaginasComCss/pages/logout.php"><img src="../brainzer/PaginasComCss/images/logout.png" widht="25px" height="25px"> Sair</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <h1> Mentalizando </h1>
                <div id="orientacao">
                    <h3><br> No jogo mentalizando você terá que: <br>
                        - Assistir um vídeo; <br>
                        - Responder perguntas sobre o vídeo. </h3>
                    <h3 id="h3"> Preste bastante atenção no vídeo. <br><br></h3>
                    <input class="butao" type="button" value="Começar" id="comecar"/>
                </div>
                <div id = "video">
                    <?php
                    $id_jogo = 1;
                    $nivel = 2;
                    $video = "SELECT * FROM tipo_jogo where jogo_id = $id_jogo and nivel =$nivel";

                    $res = mysqli_query($con, $video);
                    if ($res) {
                        while ($registro = mysqli_fetch_array($res)) {
                            echo "<video width = '650' height = '370' controls = 'controls' >";
                            echo "<source src = " . $registro['complemento'] . " type = 'video/mp4'>";
                            echo "<object data = '' width = '560' height = '315'>";
                            echo "<embed width = '560' height = '315' src = " . $registro['complemento'] . "/>";
                            echo "</object>";
                            echo "</video>";
                            echo "<br>";
                            echo "<br>";
                            echo "<input class='butao' type='button' value='Ir para as perguntas' id='perguntas'/>";
                        }
                    }
                    ?> 
                </div>
                <?php
                $a = 0;
                $quesito = "select * from quesito where jogo_id = $id_jogo and tipojogo_id = $nivel";
                $result = mysqli_query($con, $quesito);
                if ($result) {
                    echo "<form method='post' action='mentalizando_animais_correcao1.php'>";
                    while ($reg = mysqli_fetch_array($result)) {
                        $a++;
                        echo "<div id='perg$a' class= 'perguntas'> ";
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

                    echo "<input type='submit' class='butao' id='finalizar' style='margin-top: 1%; margin-left: 40%; margin-right: 35%; padding-right: 80px; padding-left: 80px; text-align: center; font-family: 'Raleway',sans-serif;' value='Finalizar'/>";

                    echo "</form>";
                }
                //$mysqli_close($con);
                ?>

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../brainzer/PaginasComCss/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../brainzer/PaginasComCss/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../brainzer/PaginasComCss/bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../brainzer/PaginasComCss/bower_components/raphael/raphael-min.js"></script>
        <script src="../brainzer/PaginasComCss/bower_components/morrisjs/morris.min.js"></script>
        <script src="../brainzer/PaginasComCss/js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../brainzer/PaginasComCss/dist/js/sb-admin-2.js"></script>

    </body>

</html>
