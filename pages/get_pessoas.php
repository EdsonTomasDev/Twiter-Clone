<?php
          session_start();

          if(!isset($_SESSION['usuario'])){
              header('Location: index.php?erro=1');
          }
      
      
          $id_usuario = $_SESSION['id_usuario'];
          require_once 'db.class.php';
         
      
          $classe = new db();
      
          $conexao = $classe->conecta_mysql();

          $nome_pessoa = $_POST['nome_pessoa'];

          //echo $nome_pessoa;

          $sql = "SELECT * from usuarios where usuario like '%$nome_pessoa%' AND id <> $id_usuario ";

          $consulta = mysqli_query($conexao,$sql);

          if($consulta){

            while($registro = mysqli_fetch_array($consulta, MYSQLI_ASSOC)){
                echo '<a href="#" class="list-group-item">';
                
                echo '<strong>'.$registro['usuario'].'</strong> <small> - '.$registro['email'].' </small>';
    
                echo '</a>';
                
            }

                



          }else{
            echo 'Erro ao consultar pessoas no banco de dados!';
        }
?>