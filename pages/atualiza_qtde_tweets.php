<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php?erro=1');
    }


    $id_usuario = $_SESSION['id_usuario'];
    require_once 'db.class.php';

    

    //VERIFICA SE AS VARIÁVEIS ESTÃO VAZIAS
    if($id_usuario == ""){
        die();
    }
   

    $classe = new db();

    $conexao = $classe->conecta_mysql();
 
    
    
     //QTDE TWEETS
     $sql = "SELECT COUNT(*) AS qtde_tweets FROM tweet WHERE id_usuario = $id_usuario";
     $consulta = mysqli_query($conexao,$sql);
     $qtd_tweets = 0;

     if($consulta){
         $registro = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
         $qtd_tweets = $registro['qtde_tweets'];
         echo $qtd_tweets;

     }else{
         echo 'Erro ao consultar Tweets.';
     }
?>