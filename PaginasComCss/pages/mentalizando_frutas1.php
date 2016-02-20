<?php
        session_start();
        include 'conexao.php';
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
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BrainZer</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


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

            $(function(){
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
        <style>
            .teste{
                position:relative;
                min-height:1px;
                padding-right:15px;
                padding-left:15px;
                float:left;
            }
          h3{
              font-family: 'Exo 2', sans-serif;
              color: white;
              font-size: 25px;
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
          #orientacao{
              float: left;
              position:relative;
          }
        </style>
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">BrainZer</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Mentalizando Frutas</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
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
                                        <strong>Quantos</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
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
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuração</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Jogos</a>
                        </li>
                        <li>
                            <a href="nivel.php"><i class="fa fa-dashboard fa-fw"></i> Níveis</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Mentalizando Frutas </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
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

            echo "<input type='submit' class='butao' id='finalizar' value='Finalizar'/>";

            echo "</form>";
        }
        //$mysqli_close($con);
        ?>
        
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
