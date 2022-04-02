<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php?erro=1');
    }


    $id_usuario = $_SESSION['id_usuario'];
    require_once 'db.class.php';

    $texto_tweet = $_POST['texto_tweet'];

    //VERIFICA SE AS VARIÁVEIS ESTÃO VAZIAS
    if($id_usuario == "" || $texto_tweet == ""){
        die();
    }
   

    $classe = new db();

    $conexao = $classe->conecta_mysql();
 
    
    
    $sql = "INSERT INTO tweet (id_usuario, tweet) VALUES ($id_usuario,'$texto_tweet')";
 
  
 
    $gravar_dados = mysqli_query($conexao,$sql);

    if($gravar_dados){
        echo 'Tweet gravado com sucesso!';
    }else{
        echo 'ERRO AO GRAVAR TWEET NO BANCO DE DADOS!';
    }
?>