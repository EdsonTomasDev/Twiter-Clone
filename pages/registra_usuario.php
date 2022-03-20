<?php 

require_once 'db.class.php';


$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);//CRIPTOGRAFIA DA SENHA EM 32 CARACTERES

$conecta_db = new db();

$link = $conecta_db->conecta_mysql();

//VERIFICAR SE O USUARIO JÁ EXISTE
$sql = "SELECT * FROM `usuarios` WHERE usuario = '$usuario'";
if($consulta_usuario = mysqli_query($link, $sql)){

   $dados_usuario = mysqli_fetch_array($consulta_usuario);
   if(isset($dados_usuario['usuario'])){
       echo 'Usuário já cadastrado!';
   }else{
       echo 'Usuário não cadastrado, pode cadastrar!';
   }


}else{
    echo 'Erro ao tentar verificar o registro de usuário!';
}

//VERIFICAR SE O E-MAIL JÁ EXISTE
$sql = "SELECT * FROM `usuarios` WHERE email = '$email'";
if($consulta_usuario = mysqli_query($link, $sql)){

   $dados_usuario = mysqli_fetch_array($consulta_usuario);
   if(isset($dados_usuario['email'])){
       echo 'E-mail já cadastrado para outro usuário, favor utilizar outro e-mail!';
   }else{
       echo 'E-mail não cadastrado, pode cadastrar!';
   }

   //var_dump($dados_usuario);

}else{
    echo 'Erro ao tentar verificar o registro de e-mail!';
}

//echo $email;

die();

$sql = "INSERT INTO usuarios(usuario,email,senha) VALUES ('$usuario', '$email', '$senha')";

//Executar a query
if(mysqli_query($link,$sql)){
    echo 'Usuário cadastrado com sucesso!';
}else{
    echo 'Erro ao tentar cadastrar usuário';
}



?>