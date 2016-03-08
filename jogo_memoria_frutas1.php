<?php
include 'conexao.php';

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: ../pagina_inicial.php");
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

            h1{
                font-family: 'Raleway',sans-serif;
                text-transform: uppercase;
                font-size: 50px;
                font-weight: 300;
                letter-spacing: 2px; 
                background-color: #fff;
                color: #f0ad4e;
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
                background-color: #f0ad4e;
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
            #final{
                display: block;
            }
            #finalizar{
                display: none;

            }
            #h3{
                color: #B52139;
                background-color: #f0ad4e;
            }
            #orientacao{
                background-color: #f0ad4e;
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
            .texto{
                background-color: #f0ad4e;
                color: #f5f5f5;
            }
            table{
                width: 200px;
                height: 40%;
            }
            img{


            }

            #img0, #img1,#img2, #img3, #img4, #img5, #img6, #img7, #img8, #img9, #img10, #img11{
                display: none;
                padding-right: 20px;
                padding-top: 20px;
            }
            #princy{
                display: none;
                margin-left: 150px;
                

            }

        </style>
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
        <script>
            //EXIBINDO AS CARTAS E DESVIRANDO NOVAMENTE
            setTimeout(function() {
                $("#img0, #img1,#img2, #img3, #img4, #img5, #img6, #img7, #img8, #img9, #img10, #img11, #img12").show(2000);
                $("#verso_img0, #verso_img1,#verso_img2, #verso_img3, #verso_img4, #verso_img5, #verso_img6, #verso_img7, #verso_img8, #verso_img9, #verso_img10, #verso_img11, #verso_img12").hide(2000);
            }, 1000);
            setTimeout(function() {
                $("#img0, #img1,#img2, #img3, #img4, #img5, #img6, #img7, #img8, #img9, #img10, #img11, #img12").hide(2000);
                $("#verso_img0, #verso_img1,#verso_img2, #verso_img3, #verso_img4, #verso_img5, #verso_img6, #verso_img7, #verso_img8, #verso_img9, #verso_img10, #verso_img11, #verso_img12").show(2000);
            }, 1000);

            var imgs_abertas = 0;
            var img_aberta_01 = "";
            var img_aberta_02 = "";
            var tentativas = 0;
            var tentativas2 = 0;

            function trocarImagem(img1, img2) {
                $('#' + img1).hide();
                $('#' + img2).fadeIn("slow");
                compararImagem(img1, img2);
            }
            //pontos = 0;
            function compararImagem(img1, img2) {
                if (imgs_abertas == 0) {
                    img_aberta_01 = img2;
                    imgs_abertas = 1;
                } else if (imgs_abertas == 1) {
                    img_aberta_02 = img2;
                    if ($('#' + img_aberta_01).attr("src") != $('#' + img_aberta_02).attr("src")) {
                        setTimeout(function() {
                            $('#' + img_aberta_01).hide();
                            $('#' + img_aberta_02).hide();
                            $('#' + "verso_" + img_aberta_01).fadeIn();
                            $('#' + "verso_" + img_aberta_02).fadeIn();
                        }, 800);
                        tentativas++;
                    }
                    imgs_abertas = 0;
                    tentativas2++;
                }

            }
            //CÁLCULO DA PONTUAÇÃO
            tent = parseInt(tentativas) + parseInt(tentativas2);
            pontuacao = 6000 / tent;

            // CHAMANDO O JOGO
            $(document).ready(function() {
                $('#comecar').click(function() {
                    $('#princy').show('fast');
                    $('#orientacao').hide('fast');

                });
            });
            function sair() {
                //alert (tent);
                alert(pontuacao);
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
                        <ul class="nav" id="side-menu" style="font-family: 'Raleway',sans-serif; font-size: 18px; height: 900px;">

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

            <div id="page-wrapper" style="height: 900px;">
                <h1>Jogo da Memória</h1>
                <div id='orientacao'>
                    <h3> No jogo da memória você terá que: <br>
                        - Memorizar as cartas; <br>
                        - Encontrar os pares das frutas; <br>
                        <h3 id="h3"> Preste bastante atenção quando as cartas forem viradas automaticamente. </h3>
                        <input class="butao" type="button" value="Começar" id="comecar"/>
                </div>
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
                        //shuffle($imagens);
                        //echo sizeof($imagens);
                        $i = 0;
                        for ($l = 0; $l <= 2; $l++) {
                            echo "<tr id='i.l_$i'>";
                            for ($c = 0; $c <= 3; $c++) {
                                echo "<td><img style='width: 200px; height: 200px; padding-right: 20px; padding-top: 20px;' src=" . $imagens[$i] . " alt='Bugou' id='img$i'/>
                              <img style='width: 200px; height: 200px; padding-right: 20px; padding-top: 20px;' src = '$parteTras' alt= 'verso' id='verso_img$i' onclick=\"trocarImagem(this.id, 'img$i')\"/> </td> ";
                                $i++;
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    echo "</div>";
                    echo "<input type='button' value= 'Finalizar' class='butao' id='botao' onclick='sair()'/>";
                    echo "</div>";
                    //$mysqli_close($con);
                    ?>
                </div>
                <div> 
                    <?php
                    $pontos = (isset($_POST["pontuacao"]) ? $_POST["pontuacao"] : null);
                    //INSERINDO OS DADOS NA TABELA RANKING

                    /* $ranking = "INSERT INTO ranking(usuario_id, jogo_id, pontuacao, dh) VALUES ('$id_user','$id_jogo','$pontos', now())";
                      $sql = mysqli_query($con, $ranking);
                     */
                    // ~~~~ //

                    echo $pontos;
                    ?>

                </div>

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
