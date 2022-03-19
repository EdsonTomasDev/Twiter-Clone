<?php

    
    require_once 'pages/db.class.php';

  

   $classe = new db();

   $conexao = $classe->conecta_mysql();

   
   $sql = "SELECT * from usuarios";

 

   $consulta = mysqli_query($conexao,$sql);
   

   if($consulta){
    $dados_usuario = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
   
    $dados_usuario2 = mysqli_fetch_array($consulta, MYSQLI_NUM);

    $dados_usuario3 = mysqli_fetch_array($consulta, MYSQLI_BOTH);
      
    var_dump($dados_usuario);
    echo'<br>';
    var_dump($dados_usuario2);
    echo'<br>';
    var_dump($dados_usuario3);

    
    }else{
        echo 'ERRO AO TENTAR SER CONECTAR COM O BANCO DE DADOS!';
    }
?>