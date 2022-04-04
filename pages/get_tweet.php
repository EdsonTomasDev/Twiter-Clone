<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php?erro=1');
    }


    $id_usuario = $_SESSION['id_usuario'];
    require_once 'db.class.php';
   

    $classe = new db();

    $conexao = $classe->conecta_mysql();
 
        
    $sql = "SELECT * FROM `tweet` WHERE id_usuario = $id_usuario ORDER BY data_inclusao DESC";
 
    echo $sql;

?>