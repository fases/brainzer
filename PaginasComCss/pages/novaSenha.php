<?php
 include "conexao.php";
?>
<!DOCTYPE>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>BrainZer</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    

    <body>
        <div class="logo">
        <p>BrainZer</p>
    </div>
           <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center;">Cadastrar nova senha</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="verificalogin.php" method="post">
                            <fieldset>
                                
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Digite a senha atual" name="senha_a" type="password" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Digite uma nova senha" name="senha" type="password" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Confirme sua nova senha" name="senha_c" type="password" required>
                                </div>
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Enviar">
                                <a href="gerarSenha.php" class="btn btn-lg btn-succes btn-block">Voltar</a>
        </form>
        <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    </body>
</html>