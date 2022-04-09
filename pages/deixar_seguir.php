<?php
      session_start();

      if(!isset($_SESSION['usuario'])){
          header('Location: index.php?erro=1');
      }
  
  
      $id_usuario = $_SESSION['id_usuario'];
      require_once 'db.class.php';
  
      $deixar_seguir_id_usuario = $_POST['deixar_seguir_id_usuario'];
  
      //VERIFICA SE AS VARIÁVEIS ESTÃO VAZIAS
      if($id_usuario == "" || $deixar_seguir_id_usuario == ""){
          die();
      }
     
  
      $classe = new db();
  
      $conexao = $classe->conecta_mysql();
   
      
      
      $sql = "DELETE from usuarios_seguidores WHERE id_usuario = $id_usuario AND seguindo_id_usuario = $deixar_seguir_id_usuario";
      echo $sql;
    
   
      $gravar_dados = mysqli_query($conexao,$sql);
  
    //   if(!$gravar_dados){
    //      echo 'ERRO AO GRAVAR SEGUIDOR NO BANCO DE DADOS!';
    //   }
      

?>