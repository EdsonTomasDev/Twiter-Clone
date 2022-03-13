<?php
    require_once 'db.class.php';

   $usuario = $_POST['usuario'];
   $senha = $_POST['senha'];

   $classe = new db();

   $conexao = $classe->conecta_mysql();

   
   $sql = "SELECT * from usuarios where usuario='$usuario' and senha='$senha'";

 

   $consulta = mysqli_query($conexao,$sql);
   

   if($consulta){
    $dados_usuario = mysqli_fetch_array($consulta);

    //VERIFICAR SE EXISTE RESULTADOS NA CONSULTA AO BANCO DE DADOS
    if(isset($dados_usuario['usuario'])){
        echo '<br>conexão realizada com sucesso, usuário encontrado!';

    }else{
        //SE NÃO EXISTIR O USUÁRIO, ENTÃO HÁ O REDIRECIONAMENTO PARA A PÁGINA INDEX.PHP COM UM PARÂMETRO DE ERRO
        header('Location: ../index.php?erro=1');
        
    }
    
}else{
    echo 'ERRO AO TENTAR SER CONECTAR COM O BANCO DE DADOS!';
}
?>