<?php 

require_once 'db.class.php';


$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

echo $email;

$conecta_db = new db();

$link = $conecta_db->conecta_mysql();

$sql = "INSERT INTO usuarios(usuario,email,senha) VALUES ('$usuario', '$email', '$senha')";

//Executar a query
if(mysqli_query($link,$sql)){
    echo 'Usuário cadastrado com sucesso!';
}else{
    echo 'Erro ao tentar cadastrar usuário';
}



?>