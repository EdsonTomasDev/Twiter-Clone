<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php?erro=1');
    }


    $id_usuario = $_SESSION['id_usuario'];
    require_once 'db.class.php';
   

    $classe = new db();

    $conexao = $classe->conecta_mysql();
 
        
    $sql = "SELECT DATE_FORMAT(t.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, t.tweet, u.usuario ";
    $sql.= "FROM tweet AS t JOIN usuarios AS u ON (t.id_usuario = u.id)";
    $sql.= "WHERE id_usuario = $id_usuario ";
    $sql.= "OR id_usuario IN (SELECT seguindo_id_usuario FROM usuarios_seguidores WHERE id_usuario=$id_usuario) ";
    $sql.= "ORDER BY data_inclusao DESC";
    // echo $sql;
    // die();
 
    $consulta = mysqli_query($conexao, $sql);

    if($consulta){

        while($registro = mysqli_fetch_array($consulta, MYSQLI_ASSOC)){
            echo '<a href="#" class="list-group-item">';
                echo '<h4 class="list-group-item-heading">'.$registro['usuario'].'<small> - '.$registro['data_inclusao_formatada'].' </small> </h4>';

                echo '<p class="list-group-item-text">'.$registro['tweet']. '</p>';

            echo '</a>';
            
        }

    }else{
        echo 'Erro ao consultar tweets no banco de dados!';
    }

?>