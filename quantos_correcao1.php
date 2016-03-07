<?php
include 'conexao.php';

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: pagina_inicial.php");
} else {
    $pegar = "SELECT id FROM usuario WHERE user = '" . $_SESSION["usuario"] . "'";
    $sql = mysqli_query($con, $pegar);
    if ($sql) {
        while ($reg = mysqli_fetch_array($sql)) {
            $id_user = $reg["id"];
        }
    }
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
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
            #respostascertas{
                display: block;
            }

            h1{
                font-family: 'Raleway',sans-serif;
                color: white;
                font-size: 70px;
            }
            h3{
                font-family: 'Raleway',sans-serif;
                color: #333;
                font-size: 30px;
                text-transform: uppercase;
                text-align: center;
                margin-top: 0px;
                margin-left: 50px;
            }
            .butao{
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
            .final{
                background-color: #fff;
                text-align: center;
                padding: 0 15px;
                min-height: 800px;

            }
        </style>
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script>
            //EXIBINDO A CORREÇÃO
            $(document).ready(function () {
                $('#correcao').click(function () {
                    $('#respostascertas').show('fast');
                    $('#final').hide('fast');

                });
            });
            function responderNovamente() {
                location.href = "quantos1.php";

            }
            function sair() {
                location.href = "PaginasComCss/pages/index.php";
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
                                <a style="color: #008DCE;" href="#"><img src="../brainzer/PaginasComCss/images/ranking.png" widht="25px" height="25px"> Ranking</a>
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
                    $numero = 0;
                    $pontos = 0;
                    $query = "SELECT * FROM quesito where jogo_id ='$id_jogo' and tipojogo_id='$nivel';";
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
                        echo "<h3 style=''><br>Você acertou todas as questões Parabéns!</h3><br>";
                    } else {
                        echo "<h3><br>Você errou " . $erros . " questões.</h3><br>";
                    }
                    mysqli_close($con);
                    ?>
                    <div style="margin-left: 300px;">
                        <input type='button' class='butao' id='correcao' value='Ver Correção'/>
                        <input type='button' class='butao' id='respnova' value='Responder Novamente' onclick="responderNovamente()"/>
                        <input type='button' class='butao' id='sair' value='Sair' onclick="sair()"/>
                    </div>
                </div>


                <?php
                include "conexao.php";
                echo "<div id='respostascertas' style='display: none; text-align: center'>";

                $a = 0;
                $quesitos = "select * from quesito where jogo_id = $id_jogo and tipojogo_id = $nivel";
                $resultados = mysqli_query($con, $quesitos);
                if ($resultados) {
                    while ($reg = mysqli_fetch_array($resultados)) {
                        $a++;
                        echo '<br><br>';
                        echo "<h3>$a" . "ª Pergunta: " . $reg['pergunta'] . "</h3> ";
                        $quesito_id = $reg['id'];
                        if ($reg['id']) {
                            $pergunta = $reg['id'];
                            $resp = "select respostaCorreta from quesito where jogo_id = $id_jogo and tipojogo_id = $nivel and id= $pergunta";
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


            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
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
