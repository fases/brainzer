<?php
include "conexao.php";

$recupera  = isset($_POST['recupera']) ? $_POST['recupera'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
 
switch ($recupera){
 
    case "recupera" :
 
        recupera_senha($email);
        break;
 
    default :
 
        include "recuperarSenha.php";
        break;
 
}
 
function recupera_senha($email){
    include "conexao.php";
    
    if (!isset($email)){
 
        echo "Você esqueceu de preencher seu email.<br />
             <strong>Use o mesmo email que utilizou em seu cadastro.</strong><br /><br />";
 
        include "recuperarSenha.php";
 
        exit();
 
    } // Checando se o email informado está cadastrado
    
    $sql_email = mysqli_query($con, "SELECT id FROM usuario WHERE email='$email'");
    $res_email = mysqli_num_rows($sql_email);
    
    
    if ($res_email == 0){
 
        echo "Este email não está cadastrado no sistema, por favor insira um email válido.<br /><br />";
 
        include "recuperarSenha.php";
 
        exit();
    }

    // Se tudo OK vamos gerar uma nova senha e enviar para o email do usuário!
 
    function makeRandomPassword(){
        include "conexao.php";
        $salt = "abchefghjkmnpqrstuvwxyz0123456789";
        srand((double)microtime()*1000000);
        $i = 0;
 
        while ($i <= 7){
 
            $num = rand() % 33;
            $tmp = substr($salt, $num, 1);
         //   $pass = $pass . $tmp;
            
            $i++;
 
        }
 
         // return $pass;
 
    }
 
    $senha_randomica = makeRandomPassword();
    $senha = md5($senha_randomica);
    $sql = mysql_query(
 
                       "UPDATE usuario SET senha='$senha'
                       WHERE email ='$email'"
 
                       );
 
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: Teu Domínio - Webmaster<email@brainzer.com.br>"; 
 
    $subject = "Sua nova senha em brainzer.com.br";
 
    $message = "Olá, redefinimos sua senha.<br /><br />
               <strong>Nova Senha</strong>: $senha_randomica<br /><br />
 
               <a href='http://www.brainzer.com/pagina_inicial.php'>
               http://www.brainzer.com/pagina_inicial.php
               </a><br /><br />
               Obrigado!<br /><br />
               Webmaster<br /><br /><br />
 
               Esta é uma mensagem automática, por favor não responda!";
 
                mail($email, $subject, $message, $headers);
 
                echo "Sua nova senha foi gerada com sucesso e enviada para o seu email!<br />
                     Por favor verifique seu email!<br /><br />"; 
 
                include "novaSenha.php";
}

