<?php
    require_once 'db.class.php';

   $usuario = $_POST['usuario'];
   $senha = $_POST['senha'];

   $classe = new db();

   $conexao = $classe->conecta_mysql();

   
   $sql = "SELECT * from usuarios where usuario='$usuario' and senha='$senha'";

 

   $consulta = mysqli_query($conexao,$sql);
   

   if($consulta){
    $dados_usuario = mysqli_fetch_array($consulta);

    var_dump($dados_usuario);
    echo '<br>conexão realizada com sucesso';
}else{
    echo 'ERRO AO TENTAR SER CONECTAR COM O BANCO DE DADOS!';
}
?>