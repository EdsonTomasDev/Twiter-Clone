<?php 

require_once 'db.class.php';


$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);//CRIPTOGRAFIA DA SENHA EM 32 CARACTERES

$conecta_db = new db();

$link = $conecta_db->conecta_mysql();

$usuario_existe = false;
$email_existe = false;


//VERIFICAR SE O USUARIO JÁ EXISTE
$sql = "SELECT * FROM `usuarios` WHERE usuario = '$usuario'";
if($consulta_usuario = mysqli_query($link, $sql)){

   $dados_usuario = mysqli_fetch_array($consulta_usuario);
   if(isset($dados_usuario['usuario'])){

        $usuario_existe = true;
   }


}else{
    echo 'Erro ao tentar verificar o registro de usuário!';
}

//VERIFICAR SE O E-MAIL JÁ EXISTE
$sql = "SELECT * FROM `usuarios` WHERE email = '$email'";
if($consulta_usuario = mysqli_query($link, $sql)){

   $dados_usuario = mysqli_fetch_array($consulta_usuario);
   if(isset($dados_usuario['email'])){
    $email_existe = true;
    //echo $dados_usuario['email'];
   }

   //var_dump($dados_usuario);

}else{
    echo 'Erro ao tentar verificar o registro de e-mail!';
}

//SE USUÁRIO OU E-MAIL EXISTE
if($usuario_existe || $email_existe){

    //VARIÁVEL ARMAZENA ERRO
    $retorno_get = '';

    if($usuario_existe){
        $retorno_get.= "erro_usuario=1&";
    }

    if($email_existe){
        $retorno_get.= "erro_email=1&";
    }


    header('Location: ../inscrevase.php?'.$retorno_get);
    die();
}



$sql = "INSERT INTO usuarios(usuario,email,senha) VALUES ('$usuario', '$email', '$senha')";

//Executar a query
if(mysqli_query($link,$sql)){
    echo 'Usuário cadastrado com sucesso!';
}else{
    echo 'Erro ao tentar cadastrar usuário';
}



?>