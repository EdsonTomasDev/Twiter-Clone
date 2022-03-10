<?php

class db{

    //host
    private $host = '127.0.0.1';

    //usuario
    private $usuario = 'tom';

    //senha
    private $senha = '1234$*';

    //banco de dados
    private $database = 'twitter_clone';

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

}



?>