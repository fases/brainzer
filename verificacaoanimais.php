<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<?php
$pergunta1 = $_POST["pergunta1"];
$pergunta2 = $_POST['pergunta2'];
$pergunta3 = $_POST['pergunta3'];
$pergunta4 = $_POST['pergunta4'];

if(($pergunta1 == '3') && ($pergunta2 == '6') && ($pergunta3 == '12') && ($pergunta4 == '15')){
     echo "Acertou todas as questões! Parabéns!";
     header("Location: frutas.php");
}else{
    ('#bt1').show('slow');
    ('#bt').hide('fast');  
    echo "Resposta Errada. Você tem a opção de verificar as resposta ou tentar novamente!";
}
?>
        </body>
</html>