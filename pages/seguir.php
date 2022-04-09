<?php
      session_start();

      if(!isset($_SESSION['usuario'])){
          header('Location: index.php?erro=1');
      }
  
  
      $id_usuario = $_SESSION['id_usuario'];
      require_once 'db.class.php';
  
      $seguir_id_usuario = $_POST['seguir_id_usuario'];
  
      //VERIFICA SE AS VARIÁVEIS ESTÃO VAZIAS
      if($id_usuario == "" || $seguir_id_usuario == ""){
          die();
      }
     
  
      $classe = new db();
  
      $conexao = $classe->conecta_mysql();
   
      
      
      $sql = "INSERT INTO usuarios_seguidores (id_usuario, seguindo_id_usuario) VALUES ($id_usuario,$seguir_id_usuario)";
      
    
   
      $gravar_dados = mysqli_query($conexao,$sql);
  
      if(!$gravar_dados){
         echo 'ERRO AO GRAVAR SEGUIDOR NO BANCO DE DADOS!';
      }
      

?>