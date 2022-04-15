<?php

class db{

    // //host
    // private $host = '127.0.0.1';

    // //usuario
    // private $usuario = 'tom';

    // //senha
    // private $senha = '1234$*';

    // //banco de dados
    // private $database = 'twitter_clone';

    ///////////////////////////////////////////////////////////////////////////////////////////

      //host
      private $host = 'us-cdbr-east-05.cleardb.net';

      //usuario
      private $usuario = 'bc51b94059f694';
  
      //senha
      private $senha = '40572bf0';
  
      //banco de dados
      private $database = 'heroku_daaefe1c8dc11ae';

    public function conecta_mysql(){

        //criar conexão
       $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        //ajustar o charset de comunicação entre a aplicação e o banco de dados
        mysqli_set_charset($con, 'utf8');

        //Verificar se há erro de conexão
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o banco de dados MYSQL: '. mysqli_connect_error();
        }

        return $con;
    }

    public function atualizar_tweets($id_usuario){
        $conexao = $this->conecta_mysql();
        //QTDE TWEETS
        $sql = "SELECT COUNT(*) AS qtde_tweets FROM tweet WHERE id_usuario = $id_usuario";
        $consulta = mysqli_query($conexao,$sql);
        $qtd_tweets = 0;

        if($consulta){
            $registro = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
            $qtd_tweets = $registro['qtde_tweets'];

        }else{
            echo 'Erro ao consultar Tweets.';
        }

        return $qtd_tweets;
    }
//-------------------------------------------------------------------------------------------------
    public function atualizar_seguidores($id_usuario){
        $conexao = $this->conecta_mysql();
        //QTDE SEGUIDORES
        $sql = "SELECT COUNT(*) AS seguidores FROM usuarios_seguidores WHERE seguindo_id_usuario = $id_usuario";
        $consulta = mysqli_query($conexao,$sql);
        $qtd_seguidores = 0;

        if($consulta){
            $registro = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
            $qtd_seguidores = $registro['seguidores'];

        }else{
            echo 'Erro ao consultar seguidores.';
        }


        return $qtd_seguidores;
    }

}



?>