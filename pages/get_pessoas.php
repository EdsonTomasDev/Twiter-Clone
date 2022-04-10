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

          //$sql = "SELECT u.* , us.* FROM usuarios as u LEFT JOIN usuarios_seguidores as us ON (us.id_usuario = $id_usuario AND u.id = us.seguindo_id_usuario) WHERE u.usuario like '%$nome_pessoa%' AND u.id <> $id_usuario";

          $sql = "SELECT u.* , us.* FROM usuarios as u LEFT JOIN usuarios_seguidores as us";
          $sql.= " ON (us.id_usuario = $id_usuario AND u.id = us.seguindo_id_usuario) WHERE ";
          $sql.= " u.usuario like '%$nome_pessoa%' AND u.id <> $id_usuario";

          //echo $sql;
          $consulta = mysqli_query($conexao,$sql);

          if($consulta){

            while($registro = mysqli_fetch_array($consulta, MYSQLI_ASSOC)){
                echo '<a href="#" class="list-group-item">';
                
                echo '<strong>'.$registro['usuario'].'</strong> <small> - '.$registro['email'].' </small>';

                echo '<p class="list-group-item-text pull-right">';

                  $esta_seguindo_usuario_sn = isset($registro['id_usuario_seguidor']) && !empty($registro['id_usuario_seguidor']) ? 'S' : 'N';
                  $btn_seguir_display = 'block';
                  $btn_deixar_seguir_display = 'block';

                  if($esta_seguindo_usuario_sn == 'S'){
                    $btn_seguir_display = 'none';
                   
                  }else{
                    $btn_deixar_seguir_display = 'none';

                  }

                echo '<button type="button" id="btn_seguir_'.$registro['id'].'" style="display:'.$btn_seguir_display.'" class="btn btn-default btn_seguir" data-id_usuario="'.$registro['id'].'">Seguir</button>';
                echo '<button type="button" id="btn_deixar_seguir_'.$registro['id'].'" style="display:'.$btn_deixar_seguir_display.'" class="btn btn-primary btn_deixar_seguir" data-id_usuario="'.$registro['id'].'">Deixar de Seguir</button>';
                echo '</p>';
                echo '<div class="clearfix"></div>';
                echo '</a>';
                
            }

                



          }else{
            echo 'Erro ao consultar pessoas no banco de dados!';
        }
?>