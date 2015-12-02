<?php
include "conexao.php";

//Pegando os valores do formulario
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$senhac = $_POST["senha_c"];

//Verificando os campos

if((!$nome) || (!$email) || (!$idade) || (!$usuario)){
    echo "Erro: </br>";
    
    if(!$nome){
        echo "Nome é um campo obrigatório. </br>";
    }
    if(!$email){
        echo "Email é um campo obrigatório. </br>";
    }
    if (!$idade){
        echo "Idade é um campo obrigatório. </br>";
    }
    if (!$usuario){
        echo "Usuário é um campo obrigatório. </br>";
    }
    
    include 'pagina_inicial.php';
}else{
    
    $sql_usuario = mysqli_query($con, "SELECT id FROM usuario WHERE email='$email'");
    $res_usuario = mysqli_affected_rows($sql_usuario);
    
    if($res_usuario>0){
        echo "Já existe um usuário cadastro com esse usuário. </br>";
    
        unset($usuario);
       
    }
     
        include "pagina_inicial.php";
}

//Inserindo os valores no banco e validando a senha 
$cadastro = "insert into usuario (nome, email, senha, idade, user) values ('$nome', '$email', '$senha', '$idade', '$usuario')";
$sql = mysqli_query($con, $cadastro);
if ($sql && ($senha == $senhac)){
    header("Location: pagina_inicial.php?certo=Cadastro concluido com sucesso!</br>");
}else{
    header ("Location: pagina_inicial.php?erro=As senhas não conferem</br>");
}

?>
